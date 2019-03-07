<?php
namespace Admin\Controller;

use Think\Controller;

//后台界面控制器
class LoginAdminController extends Controller
{
    //登录
    public function login()
    {
    	$this->display();//展示view的html文件
    }
    //主页
     public function photographAdmin(){
     	$LoginAdmin=M("login_admin");
     	$account=$_POST["account"];
     	$password=$_POST["password"];
     	session('account',$account);
     	$record=$LoginAdmin->find($account);
     	if($record["password"]==$password && !empty($password)){
     		$this->assign('account',$account);
            $this->display();
     	}else{
     		$this->error('登录失败');
     	}
    }
    //用户管理
    public function userAdmin(){
        $this->assign('account',session('account'));
        $loginHome=M('login_home');
        $username=$loginHome->getField('username',true);
        session('username0',$username[0]);
        session('username1',$username[1]);
        $this->assign('username0',$username[0]);
        $this->assign('username1',$username[1]);
        $email=$loginHome->getField('email',true);
        $this->assign('email0',$email[0]);
        $this->assign('email1',$email[1]);
        $wechat=$loginHome->getField('wechat',true);
        $this->assign('wechat0',$wechat[0]);
        $this->assign('wechat1',$wechat[1]);
        $introduction=$loginHome->getField('introduction',true);
        $this->assign('introduction0',$introduction[0]);
        $this->assign('introduction1',$introduction[1]);
        $this->display();
    }
    //用户账户删除
    public function userDele(){
        $loginHome=M('login_home');
        $username0=session('username0');
        $loginHome->delete($username0);
        $this->success("删除成功");

    }
    //用户账户编辑
    public function userEdit(){
    $this->assign('account',session('account'));
            $loginHome=M('login_home');
            $username=$loginHome->getField('username',true);
            session('username0',$username[0]);
            session('username1',$username[1]);
            $this->assign('username0',$username[0]);
            $this->assign('username1',$username[1]);
            $email=$loginHome->getField('email',true);
            $this->assign('email0',$email[0]);
            $this->assign('email1',$email[1]);
            $wechat=$loginHome->getField('wechat',true);
            $this->assign('wechat0',$wechat[0]);
            $this->assign('wechat1',$wechat[1]);
            $introduction=$loginHome->getField('introduction',true);
            $this->assign('introduction0',$introduction[0]);
            $this->assign('introduction1',$introduction[1]);
            $this->display();
    }
    //用户账户修改
    public function userEdit2(){
        $loginHome=M('login_home');
        $data['username']=session('username0');
        $data['email']=$_POST["email"];
        $data['wechat']=$_POST["wechat"];
        $data['introduction']=$_POST["introduction"];
        $loginHome->save($data);
        $this->success();
    }
    //活动发布
    public function activityLaunch(){
        $this->display();
    }
    //活动编辑
    public function activityEdit(){
        $this->display();
    }
}
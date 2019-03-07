<?php
 namespace Home\Controller;

 use Think\Controller;

 class LoginHomeController extends Controller
 {
    //注册逻辑
    public function register(){
            $LoginHome=M("LoginHome");
            $username=$_POST["username"];
            $password=$_POST["password"];
            $password2=$_POST["password2"];
            $record=$LoginHome->find($username);
            if($record) $this->error("用户名已存在，请重新输入");
            if($password!=$password2) $this->error("两次输入的密码不一致，请重新输入");
            if($password=="" | $username=="") $this->error("输入为空，请重新输入");
            $loginhome=D('LoginHome');
            if($loginhome->create()){
                $result=$loginhome->add();
                if($result){
                    $this->success("注册成功");
                 }else{
                    $this->error("注册失败");
                 }
            }
     }
     //登录界面
    public function photographHome(){
                $db=new SQLite3('mydb.db');
                $result=$db->query('select * from user');
                $row=$result->fetchArray(SQLITE3_NUM);
                print_r($row);

                $LoginHome=M("LoginHome");
                $username=$_POST["username"];
                //存储用户名
                session('username',$username);
                $this->username=$username;
             	$password=$_POST["password"];
             	$record=$LoginHome->find($username);
             	if($record["password"]==$password && !empty($password)){
             		$this->assign('username',$username);
             		$this->display();//控制器转到photographHome界面（即摄影社交网站主页）
             	}else{
             		$this->error('登录失败');
             	}
             	$photoTitle0='热门图片';
                $this->assign('photoTitle0',$photoTitle0);
    }
    //热门照片首页
    public function photographHome2(){
        $user_photo=M('user_photo');
        $username="Laura";
        $record=$user_photo->find($username);
        echo($record);
        $shareSum=$user_photo->order('shareSum')->limit(10)->select;
        echo($shareSum);
        $photoTitle0='热门图片';
        $this->assign('photoTitle0',$photoTitle0);
        $this->display();
    }
    //我关注的照片首页
    public function photographHomeFollow(){
        $photoTitle0='我关注的图片';
        $this->assign('photoTitle0',$photoTitle0);
        $this->display();
    }


    //我的主页
    public function userHome(){
        //缓存用户名
        $username=session('username');
        $this->assign('username',$username);
        $LoginHome=M('LoginHome');
        $record=$LoginHome->find($username);
        $this->assign('password',$record["password"]);
        $this->assign('email',$record["email"]);
        $this->assign('wechat',$record["wechat"]);
        $this->assign('introduction',$record["introduction"]);
        $this->display();
    }
    //账户信息设置
    public function modifyUserinfo(){
         $LoginHome=M('LoginHome');
         $data['username']=$_POST["username"];
         $data['password']=$_POST["password"];
         $data['email']=$_POST["email"];
         $data['wechat']=$_POST["wechat"];
         $data['introduction']=$_POST["message"];
         $LoginHome->save($data);
         $this->success('基本信息修改成功');
    }
    //摄影活动主页（为什么src是对的，页面却不能显示图片）
    public function photographActivity(){
        $activityRecord=M('ActivityRecord');
        $activityTitle= $activityRecord->where('activityCategory="摄影外拍"')->getField('activityTitle');
        $this->assign('activityTitle1',$activityTitle);
        $createtime= $activityRecord->where('activityCategory="摄影外拍"')->getField('createtime');
        $savename= $activityRecord->where('activityCategory="摄影外拍"')->getField('savename');
        $pictureAddress=$createtime."/".$savename;
        $pictureAddress="__IMGUploads__/"."".$pictureAddress;
        $this->assign('pictureAddress',$pictureAddress);
        $activityTitle= $activityRecord->where('activityCategory="美食聚会"')->getField('activityTitle');
        $this->assign('activityTitle2',$activityTitle);
        $this->display();
    }
    //活动发布页面
     public function activityLaunch(){
        $username=session('username');
        $this->assign('username',$username);
        $this->display();
     }
     //活动发布页面的具体信息收集传到数据库的activity_record表中（其中活动的图片以名字、日期两个字段存储）
     public function activityPicture(){
                     $username=session('username');
                     $upload = new \Think\Upload();// 实例化上传类
                     $upload->maxSize   =     3145728 ;// 设置附件上传大小
                     $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                     $upload->rootPath  =      'Apps/Home/Uploads/'; // 设置附件上传根目录
                     $upload->savePath  =      ''; // 设置附件上传（子）目录
                     // 上传文件
                     $info   =   $upload->upload();
                     if(!$info) {// 上传错误提示错误信息
                         $this->error($upload->getError());
                     }else{// 上传成功 获取上传文件信息
                         foreach($info as $file){
                             $data['savename']   = $file['savename'];
                             $data['createtime'] = $file['savepath'];
                         }
                     }
                     $data['activityTitle']=$_POST["activityTitle"];
                     $data['activityLeader']=$username;
                     $data['activityFee']=$_POST["activityFee"];
                     $data['activityPlace']=$_POST["activityPlace"];
                     $data['activityPosition']=$_POST["activityPosition"];
                     $data['activityCategory']=$_POST["activityCategory"];
                     $data['activityStartTime']=$_POST["activityStartTime"];
                     $data['activityEndTime']=$_POST["activityEndTime"];
                     $data['activityIntroduction']=$_POST["activityIntroduction"];
                     $model = M('activityrecord');
                     // 取得成功上传的文件信息
                     // 保存当前数据对象
                     $model->add($data);
                     $this->success('发布线下活动成功！');
     }
     //发布摄影作品主页
        public function photoUpload(){
        $this->display();
     }
     //发布摄影作品图片的保存
     public function photoUploadSubmit(){
                             $username=session('username');
                             $upload = new \Think\Upload();// 实例化上传类
                             $upload->maxSize   =     3145728 ;// 设置附件上传大小
                             $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                             $upload->rootPath  =      'Apps/Home/MyPhoto/'; // 设置附件上传根目录
                             $upload->savePath  =      ''; // 设置附件上传（子）目录
                             // 上传文件
                             $info   =   $upload->upload();
                             if(!$info) {// 上传错误提示错误信息
                                 $this->error($upload->getError());
                             }else{// 上传成功 获取上传文件信息
                                 foreach($info as $file){
                                     $data['savename']   = $file['savename'];
                                     $data['createtime'] = $file['savepath'];
                                 }
                             }
                     $data['title']=$_POST["title"];
                     $data['username']=$username;
                     $data['content']=$_POST["content"];
                     $data['location']=$_POST["location"];
                     $data['keyword1']=$_POST["keyword"];
                     $data['photoCategory']=$_POST["photoCategory"];
                     $model = M('user_photo');
                     // 取得成功上传的文件信息
                     // 保存当前数据对象
                     $model->add($data);
                     $this->success('发布摄影图片成功！');
     }
     //我的摄影作品主页
     public function myphoto(){
             $username=session('username');
             $this->assign('username',$username);
             $user_photo=M('user_photo');
             $title= $user_photo->where('username='+'$username')->getField('title',true);
             $this->assign('title0',$title[0]);
             $this->assign('title1',$title[1]);
             session('title0',$title[0]);
             session('title1',$title[1]);
             $createtime= $user_photo->where('username='+'$username')->getField('createtime',true);
             $savename= $user_photo->where('username='+'$username')->getField('savename',true);
             $photo0Addr="__MYIMG__/"."".$createtime[0]."/".$savename[0];
             $this->assign('photo0',$photo0Addr);
             $content= $user_photo->where('username='+'$username')->getField('content',true);
             $location= $user_photo->where('username='+'$username')->getField('location',true);
             $keyword= $user_photo->where('username='+'$username')->getField('keyword1',true);
             $photoCategory= $user_photo->where('username='+'$username')->getField('photoCategory',true);
             session('location',$location[0]);
             session('content',$content[0]);
             session('keyword',$keyword[0]);
             session('photoCategory',$photoCategory[0]);
             $this->display();
     }
     //摄影作品细节
      public function photoDetail(){
             $this->assign('username',session('username'));
             $this->assign('title0',session('title0'));
             $this->assign('location',session('location'));
             $this->assign('content',session('content'));
             $this->assign('keyword',session('keyword'));
             $this->assign('photoCategory',session('photoCategory'));
             $this->display();
      }
     //我的相册
     public function myalbum(){
        $username=session('username');
        $this->assign('username',$username);
        $user_photo=M('user_album');
        $title= $user_photo->where('username='+'$username')->getField('albumTitle',true);
        $this->assign('albumTitle0',$title[0]);
        $keyword= $user_photo->where('username='+'$username')->getField('albumKeyword',true);
        $this->assign('albumKeyword',$keyword[0]);
        $this->display();
     }
     //新增相册主页
     public function addAlbumHome(){
        $this->display();
     }
     //新增相册
     public function addAlbum(){
        $username=session('username');
        $data['username']=$username;
        $data['albumTitle']=$_POST["albumTitle"];
        $data['albumKeyword']=$_POST["albumKeyword"];
        $model = M('user_album');
        // 保存当前数据对象
        $model->add($data);
        $this->success('新增相册成功！');
     }
     //加入我的关注列表（关注要分组：同学/大触/家人）
     public function follow(){
        $username=$_POST["username"];
        echo ($username);
        echo "<script> alert('关注成功！'); location.href='photoDetail.html'</script>";
     }
 }
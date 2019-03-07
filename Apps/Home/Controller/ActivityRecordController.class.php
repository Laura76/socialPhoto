<?php
 namespace Home\Controller;

 use Think\Controller;

 class ActivityRecordController extends Controller
 {
         public function photographActivity(){

             $activityRecord=M('activityRecord');
             $condition['activityCategory']='摄影外拍';
             $record=$activityRecord->where($condition)->select();

             echo $record["activityCategory"];
             echo "ddddd";
         }


  }
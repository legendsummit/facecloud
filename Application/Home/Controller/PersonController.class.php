<?php

namespace Home\Controller;
use Common\Controller\BasePersonController;
	class PersonController extends BasePersonController {
      public function _initialize(){
        //管理员未登录
        if(!isset($_SESSION['user'])){
          $this->redirect('Verify/login');
        }
      }
  		public function index(){
  			R('Common/BasePerson/index',array('uid'=>$_SESSION['uid']));
  		}
  		public function edit(){
  			if(!check($_SESSION['uid']))
  				$this->redirect('index');
  			R('Common/BasePerson/edit');
  		}	
	}
?>
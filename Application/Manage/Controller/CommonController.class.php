<?php
// 
	namespace Manage\Controller;
	use Think\Controller;
	header("Content-type:text/html;charset=utf-8");
	class CommonController extends Controller {
	  public function _initialize(){
	  	  //管理员未登录
	    	if(!isset($_SESSION['admin'])){
	    		$this->redirect('Verify/login');
	    	}
		}
	}
?>
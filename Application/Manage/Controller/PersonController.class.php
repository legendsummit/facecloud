<?php

namespace Manage\Controller;
use Common\Controller\BasePersonController;
	class PersonController extends BasePersonController {
    public function _initialize(){
        //管理员未登录
        if(!isset($_SESSION['admin'])){
          $this->redirect('Verify/login');
        }
    }
	}
?>
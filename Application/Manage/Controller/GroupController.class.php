<?php
// 
namespace Manage\Controller;
use Think\Controller;
class GroupController extends Controller {
    public function index(){
    	$this->display();
	}
	public function show(){
		$Data = M('person'); // 实例化Data数据模型
        $this->data = $Data->select();
    	$this->display();
	}
	public function create(){
		$this->display();
	}
	public function create_handle(){
		$facepp = new \Org\Util\Facepp();
		$name=I('post.name');
		$params=array('group_name'=>$name);
		$response=$facepp->execute('/group/create',$params);
	}
	
}
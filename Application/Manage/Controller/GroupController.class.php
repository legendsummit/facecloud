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
	public function train(){
		$group_name="star";
		$params=array('group_name'=>$group_name);
		$response=getResponse('/train/identify',$params);
		$paramsession['session_id']=$response['session_id'];
		$response=getResponse('/info/get_session',$paramsession);
		if($response['result']['success'])
			$this->success('训练成功','index');
		else 
			$this->error('训练失败','index',1);
	}
	
}
<?php
// 
namespace Manage\Controller;
use Think\Controller;
class GroupController extends Controller {
    public function index(){
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
	// public function add(){
	// 	$this->display();
	// }
	// public function add_handle(){
	// 	//要通过上传文件获取face,现在仅做测试
	// 	$facepp = new \Org\Util\Facepp();
	// 	$url="http://summitfox.qiniudn.com/1.jpg";
	// 	$response=getface($url);
	//     $face_id=$response[0]['face_id'];
	//     //set_name需要通过I来获取
	//     $set_name='test';
	//     $params=array('faceset_name'=>$set_name,'face_id'=>$face_id);
	//     $response=$facepp->execute('/faceset/add_face',$params);
	// }
}
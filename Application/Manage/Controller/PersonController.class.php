<?php

namespace Manage\Controller;
use Think\Controller;

class PersonController extends Controller {
    public function index(){
    	$Data = M('person'); // 实例化Data数据模型
        $this->data = $Data->select();
    	$this->display();
	}
	public function create(){
		$this->display();
	}
	public function create_handle(){
		$facepp = new \Org\Util\Facepp();
		$data=I('post.');
		var_dump($data);
		echo '<br><br>';
		//url需要从用户传入
		$url="http://summitfox.qiniudn.com/20141102084643851.jpg";
		$response=getface($url);
	    $face_id=$response[0]['face_id'];
	    //person信息
		$person_params=array('person_name'=>$data['name'],'face_id'=>$face_id);
		$responseperson=$facepp->execute('/person/create',$person_params);
		$responseperson=json_decode($responseperson['body'],true);
		//获得person_id
		$data['person_id']=$responseperson['person_id'];
		//添加用户到数据库
		$person = M("person");
		$person->add($data); 
		//下面需要把person放到group中
		$group_params=array('group_name'=>'star','person_name'=>$data['name']);
		$facepp->execute('/group/add_person',$group_params);

	}
}
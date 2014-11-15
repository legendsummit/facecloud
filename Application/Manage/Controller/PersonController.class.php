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
	    //person信息
		$person_params=array('person_name'=>$data['name']);
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
	public function add_image(){
		$this->name=I('name');
		$this->time=time();
		$this->display();
	}
	public function add_image_handle(){
		$facepp = new \Org\Util\Facepp();
		$time=I('time');
		$person_name=I('name');
		$QINIURUL="http://legend-face.qiniudn.com/";
		$url=$QINIURUL.$time;
		$response=getface($url);
	    $face_id=$response[0]['face_id'];
	    $params=array('face_id'=>$face_id,'person_name'=>$person_name);
	    $response=$facepp->execute('/person/add_face',$params);
	    if($response['http_code']==200){
	    	$this->redirect('Manage/Person/add_image', 
	    		array('name' => $person_name), 0.5, 'success!');
	    }
	}
}
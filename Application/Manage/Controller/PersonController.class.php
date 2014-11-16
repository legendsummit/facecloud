<?php

namespace Manage\Controller;
use Think\Controller;

class PersonController extends Controller {
    public function index(){
    	$Data = M('person'); // 实例化Data数据模型
        $this->data = $Data->select();
    	$this->display();
	}
	public function search(){
		$Data=M('person');
		$name=I('name');
		$data=$Data->where(array('name'=>$name))->find();
		if($data)
			$this->redirect('Manage/Person/show',array('id' => $data['id']), 0);
		else
			$this->error('未找到人物','index',1);
	}
	public function create(){
		$this->display();
	}
	public function edit(){
		$id=I('id');
		$Data=M('person');
		$this->data=$Data->where("id=$id")->find();
		$this->display();
	}
	public function edit_handle(){
		$person=M('person');
		$data=I('post.');
		$person->save($data); // 根据条件保存修改的数据
		$this->redirect('Manage/Person/show',array('id' => $data['id']), 0);
	}
	public function show(){
		$id=I('id');
		$Data=M('person');
		$this->data=$Data->where("id=$id")->find();
		$this->display();
	}
	public function create_handle(){
		$facepp = new \Org\Util\Facepp();
		$data=I('post.');
	    //person信息
		$person_params=array('person_name'=>$data['name']);
		$responseperson=$facepp->execute('/person/create',$person_params);
		if($response['http_code']!=200)
			$this->error('创建失败，名字已存在或非法,请重新创建','create');
		else{
			$responseperson=json_decode($responseperson['body'],true);
			//获得person_id
			$data['person_id']=$responseperson['person_id'];
			//添加用户到数据库
			$person = M("person");
			$person->add($data); 
			//下面需要把person放到group中
			$group_params=array('group_name'=>'star','person_name'=>$data['name']);
			$facepp->execute('/group/add_person',$group_params);
			$this->success('新增成功', 'index');
		}
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
		//将url上传到feace++
		$response=getface($url);
	    $face_id=$response[0]['face_id'];
	    $params=array('face_id'=>$face_id,'person_name'=>$person_name);
	    $response=$facepp->execute('/person/add_face',$params);
	    if($response['http_code']==200){
	    	//将url添加到本地数据库中
			$ImageUrls=M('imageurls');	//实例化
			$ImageUrls->add(array('name'=>$person_name,'url'=>$url));
	    	$this->redirect('Manage/Person/add_image', 
	    		array('name' => $person_name), 0.5, '上传成功!');
	    }else {
	    	print_r($response);
	    }
	}
}
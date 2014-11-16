<?php

namespace Manage\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class PersonController extends Controller {
    public function index(){
    	$Data = M('person'); // 实例化Data数据对象
		$count      = $Data->count();// 查询满足要求的总记录数 $map表示查询条件
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询
		$list = $Data->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('data',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
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
	public function create_handle(){
		$facepp = new \Org\Util\Facepp();
		$data=I('post.');
	    //person信息
		$person_params=array('person_name'=>$data['name']);
		$responseperson=$facepp->execute('/person/create',$person_params);
		if($responseperson['http_code']!=200)
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
	public function edit(){
		$id=I('id');
		$Data=M('person');
		$this->data=$Data->where("id=$id")->find();
		$this->display();
	}
	public function edit_handle(){
		$person=M('person');
		$data=I('post.');
		$oldperson=$person->where(array('id'=>$data['id']))->find();
		$name=$oldperson['name'];
		//修改face++上的信息/person/set_info
		$facepp = new \Org\Util\Facepp();
		$params=array('person_name'=>$name,'name'=>$data['name']);
		$response=$facepp->execute('/person/set_info',$params);
		$person->save($data); // 根据条件保存修改的数据
		$this->redirect('Manage/Person/show',array('id' => $data['id']),0);
	}
	public function show(){
		$id=I('id');
		$Data=M('person');
		$this->data=$Data->where("id=$id")->find();
		$this->display();
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
	public function delete(){
		$facepp=new \Org\Util\Facepp();
		$name=I('name');
		//删除FACE++中人物的信息
		$response=$facepp->execute('/person/delete',array('person_name'=>$name));
		//从数据库中删除人物信息
		$Person=M('person');
		$Person->where(array('name'=>$name))->delete(); 
		$this->redirect('index');
	}
}
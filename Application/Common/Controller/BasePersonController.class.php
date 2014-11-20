<?php

namespace Common\Controller;
use Think\Controller;
header("Content-type:text/html;charset=utf-8");
class BasePersonController extends Controller {
  public function index($user=null){
    	$Data = M('person'); // 实例化Data数据对象
		$count      = $Data->count();// 查询满足要求的总记录数 $map表示查询条件
		$Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询
		if($user==null)
			$list = $Data->limit($Page->firstRow.','.$Page->listRows)->select();
		else
			$list = $Data->limit($Page->firstRow.','.$Page->listRows)
		     ->where(array('user'=>$user))->select();
		$this->assign('data',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}
	public function search(){
		$Data=M('person');
		$name=I('name');
		$data=$Data->where(array('name'=>$name))->find();
		if($data)
			$this->redirect('show',array('id' => $data['id']), 0);
		else
			$this->error('未找到人物','index',1);
	}
	public function create(){
		$this->display();
	}
	public function create_handle(){
		$facepp = new \Org\Util\Facepp();
		$data=I('post.');
		$data['introduce']=htmlspecialchars_decode($data['introduce']);
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
		$this->time=time();
		$this->data=$Data->where(array('id'=>$id))->find();
		$this->display();
	}
	public function edit_handle(){
		$person=M('person');
		$data=I('post.');
		$data['introduce']=htmlspecialchars_decode($data['introduce']);
		$oldperson=$person->where(array('id'=>$data['id']))->find();
		$name=$oldperson['name'];
		//修改face++上的信息/person/set_info
		$facepp = new \Org\Util\Facepp();
		$params=array('person_name'=>$name,'name'=>$data['name']);
		$response=$facepp->execute('/person/set_info',$params);
		$person->save($data); // 根据条件保存修改的数据
		$this->redirect('show',array('id' => $data['id']),0);
	}
	public function showimages(){
		$pid=I('pid');
		$ImageUrls=M('imageurls');
		$urls=$ImageUrls->where(array('pid'=>$pid))->getField('id,url');
		$this->urls=$urls;
		$this->pid=$pid;
		$this->display('images');
	}
	public function show(){
		$id=I('id');
		$Data=M('person');
		$this->data=$Data->where(array('id'=>$id))->find();
		$this->display();
	}
	public function json(){
		$id=I('id');
		$Data=M('person');
		$data=$Data->where(array('id'=>$id))->find();	
		$Urls=M('imageurls');
		$url=$Urls->where(array('pid'=>$id))->find();
		$data['url']=$url['url'];	
		echo json_encode($data);
	}
	public function add_image_handle(){
		$id=I('id');
		$Person_Info=M('person');
		$person_info=$Person_Info->where(array('id'=>$id))->find();
		$person_name=$person_info['name'];
		$facepp = new \Org\Util\Facepp();
		$time=I('time');
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
			$ImageUrls->add(array('name'=>$person_name,'url'=>$url,
				'pid'=>$id,'face_id'=>$face_id));
	    	$this->redirect('edit', 
	    		array('id' =>$id), 0.5, '上传成功!');
	    }else {
	    	print_r($response);
	    }
	}
	public function del_image(){
		$id=I('id');
		$Person_Info=M('person');
		$person_info=$Person_Info->where(array('id'=>$id))->find();
		$facepp = new \Org\Util\Facepp();
		$name=$person_info['name'];
		$Data=M('person');
		$person_data=$Data->where(array('name'=>$name))->find();
		$img_key=I('img_key');
		$QINIURUL="http://legend-face.qiniudn.com/";
		$url=$QINIURUL.$img_key;
		delete_qiniu_img($img_key);
		//查找对应Face并删除
		$Image_data=M('imageurls');
		$image_data=$Image_data->where(array('url'=>$url))->find();
		//从FACE++中删除
		$params=array('person_name'=>$name,'face_id'=>$image_data['face_id']);
		$result=getResponse('/person/remove_face',$params);
		//将图片从本地数据库中删除
		$Image_data->where(array('url'=>$url))->delete();
		//将照片从七牛服务器删除
		delete_qiniu_img($img_key);
		$this->redirect('showimages',array('pid'=>$id));	
	}
	public function delete(){
		$facepp=new \Org\Util\Facepp();
		$id=I('id');
		$Person_Info=M('person');
		$person_info=$Person_Info->where(array('id'=>$id))->find();
		$name=$person_info['name'];
		//删除FACE++中人物的信息
		$response=$facepp->execute('/person/delete',array('person_name'=>$name));
		if($response['http_code']==200){
			//从数据库中删除人物信息
			$Person_Info->where(array('id'=>$id))->delete(); 
			//删除七牛服务器中人物的照片
			$Image=M('imageurls');
			$images=$Image->where(array('name'=>$name))->select();
			foreach ($images as $img) {
				$key=substr($img['url'],31);
				delete_qiniu_img($key);
			}
			//将人物从数据库删除
			$Image->where(array('pid'=>$id))->delete();
			$this->redirect('index');
		}
		else{
			print_r($response);
		}
	}
}
?>
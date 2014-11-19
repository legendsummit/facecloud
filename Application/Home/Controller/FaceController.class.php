<?php
// 
namespace Home\Controller;
use Think\Controller;
class FaceController extends Controller {
    public function index(){
	}
	public function identify(){
		$this->name=I('name');
		//获取当前时间
		$this->time=time();
		$this->display();
	}
	public function identify_handle(){
		header("Content-Type:text/html;charset=utf-8"); 
		$time=I('time');
		$person_name=I('name');
		$QINIURUL="http://legend-image.qiniudn.com/";
		//上传图片的URL
		$url=$QINIURUL.$time;
		$params=array('url'=>$url,'group_name'=>'star');
		$response=getResponse('/recognition/identify',$params);
		$response=$response['face'][0]['candidate'];
		if($response!=null){
			//获得搜索最相似的三个人
			$i=0; 
			$Person=M("person");
			$person_name=$response[0]['person_name'];
			$result=$Person->where(array('name'=>$person_name))->find();
			$result['confidence']=$response[0]['confidence'];
			$this->result=$result;
			$this->display('result');
		}
	}
	
}
<?php
// 
namespace Home\Controller;
use Think\Controller;
class FaceController extends Controller {
    public function index(){
    	$person_id="fd99ba5c58879e24d72d";
    	$Person = M("person"); 
    	$data = $Person->where(array('person_id'=>$person_id))->find();
    	var_dump($data);
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
			foreach ($response as $vo) {
				$person_name=$vo['person_name'];
    			$result[$i]=$Person->where(array('name'=>$vo['person_name']))->find();
    			$result[$i]['confidence']=$vo['confidence'];
    			$i++;	
			}
			var_dump($result);
		}
	}
	
}
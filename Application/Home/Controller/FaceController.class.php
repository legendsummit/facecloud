<?php
// 
namespace Home\Controller;
use Think\Controller;
class FaceController extends Controller {
    public function index(){
    	$facepp = new \Org\Util\Facepp();
    	$params=array('url'=>'http://summitfox.qiniudn.com/1.jpg');
		$response=$facepp->execute('/detection/detect',$params);
		print_r($response);
		echo "</br>";
		echo "</br>";
		$params=array('face_id'=>'cf9fd1501c3c229381bcc9fa64ee25df');
		$rasopnse=$facepp->execute('/info/get_face',$params);
		print_r($response);
		//echo $response['request_url'];
		echo "</br>";
	}
	
}
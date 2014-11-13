<?php
	function getface($url){
		$facepp = new \Org\Util\Facepp();
		$params=array('url'=>$url);
		$response=$facepp->execute('/detection/detect',$params);
		$response=json_decode($response['body'],true);
		return $response['face'];
	}
?>
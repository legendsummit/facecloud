<?php
	function getface($url){
		$facepp = new \Org\Util\Facepp();
		$params=array('url'=>$url);
		$response=$facepp->execute('/detection/detect',$params);
		$response=json_decode($response['body'],true);
		return $response['face'];
	}
	function getPersonImageUrl($name){
		$facepp = new \Org\Util\Facepp();
		$params=array('person_name'=>$name);
		$response=$facepp->execute('/person/get_info',$params);
		$data = json_decode($response['body'],1);
		$i=0;
		foreach ($data['face'] as $face) {
          $face_info = $facepp->execute('/info/get_face',array('face_id'=>$face['face_id']));
          $face_info = json_decode($face_info['body'],1);
          $urls[$i++]=$face_info['face_info'][0]['url'];
    	}
    	return($urls);
	}
?>
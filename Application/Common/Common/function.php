<?php
	function getface($url){
		$facepp = new \Org\Util\Facepp();
		$params=array('url'=>$url);
		$response=$facepp->execute('/detection/detect',$params);
		$response=json_decode($response['body'],true);
		return $response['face'];
	}
	function getPersonImageUrlFromAPI($name){
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
	function getPersonFaceFromAPI($name){
		$facepp = new \Org\Util\Facepp();
		$params=array('person_name'=>$name);
		$response=$facepp->execute('/person/get_info',$params);
		$data = json_decode($response['body'],1);
		$i=0;
		foreach ($data['face'] as $face) {
          $face_info = $facepp->execute('/info/get_face',array('face_id'=>$face['face_id']));
          $face_info = json_decode($face_info['body'],1);
          $faces['face_id'][$i]=$face_info['face_info'][0]['face_id'];
          $faces['url'][$i]=$face_info['face_info'][0]['url'];
          $i++;
    	}
    	return($faces);
	}
	function getPersonImageUrl($name){
		$ImageUrls=M('imageurls');
		$datas=$ImageUrls->where(array('name'=>$name))->getField('id,url');
		$i=0;
		foreach ($datas as $data) {
			$urls[$i++]=$data;
		}
		return $urls;
	}
	//操作某个face++api并返回操作结果
	function getResponse($url,$params){
		$facepp = new \Org\Util\Facepp();
		$response=$facepp->execute($url,$params);
		$response=json_decode($response['body'],true);
		return $response;
	}
	//从七牛删除文件
	function delete_qiniu_img($key1){
		require_once("Public/php/qiniu/rs.php");
		$bucket = "legend-face";
		$accessKey = 'O382ET2CmCVfdylV3kK31uQQacE595YNm8hOrBf5';
		$secretKey = 'H91chSYT4fIBMgNvfV_oVRhWFzNHIvHPGeSh0FNs';
		Qiniu_SetKeys($accessKey, $secretKey);
		$client = new Qiniu_MacHttpClient(null);
		$err = Qiniu_RS_Delete($client, $bucket, $key1);
		if ($err !== null) {
	   		 var_dump($err);
		} 
	    	
	}
?>
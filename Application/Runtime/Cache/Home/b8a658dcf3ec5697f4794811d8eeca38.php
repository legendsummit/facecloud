<?php if (!defined('THINK_PATH')) exit();?> <html>
 <head>
 	<meta charset="utf-8">
 	<title>识别明星</title>
 </head>
 <body>
 	注意:必须上传完图片后才可添加到明星<br>
 	<?php  require_once("Public/php/qiniu/rs.php"); $accessKey = 'O382ET2CmCVfdylV3kK31uQQacE595YNm8hOrBf5'; $secretKey = 'H91chSYT4fIBMgNvfV_oVRhWFzNHIvHPGeSh0FNs'; Qiniu_SetKeys($accessKey, $secretKey); $bucket = 'legend-image'; $putPolicy = new Qiniu_RS_PutPolicy($bucket); $upToken = $putPolicy->Token(null); ?>
 	<form id="fom" method="post" action="http://up.qiniu.com" name="form" enctype="multipart/form-data">
	    <ul>
	    		<input type="hidden" id="token" name="token" value="<?php echo $upToken ?>" >
	        	<input name="key" value="<?php echo ($time); ?>" type="hidden">
	    	<li>
	    		<label for="bucket">图片:</label>			
	    		<input name="file"type="file" />	
	    	</li>
	    	<li>			
	    		<input type="submit" value="上传图片" >		
	    	</li>
	    </ul>
	</form>
	<br>
	上传完成后请等待1-2秒后再识别，否则可能识别失败
	<a href="<?php echo U(identify_handle,array('time'=>$time));?>">识别图片</a>
	<br>
 </body>
 </html>
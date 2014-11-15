<?php if (!defined('THINK_PATH')) exit();?> <html>
 <head>
 	<meta charset="utf-8">
 	<title>上传图片</title>
 </head>
 <body>
 	注意:必须上传完图片后才可添加到person<br>
 	<?php  require_once("Public/php/qiniu/rs.php"); $accessKey = 'O382ET2CmCVfdylV3kK31uQQacE595YNm8hOrBf5'; $secretKey = 'H91chSYT4fIBMgNvfV_oVRhWFzNHIvHPGeSh0FNs'; Qiniu_SetKeys($accessKey, $secretKey); $bucket = 'legend-face'; $putPolicy = new Qiniu_RS_PutPolicy($bucket); $upToken = $putPolicy->Token(null); ?>
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
	上传完成后请等待2-3秒后再添加，否则可能添加失败
	<a href="<?php echo U(add_image_handle,array('time'=>$time,'name'=>$name));?>">添加图片到<?php echo ($name); ?></a>
 </body>
 </html>
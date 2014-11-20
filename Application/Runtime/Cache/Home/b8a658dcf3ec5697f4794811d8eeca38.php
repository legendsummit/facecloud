<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>识别</title>
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/base.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/base.js"></script>
   
	<link rel="stylesheet" type="text/css" href="/facecloud/Public/css/edit.css">

   
 </head>
 <body>
 	<div id="header">
 		<div class="logo"><h3>logo</h3></div>
 		<ul>
 			<li><a href="<?php echo U('Index/index');?>">首页</a></li>
 			<li><a href="<?php echo U('Face/identify');?>">图像识别</a></li>
 			<li><a href="<?php echo U('Person/index');?>">我的词条</a></li>
 			<li><a href="<?php echo U('User/show');?>">个人信息</a></li>
 		</ul>
 	</div>
 	<div id="content">
 		
	注意:必须上传完图片后才可以识别明星<br>
 	<?php  require_once("Public/php/qiniu/rs.php"); $accessKey = 'O382ET2CmCVfdylV3kK31uQQacE595YNm8hOrBf5'; $secretKey = 'H91chSYT4fIBMgNvfV_oVRhWFzNHIvHPGeSh0FNs'; Qiniu_SetKeys($accessKey, $secretKey); $bucket = 'legend-image'; $putPolicy = new Qiniu_RS_PutPolicy($bucket); $upToken = $putPolicy->Token(null); ?>
 	<form id="fom" method="post" action="http://up.qiniu.com" name="form" enctype="multipart/form-data">
	    <ul>
	    		<input type="hidden" id="token" name="token" value="<?php echo $upToken ?>" >
	        	<input name="key" value="<?php echo ($time); ?>" type="hidden">
	    	<li>
	    		<label for="bucket">图片:</label>			
	    		<input name="file"type="file" /><br>
	    	</li>
	    	<li>			
	    		<input type="submit" value="上传图片" >	<br>	
	    	</li>
	    </ul>
	</form>
	<br>
	<a href="<?php echo U(identify_handle,array('time'=>$time));?>">识别图片</a><br><br>
	<a href="<?php echo U('Home/Index/index');?>">返回首页</a><br/>
	<br>

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team</div>
 	</div>
 </body>
</html>
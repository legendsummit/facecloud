<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>识别</title>
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/home-base.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/home-base.js"></script>
   
	<link rel="stylesheet" type="text/css" href="/facecloud/Public/css/identify.css">

   
	<script type="text/javascript" src="/facecloud/Public/js/identify.js"></script>

 </head>
 <body>
 	<div id="header">
 		<div class="logo">
 			<img src="/facecloud/Public/picture/logo.jpg" height="75px">
 		</div>
 		<ul id="base-ul">
 			<li id="base-li"><a href="<?php echo U('Index/index');?>">首页</a></li>
 			<li id="base-li"><a href="<?php echo U('Face/identify');?>">图像识别</a></li>
 			<li id="base-li"><a href="<?php echo U('Person/index');?>">我的词条</a></li>
 			<li id="base-li"><a href="<?php echo U('User/show');?>">个人信息</a></li>
 		</ul>
 	</div>
 	<div id="content">
 		
 	
	 <div id="left">
		<?php  require_once("Public/php/qiniu/rs.php"); $accessKey = 'O382ET2CmCVfdylV3kK31uQQacE595YNm8hOrBf5'; $secretKey = 'H91chSYT4fIBMgNvfV_oVRhWFzNHIvHPGeSh0FNs'; Qiniu_SetKeys($accessKey, $secretKey); $bucket = 'legend-image'; $putPolicy = new Qiniu_RS_PutPolicy($bucket); $upToken = $putPolicy->Token(null); ?>
	 	<form id="fom" method="post" target="ifm" action="http://up.qiniu.com" name="form" enctype="multipart/form-data">
	 		<div id="left-header">图片识别</div>
			<input type="hidden" id="token" name="token" value="<?php echo $upToken ?>" >
	    	<input name="key" value="<?php echo ($time); ?>" type="hidden">		
			<input class="select_image" name="file"type="file" />
			<input class="submit_image" type="submit" value="上传图片" >
		</form>
		<div class="link_submit">
			<a class="identify_link_submit">选择图片</a>
		</div>
		<div class="identify">
			<a class="identify_image" href="<?php echo U(identify_handle,array('time'=>$time));?>">识别图片</a>
		</div>
	</div>
	<div id="right">
		<div id="right-header">
			预览
		</div>
		<div class="image">
			<div class="show_image"></div>
		</div> 
	</div>
	<iframe id='ifm' name='ifm' style="display:none" />
 	

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team</div>
 	</div>
 </body>
</html>
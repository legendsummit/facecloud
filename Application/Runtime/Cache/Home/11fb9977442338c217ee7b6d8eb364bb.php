<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>结果</title>
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/home-base.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/home-base.js"></script>
   
	<link rel="stylesheet" type="text/css" href="/facecloud/Public/css/edit.css">

   
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
 		
	<h3>搜索结果</h3>
		姓名:<?php echo ($result["name"]); ?><br>
		职业:<?php echo ($result["profession"]); ?><br>
		简介:<?php echo ($result["introduce"]); ?><br>
		相似度:<?php echo ($result["confidence"]); ?><br><br>
	<a href="<?php echo U('Home/Index/index');?>">返回首页</a><br/>
	<a href="<?php echo U(identify);?>">再来一次</a>

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team</div>
 	</div>
 </body>
</html>
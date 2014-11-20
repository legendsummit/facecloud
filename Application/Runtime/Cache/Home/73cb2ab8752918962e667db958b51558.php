<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>用户编辑</title>
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
 		
	<form action="<?php echo U('edit_handle');?>" method="post">	
		用户名:<input type="text"  name="user" value="<?php echo ($data['user']); ?>" /><br>
		昵称: <input type="text" name="name" value="<?php echo ($data['name']); ?>"><br>
		密码: <input type="password" name="password"><br>
		手机: <input type="text" name="phone" value="<?php echo ($data['phone']); ?>"><br>
		邮箱：<input type="text" name="email" value="<?php echo ($data['email']); ?>"><br>
		<input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
		<input type="submit" value="编辑" />
	</form>
	<a href="<?php echo U('show');?>">详情</a>

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team</div>
 	</div>
 </body>
</html>
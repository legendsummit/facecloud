<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title>创建</title>
</head>
<body>
	<form action="<?php echo U('create_handle');?>" method="post">	
		名称:<input type="text"  name="name" /><br>
		性别:<input type="radio" name="sex" value="M" checked="checked"/> 男
		<input type="radio" name="sex" value="W" /> 女<br>
		职业:<input type="text"  name="profession" /><br> 
		简介:<textarea name="introduce" ></textarea><br>
		<input type="submit" value="创建" />
	</form>
	<a href="<?php echo U('index');?>">返回首页</a>
</body>
</html>
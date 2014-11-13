<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>创建人物</title>
</head>
<body>
	<form action="<?php echo U('create_handle');?>" method="post">	
		名称:<input type="text"  name="name" /><br>
		性别:<input type="radio" name="sex" value="男" /> 男
		<input type="radio" name="sex" value="女" /> 女<br>
		职业:<input type="text"  name="profession" /><br> 
		简介:<textarea name="introduce" ></textarea><br>
		<!-- 图片 -->
		<input type="submit" value="创建" />
	</form>
</body>
</html>
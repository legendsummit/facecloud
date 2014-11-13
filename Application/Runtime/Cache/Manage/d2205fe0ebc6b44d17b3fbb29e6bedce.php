<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>创建set集合</title>
</head>
<body>
	<form action="<?php echo U('create_handle');?>" method="post">	
		集合名称:<input type="text"  name="name" />
		<input type="submit" value="创建" />
	</form>
</body>
</html>
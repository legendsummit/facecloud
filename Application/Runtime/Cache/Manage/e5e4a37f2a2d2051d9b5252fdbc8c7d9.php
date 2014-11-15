<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title>修改</title>
</head>
<body>
	<form action="<?php echo U('edit_handle');?>" method="post">	
		<input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
		名称:<input type="text"  name="name" value="<?php echo ($data['name']); ?>" /><br>
		性别:<input type="radio" name="sex" value="M" 
			<?php if(($data["sex"]) == "M"): ?>checked="checked"<?php endif; ?> /> 男
		<input type="radio" name="sex" value="W"  
			<?php if(($data["sex"]) == "W"): ?>checked="checked"<?php endif; ?> /> 女<br>
		职业:<input type="text"  name="profession" value="<?php echo ($data['profession']); ?>" /><br> 
		简介:<textarea name="introduce" ><?php echo ($data['introduce']); ?></textarea><br>
		<input type="submit" value="修改" />
	</form>
	<a href="<?php echo U('index');?>">返回首页</a>
</body>
</html>
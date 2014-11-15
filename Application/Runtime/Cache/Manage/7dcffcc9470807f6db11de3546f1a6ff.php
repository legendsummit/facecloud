<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title>修改</title>
</head>
<body>
		名称:<?php echo ($data['name']); ?><br>
		性别:<?php if(($data['sex']) == "M"): ?>男<?php else: ?>女<?php endif; ?><br>
		职业:<?php echo ($data['profession']); ?><br>
		简介:<br><?php echo ($data['introduce']); ?><br>
		<br>______接下来显示图片_________<br>
	<a href="<?php echo U(edit,array('id'=>$data['id']));?>">修改</a>
	<a href="<?php echo U('index');?>">返回首页</a>
</body>
</html>
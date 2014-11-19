<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>搜索结果</title>
</head>
<body>
	<h3>搜索结果</h3>
		姓名:<?php echo ($result["name"]); ?><br>
		职业:<?php echo ($result["profession"]); ?><br>
		简介:<?php echo ($result["introduce"]); ?><br>
		相似度:<?php echo ($result["confidence"]); ?><br><br>
	<a href="<?php echo U('Home/Index/index');?>">返回首页</a><br/>
	<a href="<?php echo U(identify);?>">再来一次</a>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>搜索结果</title>
</head>
<body>
	<h3>搜索结果</h3>
	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>姓名:<?php echo ($vo["name"]); ?><br>
		职业:<?php echo ($vo["profession"]); ?><br>
		简介:<?php echo ($vo["introduce"]); ?><br>
		相似度:<?php echo ($vo["confidence"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if(is_array($urls)): $i = 0; $__LIST__ = $urls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$url): $mod = ($i % 2 );++$i;?><img src="<?php echo ($url); ?>" >
	  <a href="<?php echo U('del_image',array('img_key'=>substr($url,31),'id'=>$pid));?>">删除</a><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>
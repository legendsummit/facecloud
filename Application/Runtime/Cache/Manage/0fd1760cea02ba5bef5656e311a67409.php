<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>明星列表</title>
 </head>
 <body>
 	
 	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($name=$vo["name"]); ?>
    <a href="<?php echo U('add_image',array('name'=>$name));?>">增加图片</a><br>
    <?php
 $urls=getPersonImageUrl($name); var_dump($urls); endforeach; endif; else: echo "" ;endif; ?>
 </body>
</html>
<?php if (!defined('THINK_PATH')) exit();?>
<html>
 <head>
   <title>首页</title>
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/index.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/index.js"></script>
 </head>
 <body>
 	<div id="header">
 		<div class="logo"><h3>logo</h3></div>
 	</div>
 	<div id="content">
 		<div id="left">
 			<div id="left-header"></div>
			<table border="0" cellspacing="1">
				<tr id="th">
					<th width="60%">姓名</th>
					<th width="40%">操作</th>
				</tr>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td>&nbsp;&nbsp;<i class="fa fa-square-o"></i>
							&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($name=$vo["name"]); ?>
						</td>
						<?php
 $urls=getPersonImageUrl($name); $images[$name]=$urls[0]; ?>
						<td align="center">
							<a href="<?php echo U('add_image',array('name'=>$name));?>">增加图片</a><br>
							<a class="view" name="<?php echo $name ?>">删除</a>&nbsp;&nbsp;
							<a class="view" name="<?php echo $name ?>" 
							href="<?php echo U(edit,array('id'=>$vo['id']));?>">修改</a>&nbsp;&nbsp;
							<a class="view" name="<?php echo $name ?>">预览</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>		    				
 		</div>
 		<div id="right">
 			<div id="right-header"></div>
 			<div>
 				
 				<?php foreach ($images as $name): ?>
 					<?php echo ($name); ?>
 					<img src="<?php echo $name ?>">
 				<?php endforeach ?>
 			</div>
 			<script type="text/javascript">
 				
 			</script>
 		</div>
 	</div>
 </body>
</html>
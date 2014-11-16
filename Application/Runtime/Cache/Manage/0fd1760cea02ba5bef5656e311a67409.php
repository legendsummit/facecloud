<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
   <title>Select Data</title>
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
 			<div id="left-header">
 				<form action="<?php echo U(search);?>" method="post">
	 				<div class="input">
	 					<input type="text" name="name" placeholder="请输入搜索姓名">
	 				</div>
	 				<div class="search">
	 					<a class="search-icon"><i class="fa fa-search"></i></a>
	 				</div>
 				</form>
 			</div>
			<table border="0" cellspacing="1">
				<tr id="th">
					<th width="50%">姓名</th>
					<th width="50%">操作</th>
				</tr>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td>&nbsp;&nbsp;<i class="fa fa-user"></i></i>
							&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["name"]); ?>
						</td>
						<?php
 $urls=getPersonImageUrl($vo['name']); $images[$vo['name']]=$urls[0]; ?>
						<td align="center">
							<a href="<?php echo U('add_image',array('name'=>$vo['name']));?>">上传</a>&nbsp;&nbsp;
							<a class="view" name="<?php echo $vo['name'] ?>
							" href="<?php echo U('delete',array('name'=>$vo['name']));?>">删除</a>&nbsp;&nbsp;
							<a class="view" name="<?php echo $vo['name'] ?>" 
							href="<?php echo U('edit',array('id'=>$vo['id']));?>"
							>修改</a>&nbsp;&nbsp;
							<a class="view" url="<?php echo $urls[0] ?>" name="<?php echo $vo['name'] ?>">预览</a>
						</td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<div class="result page"><?php echo ($page); ?></div>		    				
 		</div>
 		<div id="right">
 			<div id="right-header">
 				未选择人物
 			</div>
 			<div class="image">				
 				<?php foreach ($images as $val): ?>
 					<img class="img" src="<?php echo $val ?>" width="180">
 				<?php endforeach ?>
 			</div>
 			<div class="introduce">
 				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $url=getPersonImageUrl($vo['name']); $image[$vo['name']]=$url[0]; ?>
 					<div class="p" name="<?php echo $image[$vo['name']] ?>">
 						<p class="name"><?php echo ($vo["name"]); ?></p>
	 					<p>性别：<?php if(($vo['sex']) == "M"): ?>男<?php else: ?>女<?php endif; ?></p>
	 					<p>职业：<?php echo ($vo["profession"]); ?></p>
	 					<p>简介：<?php echo ($vo["introduce"]); ?></p>
 					</div><?php endforeach; endif; else: echo "" ;endif; ?>
 			</div>
 		</div>
 	</div>
 	
 </body>
</html>
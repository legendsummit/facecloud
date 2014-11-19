<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta charset="utf-8">
   
	<title>修改</title>

   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/base.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/base.js"></script>
   
	<link rel="stylesheet" type="text/css" href="/facecloud/Public/css/show.css">

   
	<script type="text/javascript" src="/facecloud/Public/js/show.js"></script>

 </head>
 <body>
 	<div id="header">
 		<div class="logo"><h3>logo</h3></div>
 		<ul>
 			<li><a href="<?php echo U('Index/index');?>">首页</a></li>
 			<li><a href="<?php echo U('Person/index');?>">人物</a></li>
 			<li><a href="<?php echo U('Group/index');?>">群组</a></li>
 			<li><a>个人信息</a></li>
 		</ul>
 	</div>
 	<div id="content">
 		
	<div class="introduce">
		<?php $urls=getPersonImageUrl($data['name']);?>
		<div class="img">
			<img src="<?php echo ($urls[0]); ?>" width="170">
			<div class="edit"><a class="edit" href="<?php echo U('showimages',array('pid'=>$data['id']));?>"><i class="fa fa-picture-o"></i>图集</a></div>
		</div>
		<?php echo ($data['name']); ?>&nbsp;
		性别:<?php if(($data['sex']) == "M"): ?>男<?php else: ?>女<?php endif; ?>&nbsp;
		职业:<?php echo ($data['profession']); ?>&nbsp;
		<a id="index" href="<?php echo U('edit',array('id'=>$data['id']));?>">编辑</a><br>
		简介:<div><?php echo ($data['introduce']); ?></div>
	</div>

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team</div>
 	</div>
 </body>
</html>
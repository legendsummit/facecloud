<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
	<title>修改</title>

   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/base.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/base.js"></script>
   
	<link rel="stylesheet" type="text/css" href="/facecloud/Public/css/show.css">

   
	<script type="text/javascript" src="/facecloud/Public/js/show.js"></script>
	<script type="text/javascript" src="/facecloud/Public/js/jquery.scrollTo.js"></script>

 </head>
 <body>
 	<div id="header">
 		<div class="logo">
 			<img src="/facecloud/Public/picture/logo.jpg" height="75px">
 		</div>
 		<ul class="base-ul">
 			<li class="base-li"><a href="<?php echo U('Index/index');?>">首页</a></li>
 			<li class="base-li"><a href="<?php echo U('Person/index');?>">人物</a></li>
 			<li class="base-li"><a href="<?php echo U('Group/index');?>">群组</a></li>
 			<li class="base-li"><a>个人信息</a></li>
 		</ul>
 	</div>
 	
	<div class="underline"></div>
	<div id="first-left">
 		<ul class="show-ul">
 			<li class="show-li">
 				<a href="#" class="one" title="简介"><i class='fa fa-dot-circle-o'></i></a>
 			</li>
 			<li class="show-li">
 				<a href="#" class="two" title="早年经历"><i class="fa fa-circle-thin"></i></a>
 			</li>
 			<li class="show-li">
 				<a href="#" class="three" title="演绎经历"><i class="fa fa-circle-thin"></i></a>
 			</li>
 			<li class="show-li">
 				<a href="#" class="four" title="个人生活"><i class="fa fa-circle-thin"></i></a>
 			</li>
 		</ul>	
 	</div>

 	<div id="content">
 		
	<div class="introduce">
		<?php $urls=getPersonImageUrl($data['name']);?>
		<div class="img">
			<img class="show" src="<?php echo ($urls[0]); ?>" width="170">
			<div class="edit"><a class="edit" href="<?php echo U('showimages',array('pid'=>$data['id']));?>"><i class="fa fa-picture-o"></i>图集</a></div>
		</div>		
		<a id="show" href="<?php echo U('edit',array('id'=>$data['id']));?>">
			<i class="fa fa-pencil"></i>编辑
		</a>
		<div><?php echo ($data['introduce']); ?></div>
	</div>

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team</div>
 	</div>
 </body>
</html>
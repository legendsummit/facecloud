<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
	<title>images</title>

   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/base.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/base.js"></script>
   
	<link rel="stylesheet" type="text/css" href="/facecloud/Public/css/images.css">

   
	<script type="text/javascript" src="/facecloud/Public/js/images.js"></script>
	<script src="/facecloud/Public/js/jquery.lazyload.js?v=1.9.1"></script>

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
 	
 	<div id="content">
 		
	<a id="imagesToShow" href="<?php echo U('show',array('id'=>$pid));?>">
		<p>详细<br>信息</p>
	</a>
	<?php if(is_array($urls)): $i = 0; $__LIST__ = $urls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$url): $mod = ($i % 2 );++$i;?><div class="area">
			<a href="<?php echo U('images-Allshow',array('pid'=>$pid));?>">
				<div class='img' data-pid=<?php echo ($pid); ?>>
					<img class="lazy" src="<?php echo ($url); ?>">	
					<a id="images" href="<?php echo U('del_image',array('img_key'=>substr($url,31),'id'=>$pid));?>">
						<i class="fa fa-times"></i>
					</a>
				</div>	
			</a>  
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="clear"></div>

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team</div>
 	</div>
 </body>
</html>
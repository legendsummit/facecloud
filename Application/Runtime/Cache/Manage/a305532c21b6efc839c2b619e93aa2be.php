<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>管理员列表</title>
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/base.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/base.js"></script>
   
	<link rel="stylesheet" type="text/css" href="/facecloud/Public/css/edit.css">

   
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
 		
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["user"]); ?>-<?php echo ($vo["name"]); ?><br><?php endforeach; endif; else: echo "" ;endif; ?>

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team</div>
 	</div>
 </body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>标题</title>
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/base.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/base.js"></script>
   
	<link rel="stylesheet" type="text/css" href="/facecloud/Public/css/index.css">

   
	<script type="text/javascript" src="/facecloud/Public/js/index.js"></script>

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
 		
	<div id="left">
		<div id="left-header">
			<form action="<?php echo U(search);?>" method="post">
				<div class="input">
					<input type="text" name="name" placeholder="请输入搜索姓名">
				</div>
				<div class="search">
					<a id="index" class="search-icon"><i class="fa fa-search"></i></a>
				</div>
			</form>
		</div>
		<table border="0" cellspacing="1">
			<tr id="th">
				<th width="50%">姓名</th>
				<th width="50%">操作</th>
			</tr>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="td" height="22px">
					<td>&nbsp;&nbsp;<i class="fa fa-user"></i></i>
						&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["name"]); ?>
					</td>
					<td align="center">
						<a class="delete" id="index" href="<?php echo U('delete',array('id'=>$vo['id']));?>">删除</a>
						&nbsp;&nbsp;
						<a id="index" href="<?php echo U('edit',array('id'=>$vo['id']));?>">编辑</a>&nbsp;&nbsp;
						<a class="view" id="index" data-id="<?php echo $vo['id'] ?>" >预览</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>		
		</table>
		<div class="result page"><?php echo ($page); ?></div>		    				
	</div>
	<div id="right">
		<div id="right-header">
			未选择人物
		</div>
		<div class="image"></div>
		<div class="message">
			<div class="sex one"></div>
			<div class="profession one"></div>
			<div class="introduce one"></div>
			<div class="detail one">
				<a class="detail">详情<i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
	</div>

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team</div>
 	</div>
 </body>
</html>
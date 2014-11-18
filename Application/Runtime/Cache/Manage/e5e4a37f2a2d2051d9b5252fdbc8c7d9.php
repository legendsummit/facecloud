<?php if (!defined('THINK_PATH')) exit();?><html>
 <head>
 	<meta charset="utf-8">
   <title>add image</title>
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/font-awesome-4.2.0/css/font-awesome.css">
   <link rel="stylesheet" type="text/css" href="/facecloud/Public/css/base.css">
   <script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script>
   <script type="text/javascript" src="/facecloud/Public/js/base.js"></script>
   
	<link rel="stylesheet" type="text/css" href="/facecloud/Public/css/edit.css">

   
	<script type="text/javascript" src="/facecloud/Public/js/edit.js"></script>

 </head>
 <body>
 	<div id="header">
 		<div class="logo"><h3>logo</h3></div>
 		<ul>
 			<li><a>首页</a></li>
 			<li><a>人物</a></li>
 			<li><a>群组</a></li>
 			<li><a>个人信息</a></li>
 		</ul>
 	</div>
 	<div id="content">
 		
	<div id="left">
		<?php  require_once("Public/php/qiniu/rs.php"); $accessKey = 'O382ET2CmCVfdylV3kK31uQQacE595YNm8hOrBf5'; $secretKey = 'H91chSYT4fIBMgNvfV_oVRhWFzNHIvHPGeSh0FNs'; Qiniu_SetKeys($accessKey, $secretKey); $bucket = 'legend-face'; $putPolicy = new Qiniu_RS_PutPolicy($bucket); $upToken = $putPolicy->Token(null); ?>
	 	<form id="form" method="post" action="http://up.qiniu.com" name="form" enctype="multipart/form-data">
			<div id="left-header">
				<div class="button1"><a  id="edit" class="select"><i class="fa fa-arrow-up"></i>上传图片</a>
				</div>
				<div class="name-header"><?php echo ($data['name']); ?></div>
			</div>
			<div id="left-bottom">
		    	<input type="hidden" id="token" name="token" value="<?php echo $upToken ?>" >
		        <input name="key" value="<?php echo ($time); ?>" type="hidden">			
	    		<input id="one" class="file" name="file" type="file">			
	    		<input class="submit" type="submit" value="上传图片">
			</div>
		</form>
		<a class="select" href="<?php echo U(add_image_handle,array('time'=>$time,'id'=>$data['id']));?>">添加图片到<?php echo ($data['name']); ?></a>
		<form class="edit" action="<?php echo U('edit_handle');?>" method="post">	
			<div>
				<input type="hidden" name="id" value="<?php echo ($data['id']); ?>">
			</div>
			<div class="edit">
				姓名：<input class=name type="text" readonly="readonly"  name="name" value="<?php echo ($data['name']); ?>" />
			</div>
			<div class="edit">
				<label>性别：</label>
				<input class="sex" type="radio" readonly="readonly"  name="sex" value="M" 
					<?php if(($data["sex"]) == "M"): ?>checked="checked"<?php endif; ?> /> 男
				<input class="sex" type="radio" readonly="readonly"  name="sex" value="W"  
					<?php if(($data["sex"]) == "W"): ?>checked="checked"<?php endif; ?> /> 女<br>
			</div>
			<div class="edit">
				职业：<input class="profession" type="text" readonly="readonly"   name="profession" value="<?php echo ($data['profession']); ?>" />
			</div>
			<div class="introduce">
				<div class="label">简介：</div>
				<textarea class="introduce" readonly="readonly"  name="introduce" ><?php echo ($data['introduce']); ?></textarea>
			</div>
			<input class="edit-submit" type="submit" value="修改" />
		</form>
	</div>		    				
	<div id="right">
		<div id="right-header">
			预览
		</div>
		<div class="image">
			<div id="two"></div>
			<div class="button2"><a  id="edit" id="edit" class="submit">确认上传</a></div>	
		</div> 
	</div>
	<script type="text/javascript">
    	var result = document.getElementById("two"); 
    	var input = document.getElementById("one");
        input.addEventListener('change',readFile,false); 
        function readFile(){ 
            var file = this.files[0]; 
            if(!/image\/\w+/.test(file.type)){ 
                alert("文件必须为图片！"); 
                return false; 
            } 
            var reader = new FileReader(); 
            reader.readAsDataURL(file); 
            reader.onload = function(e){ 
                result.innerHTML = '<img src="'+this.result+'" alt="" width="200"/>';
            }
        }
    </script>

 	</div>
 	<div id="footer">
 		<div id="footer-left">Email：1420646999@qq.com</div>   
 		<div id="footer-right">designed by  legend team<div>
 	</div>
 </body>
</html>
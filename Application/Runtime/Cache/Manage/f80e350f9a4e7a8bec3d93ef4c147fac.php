<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>JQUERY动态加载图片</title>  
<script type="text/javascript" src="/facecloud/Public/jquery-2.1.1.js"></script> 
<script type="text/javascript">  
	(function($){  
		$.NextPic=function(){  
			$(".tip").slideDown(200);  
			$("img").attr("src",PicArr[CurrPic]).one('load',function(){$(".tip").slideUp(200);CurrPic++;if(CurrPic>4)CurrPic=0;});  
			//$("img").load(PicArr[CurrPic],function(){$(this).attr("src",PicArr[CurrPic]);$(".tip").slideUp(200);alert(CurrPic);CurrPic++;if(CurrPic>4)CurrPic=0;});  
		}  
	})(jQuery);  
	$(function(){
		$(document).ready(function(){  
			PicArr = new Array("http://legend-face.qiniudn.com/1416040136","http://legend-face.qiniudn.com/1416041223","http://legend-face.qiniudn.com/1416041297","http://legend-face.qiniudn.com/1416041245","http://legend-face.qiniudn.com/1416041331");  
			CurrPic=0;  
			$(".tip").css({"position":"absolute","top":"100px","left":"50px"});  
			$(".tip").hide();  
			$(".picbtn").click(function(){
				$.NextPic();
			})
		})  
	})
	
</script>  
</head>  
<body>  
	<input class="picbtn" type="button" value="Next" />  
	<div class="tip">正在加载……</div>  
	<div class="notice">  
		<img id="img" />  
	</div>  
</body>  
</html>
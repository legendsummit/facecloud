$(function(){
	$('a.select').click(function(){
		$('input.file').click();
	})
	$('a.submit').click(function(){
		$('input.submit').click();
		//$('#form').submit();
	})
	$('input.file').bind('change',function(event){
		$('div.button2').css({'display':'block'});
	})
	$('div.edit input,textarea').dblclick(function(){
		$(this).removeAttr('readonly').css({'background-color':'white'});
	})
	$('div.edit input,textarea').blur(function(){
		$(this).attr({readonly:'readonly'}).css({'background-color':'rgb(243,244,246)'});
	})
})
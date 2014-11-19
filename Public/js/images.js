$(function(){
	$(window).bind("load",function(){
		var height,width,div;
		$('img').each(function(){
			height = $(this).height();
			width = $(this).width();
			div = height/width;
			if(div >= 0.75) {
				$(this).css({'width':'200px'});
			} else {
				$(this).css({'height':'150px'});
			}
			$('div.img').hover(function(){
				$(this).find('a').css({'display':'block'});
			},function(){
				$(this).find('a').css({'display':'none'});
			})
		})		
	})
	$("img.lazy").lazyload({effect: "fadeIn"});
})
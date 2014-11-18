$(function(){
	$('a.view').click(function(){
		var url=$(this).attr('url');
		var imageheight;
		$('div.image img').each(function(){
			if($(this).attr('src') == url){
				$(this).css({'display':'block'});
				imageheight = $(this).height() + 10;
			} else {
				$(this).css({'display':'none'});
			}
		})
		$('div.p').each(function(){
			if($(this).attr('name') == url){
				$(this).css({'display':'block','top':imageheight});
				var name = $(this).find("p:first-child").html();
				$('div#right-header').html(name);
				var leng = 360 - imageheight;
				console.log(leng);
				$('.intro_wrapper').height(leng);
				$(".intro_wrapper").each(function(i){
				    var divH = $(this).height();
				    var $p = $("p", $(this)).eq(0);
				    while ($p.outerHeight() > divH) {
				        $p.text($p.text().replace(/(\s)*([a-zA-Z0-9]+|\W)(\.\.\.)?$/, "..."));
				    }
				});
			} else {
				$(this).css({'display':'none'});
			}
		})
	})
})
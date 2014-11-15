$(function(){
	$('a.view').click(function(){
		var url=$(this).attr('url');
		var imageheight;
		$('div.image img').each(function(){
			if($(this).attr('src') == url){
				$(this).css({'display':'block'});
				imageheight = $(this).height() + 10;
				console.log(imageheight);
			} else {
				$(this).css({'display':'none'});
			}
		})
		$('div.introduce div').each(function(){
			if($(this).attr('name') == url){
				$(this).css({'display':'block','top':imageheight});
				var name = $(this).find("p:first-child").html();
				$('div#right-header').html(name);
			} else {
				$(this).css({'display':'none'});
			}
		})
	})
})
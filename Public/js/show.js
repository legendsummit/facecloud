$(function(){
	$(window).bind('load',function(){
		var i=1;
		$('h1').addClass('h1');
		$('h2').each(function(){
			var IdName = "name"+i;
			$(this).attr({'id':IdName}).addClass('h2');

			i++;
			
		});
		$('.one').click(function(){
			$(this).html("<i class='fa fa-dot-circle-o'></i>");
			$('li.show-li a[class!=one]').html('<i class="fa fa-circle-thin"></i>');
			moveTo('h1');
		})
		$('.two').click(function(){
			$(this).html("<i class='fa fa-dot-circle-o'></i>");
			$('li.show-li a[class!=two]').html('<i class="fa fa-circle-thin"></i>');
			moveTo('#name1');
		});
		$('.three').click(function(){
			$(this).html("<i class='fa fa-dot-circle-o'></i>");
			$('li.show-li a[class!=three]').html('<i class="fa fa-circle-thin"></i>');
			moveTo('#name2');
		});
		$('.four').click(function(){
			$(this).html("<i class='fa fa-dot-circle-o'></i>");
			$('li.show-li a[class!=four]').html('<i class="fa fa-circle-thin"></i>');
			moveTo('#name3');
		});
		// $('.four').click(function(){
		// 	$.scrollTo('.name4',800);
		// })

		function moveTo(select) {
			var scroll_offset = $(select).offset().top-120;
			$("body,html").animate({
				scrollTop:scroll_offset //让body的scrollTop等于pos的top，就实现了滚动
			},1000);
		}
	})
})
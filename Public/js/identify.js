$(function(){
	$(window).bind('load',function(){
		$('.identify_link_submit').click(function(){
			$('.select_image').click();
		})
		var result = $(".show_image"); 
    	var input = $(".select_image");
        input.change(function(){ 
            var file = this.files[0]; 
            if(!/image\/\w+/.test(file.type)){ 
                alert("文件必须为图片！"); 
                return false; 
            } 
            var reader = new FileReader(); 
            reader.readAsDataURL(file); 
            reader.onload = function(e){ 
            	$(".show_image").html("<img src='"+this.result+"' alt='' width='200'/>");
            	setTimeout(function(){
	        		$('form#fom').submit();
	        	},500)
            }
        });
        $('.identify_image').click(function(){

        })
	})
})
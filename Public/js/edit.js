$(function(){
	$(window).bind('load',function(){
		$('a.select').click(function(){
			$('div.button1').css({'box-shadow':''})
			$('input.file').click();
		})
		$('a.submit').click(function(){
			$('#form').submit();
			/*function clickFunction(){
				$('.add').click();
			}
			setInterval('clickFunction()',1500);*/
			setTimeout(function(){
				//var submit_msg = $('iframe#ifm');
				//console.log(submit_msg.contents());
				// var submit_result = submit_msg.indexOf('hash');
				// console.log(submit_result);
				// if(submit_result==-1){
				// 	alert("上传失败！");
				// }else{
				 //alert("上传成功！");
				 $('.add').click(function(){
				 	console.log('click');
				 });
				 var add_url = $('.add').attr('data-url');
				 $.ajax({
				    type: "GET",
				    url: 'http://localhost/'+add_url,
				    success: function(msg){
				    	console.log('success');
				    },
				    error: function(msg){
				    	console.log('error');
				    }
				});
				// }
			},1500);
		})
		$('input.file').bind('change',function(event){
			$('div.button2').css({'display':'block'});
		})
		$('div.edit input').dblclick(function(){
			$(this).removeAttr('readonly').css({'background-color':'white'});
		})
		$('div.edit input').blur(function(){
			$(this).attr({readonly:'readonly'}).css({'background-color':'rgb(243,244,246)'});
		})


		var result = $("#two"); 
    	var input = $("#one");
        input.change(function(){ 
            var file = this.files[0]; 
            if(!/image\/\w+/.test(file.type)){ 
                alert("文件必须为图片！"); 
                return false; 
            } 
            var reader = new FileReader(); 
            reader.readAsDataURL(file); 
            reader.onload = function(e){ 
            	$("#two").html("<img src='"+this.result+"' alt='' width='200'/>");
            }
        });

        $('textarea').dblclick(function(){
        	$('div.label').remove();
        	$('#ckeditor').html("CKEDITOR.replace('introduce');")
        })
	})
})
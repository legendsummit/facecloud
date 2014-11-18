$(function(){
	$('a.view').click(function(){
		var id = $(this).attr("data-id");
		$.ajax({
		    type: "GET",
		    dataType: "json", 
		    url: "http://localhost/facecloud/index.php/Manage/Person/json?id="+id,
		    success: function(msg){
		    	var sex1 = "女";
		    	if(msg.sex == "M")
		    		sex1 = "男";
		    	$('div#right-header').html(msg.name);
		    	$('div.sex').html(sex1);
		    	$('div.profession').html(msg.profession);

		    }
		});
		var url=$(this).attr('url');
		var imageheight;
		
		
	})
});
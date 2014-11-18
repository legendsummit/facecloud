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

		    	$('div.image').html('<img src='+msg.url+' height="190px" />');
		    	$('div#right-header').html(msg.name);
		    	$('div.sex').html("性别：").append(sex1);
		    	$('div.profession').html("职业：").append(msg.profession);
		    	$('div.introduce').html("简介：").append((msg.introduce).substring(0,119));
		    	$('div.introduce').append("...");
		    	$("div.detail").css({'display':'block'});
		    	$('a.detail').attr({"href":"/facecloud/index.php/Manage/Person/show/id/"+id+".html"});
		    	console.log(id);
		    }
		});

	})
});
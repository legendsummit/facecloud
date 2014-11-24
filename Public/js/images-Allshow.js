$(function(){
	$('button').click(function(){
		console.log('kkk');
		$.ajax({
	    type: "GET",
	    dataType: "json", 
	    url: "http://localhost/facecloud/index.php/Manage/Person/showimages?pid=1"
	    success: function(msg){
	    	console.log('zzz');
	    	// var sex1 = "女";
	    	// if(msg.sex == "M")
	    	// 	sex1 = "男";
	    	// str = (msg.introduce).substring(0,500).replace(/<\/?[^>]*>/g,''); //去除HTML tag
	    	// $('img.index').remove()
	    	// $('div.image').append('<img class="index" src='+msg.url+' height="190px" />');
	    	// $('div#right-header').html(msg.name);
	    	// $('div.sex').html("性别：").append(sex1);
	    	// $('div.profession').html("职业：").append(msg.profession);
	    	// $('div.introduce').html("简介：").append(str.substring(0,119));
	    	// $('div.introduce').append("...");
	    	// $("div.detail").css({'display':'block'});
	    	// $('a.detail').attr({"href":"/facecloud/index.php/Manage/Person/show/id/"+id+".html"});
	    	// $('a.edit').attr({"href":"/facecloud/index.php/Manage/Person/showimages/pid/"+id+".html"});
	    	// $('div.edit').css({'display':'block'});
	    }
	    
	})	
})
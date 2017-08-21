function attention(){
	img=document.getElementById("attention_img");
	span=document.getElementById("attention_span");
	if(img.src.indexOf('attened')>=0){
		img.src="./img/images/atten.png";
		span.innerHTML="关注";
	}

	else{
		img.src="./img/images/attened.png";
		span.innerHTML="取消关注";
	}	
	
}

$(function(){
	//ajax
	$("#concern").click(function(){
		// alert("ajax started");
		var sno = "3";//以后动态获取 这里要改
		var jsn = {'username':$("input[name='username']").val(),'sNO':sno};
		$.ajax({ 
			    type: "POST", 	
				url: "main.php?controller=userInfo&method=concern",
				data: jsn,
				async:true,
				success: function(data){
					var x=eval("("+data+")");
					if(x.success){
						attention();
					} else {
						attention();
					}  
				},
				error: function(jqXHR){     
				   alert("发生错误：" + jqXHR.status);  
				}

			});
	});

});
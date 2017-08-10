 $(function(){
      $(window).scroll(function () {
      var ref_min = $("#floatdiv")[0]
	  if (!ref_min) return;
      var scroll_top = $(window).scrollTop();
/*    var ref_height_min = ref_min.offsetTop+ref_min.offsetHeight;*/
    if (scroll_top >124) {
           $("#floatdiv").addClass("canfloat");
      } else {
           $("#floatdiv").removeClass("canfloat");
      }
      });
});

 function joinSociety(sNo){
	var j={'sNO':sNo};
	$.ajax({
		type:"POST",
		url:"main.php?controller=joinSociety&method=join",
		data:j,
		async:true,
		success:function(da){
			var x=eval("("+da+")");
			if(x.success){
				alert("申请成功");
				document.location="main.php?controller=index&method=show2";
			}else if(x.success==2){
				
			}else{
				alert("申请失败");
			}
		},
		error:function(){alert("登录表单提交请求失败");}
	});
}
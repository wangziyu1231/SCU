$(function(){
	//切换
	$("#perInfor").click(function(){
		$("#rightMid,#information").css("display","block");
		$("#intention,#attend").css("display","none");
		$(this).css("backgroundColor","#fff");
		$("#perOrg").css("backgroundColor","lightgrey");
	});	
	$("#perOrg").click(function(){
		$("#intention,#attend").css("display","block");
		$("#rightMid,#information").css("display","none");
		$(this).css("backgroundColor","#fff");
		$("#perInfor").css("backgroundColor","lightgrey");
	});
	$("#perInfor").click();

	// 编辑信息
	$("#edit").click(function(){
		if($(this).hasClass('finish')){
			if(!(telFlag&&wechatFlag&&emailFlag)) return false;
			// 信息无误,获取并上传信息
			var jsn = {'username':$("input[name='username']").val(),'tel':newTel,'email':newEmail,'wechat':newWechat};
			// var t = {
			// 		username:$("input[name='username']").val(),
			// 		tel: newTel,
			// 		email:newEmail,
			// 		wechat:newWechat
			// 	};

			$.ajax({ 
			    type: "POST", 	
				url: "main.php?controller=userInfo&method=setInfo",
				data: jsn,
				async:true,
				success: function(data){
					var data=eval("("+data+")");
					alert(data.success);
					if(data.success){
						$(this).text("编辑");
						$(this).removeClass("finish");
						$(".editable").attr("disabled","disabled");	
					} else {
						alert("不符合要求，修改失败");
					}  
				},
				error: function(jqXHR){     
				   alert("发生错误：" + jqXHR.status);  
				}

			});
		}
		else{
			$(this).text("完成");
			$(this).addClass("finish");
			$(".editable").removeAttr('disabled');
			// 验证信息
			telFlag=true;
			emailFlag=true;
			wechatFlag=true;
			$(".editable").change(function(){
				tip=$(this).parent().next().next();
				tip.css("display","block");
				//手机验证
				if($(this).attr("name")=='tel'){
					telFlag=false;
					if($(this).val()==""){	
						tip.text("手机号不能为空");
					}else if($(this).val().search(/^1[345678][0-9]{9}$/)==-1){						
						tip.text("手机填写错误");
					}else{
						tip.text("");
						tip.css("display","none");
						newTel=$(this).val();
						telFlag=true;
					}
				}
				//邮箱验证
				else if($(this).attr("name")=='email'){
					emailFlag=false;
					if($(this).val()==""){
						tip.text('邮箱地址不能为空');
					}else if($(this).val().search(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/)==-1){
						tip.text('邮箱地址填写错误');
					}else{
						tip.text("");					
						tip.css("display","none");
						newEmail=$(this).val();
						emailFlag=true;
					}
				}
				//微信验证
				else{
					wechatFlag=false;
					if($(this).val()==''){
						tip.text('微信号不能为空');
					}else if($(this).val().search(/^[a-zA-Z]{1}[a-zA-Z\d_-]{5,19}$/)==-1){
						tip.text('微信号填写错误');
					}else{
						tip.text("");
						tip.css("display","none");
						newWechat=$(this).val();
						wechatFlag=true;
					}
				}
			})
		}
	});

	//上传图片
	$("input[type=file]").change(function(){
		$(this).parents(".uploader").find(".filename").val($(this).val());
	});
	$("input[type=file]").each(function(){
		if($(this).val()==""){
			$(this).parents(".uploader").find(".filename").val("No file selected...");
		}
	});
	//打开，关闭
	$("#editPhoto").click(function(){
		$('.back_mark').show();
		$('.back_mark').height($(document).height());
		$('.uploadPhoto').slideDown(500);
	});
	$(".close").click(function(){
		$('.back_mark').hide();
		$(".uploadPhoto").slideUp("fast");
	});
});
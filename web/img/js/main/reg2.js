$(function(){
			var ok1 = false;
			var ok2 = false;
			var ok3 = false;
			var ok5 = false;
			var ok6 = false;
			//验证姓名
			$('input[name="realname"]').focus(function(){
				$(this).next().text('真实姓名').css("color","#000");
			})
			.blur(function(){
				if($(this).val()==''){
					$(this).next().text('姓名不能为空').css("color","	#FF0000");
				}else if($(this).val().search(/^[\u4e00-\u9fa5]{2,4}$/)==-1){
					$(this).next().text('姓名格式不正确').css("color","#FF0000");
				}
				else{
					$(this).next().text('OK').css("color","#00FF00");
					ok1=true;
				}

			});
			$('input[name="dept"]').focus(function(){
				$(this).next().text('请填写全称').css("color","#000");
			})
			.blur(function(){
				if($(this).val()==''){
					$(this).next().text('系别不能为空').css("color","	#FF0000");
				}else if($(this).val().search(/^[\u4e00-\u9fa5]{3,11}$/)==-1){
					$(this).next().text('系别格式不正确').css("color","	#FF0000");
				}
				else{
					$(this).next().text('OK').css("color","#00FF00");
					ok2=true;
				}

			});
			$('input[name="major"]').focus(function(){
				$(this).next().text('请填写专业代码').css("color","#000");
			})
			.blur(function(){
				if($(this).val()==''){
					$(this).next().text('专业不能为空').css("color","	#FF0000");
				}else if($(this).val().search(/^[1-9][0-9]{4}$/)==-1){
					$(this).next().text('专业格式不正确').css("color","#FF0000");
				}
				else{
					$(this).next().text('OK').css("color","#00FF00");
					ok3=true;
				}

			});
			
			$('input[name="tel"]').focus(function(){
				$(this).next().text('请输入手机号码').css("color","#000");
			})
			.blur(function(){
				if($(this).val()==''){
					$(this).next().text('手机号不能为空').css("color","#FF0000");
				}else if($(this).val().search(/^1[345678][0-9]{9}$/)==-1){
					$(this).next().text('手机号码格式不正确').css("color","#FF0000");
				}
				else{
					$(this).next().text('OK').css("color","#00FF00");
					ok5=true;
				}

			});
			$('input[name="chat"]').focus(function(){
				$(this).next().text('请输入你的微信号').css("color","#000");
			})
			.blur(function(){
				if($(this).val()==''){
					$(this).next().text('微信不能为空').css("color","	#FF0000");
				}else if($(this).val().search(/^[a-zA-Z\d_]{5,}$/)==-1){
					$(this).next().text('微信格式不正确').css("color","#FF0000");
				}
				else{
					$(this).next().text('Ok').css("color","#00FF00");
					ok6=true;
				}

			});
			$('.submitBtn').click(function(){
				if(ok1 && ok2 && ok3 && ok5 && ok6){
					$('form').submit();
				}
				else{
					return false;
				}
			});

		});
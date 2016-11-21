		ok1 = false;
	    ok2 = false;
	    ok3 = false;
	    ok4 = false;
		$(function(){
			//验证用户名
			$("input[name='username']").focus(function(){
				$(this).next().text('用户名是学号').css("color","#000");
			})
			.blur(function(){
				if($(this).val()==''){
					$(this).next().text('用户名不为空').css("color","#FF0000");
				}else if($(this).val().search(/^\d{9}/)==-1){
					$(this).next().text('用户名格式不正确').css("color","#FF0000");
				}
				else{
					$(this).next().text('Ok').css("color","#00FF00");
					ok1=true;
				}
			});
			//验证密码
			$('input[name="pwd"]').focus(function(){
				$(this).next().text('请输入8-15位的密码').css("color","#000");
			})
			.blur(function() {
				if($(this).val().length < 7 && $(this).val().length > 16){
					$(this).next().text('密码长度不正确').css("color","#FF0000");
				}
				else if($(this).val() == ''){
					$(this).next().text('密码不能为空').css("color","#FF0000");
				}
				else if($(this).val().search(/[0-9a-zA-Z]{8,15}/)==-1){
					$(this).next().text('密码格式不正确').css("color","#FF0000");
				}
				else{
					$(this).next().text('Ok').css("color","#00FF00");
					ok2 = true;
				}
			});
			//验证确认密码
			$('input[name="pwd2"]').focus(function(){
				$(this).next().text('请输入同上规则的密码').css("color","#000");
			})
			.blur(function(){
				if($(this).val().length >= 8 && $(this).val().length <=15 && $(this).val()!='' 
					&& $(this).val() == $('input[name="pwd"]').val()) {
           			 $(this).next().text('Ok').css("color","#00FF00");
            			ok3=true;
            	}
				else if($(this).val() == ''){
					$(this).next().text('密码不能为空').css("color","#FF0000");
				}
				else{
					$(this).next().text('两次密码不一致').css("color","#00FF00");
					ok3 = true;
				}
			});
			//验证邮箱
			$('input[name="email"]').focus(function(){
				$(this).next().text('请输入你常用的邮箱地址').css("color","#000");
			})
			.blur(function(){
				if($(this).val() == ''){
					$(this).next().text('邮箱地址不能为空').css("color","#FF0000");
				}
				else if($(this).val().search(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/)==-1){
					$(this).next().text('邮箱地址格式错误').css("color","#FF0000");
				}
				 
				else{
					$(this).next().text('Ok').css("color","#00FF00");
					ok4 = true;
				}
			});
			/*
			//验证提交
			$('.submitBtn').click(function(){
				if(ok1 && ok2 && ok3 && ok4){
					$('form').submit();
				}
				else{
					return false;
				}
			});*/
		});
			
		//给提交按钮绑定这个函数，当所有情况都满足时，返回true，反之返回false
		function confirm(){
			if(ok1 && ok2 && ok3 && ok4){
				return true;
			}
			else{
				return false;
			}
		}
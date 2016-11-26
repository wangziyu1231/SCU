//判断登录的用户名，密码，验证码是否正确的标识
var flag_usr=false;//用户名
var flag_pwd=false;//密码
var flag_check=false;//验证码
var flag=false;//登录表单提交


//更改验证码调用的函数
function getCheckedImage(){
	document.getElementById('checkedImage').src="./main.php?controller=login&method=getCheckedImage&t="+new Date();
}



//给登录框添加的事件处理
function addClick(){
	//给登录框绑定失去and获取焦点事件
	$('input[name="username"]').focus(function(){if(flag_pwd&&flag_check)$('.tips').text("");}).blur(function(){
				if($(this).val() == ''){
					$('.tips').text('请输入用户名').css("color","#FF0000");
					flag_usr=false;
				}
				else if($(this).val().length!=9){
					$('.tips').text('用户名格式不正确').css("color","#FF0000");
					flag_usr=false;
				}
				else{
					flag_usr=true;
					$('.tips').text("");
				}
	});
	
	//给密码框绑定获取and失去焦点事件
	$('input[name="password"]').focus(function(){if(flag_usr&&flag_check)$('.tips').text("");}).blur(function() {
			if(flag_usr){
				if($(this).val() == ''){
					$('.tips').text('请输入密码').css("color","#FF0000");
					flag_pwd=false;
				}
				else{
					flag_pwd=true;
					$('.tips').text("");
				}
			}
	});
	
	//给验证码绑定失去and获取焦点事件
	$('input[name="check_text"]').focus(function(){if(flag_usr&&flag_pwd)$('.tips').text("");}).blur(function() {
			if($(this).val() == ''){
				$('.tips').text('请输入验证码').css("color","#FF0000");
				flag_check=false;
			}
			else{
				flag_check=true;
				$('.tips').text("");
			}
	});
	
	//给登录的关闭按钮绑定函数
	$('.close').click(function(){
		$('.back_mark').hide();//隐藏空div，
		$('.layout').slideUp(300);//关闭登录框
	});
}



//单击登录绑定的函数
function login(){
	addClick();
	$('.back_mark').show();//显示一个空div，用来设置弹出登录界面后的背景色
	$('.back_mark').height($(document).height());//设置空div的高度为当前页面高度
	$('.layout').slideDown(500);//显示登录框，以200毫秒的速率显示出来
	$.ajax({
		type:"POST",
		url:"./main.php?controller=login&method=auto_login",
		async:true,
		success:function(da){
			var x=eval("("+da+")");
			//如果已经有登录状态，即记住密码
			if(x.success){
				alert("已有登录状态");
				
				//不显示登录框
				$('.back_mark').hide();
				$('.layout').hide();
			}
		},
		error:function(){alert("登录表单提交请求失败");}
	});
}




//登录表单提交前的认证
function check_str(){
	if(flag_usr&&flag_pwd&&flag_check){
		flag=false;
		jsn="data="+document.getElementById("check_text").value;
		$.ajax({
			type:"POST",
			url:"./main.php?controller=login&method=check_text",
			data:jsn,
			async:false,
			success:function(d){
				flag=false;
				var x=eval("("+d+")");
				if(x.success)
					flag=true;
				else{
					$('.tips').text("验证码错误").css("color","#FF0000");
					getCheckedImage()
				}
			},
			error:function(){alert("请求失败");flag=false;}
		});
	}
	return flag;
}

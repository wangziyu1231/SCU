<?php
	header('content-type:text/html;charset=utf-8');
	//登录控制器
	class backstageLoginController{
		function login(){
			$loginModel = M('backstageLogin');
			$loginModel->logincheck();
		}
		
		
		//测试用
		function login_view(){
			
			VIEW::display('admin/backstageLogin.html');
		}
	}
?>
<?php
	header('content-type:text/html;charset=utf-8');
	require_once('./checkedImage.php');
	//登录控制器
	class loginController{
		function login(){
			$loginModel = M('login');
			$loginModel->logincheck();
		}
		
		function getCheckedImage(){
			createCheckedImage(90,30);
		}
		
		function check_text(){
			$loginModel=M('login');
			echo $loginModel->check_text();
		}
		
		function auto_login(){
			$loginModel=M('login');
			echo "".$loginModel->rember_login();
		}
		
		
	}
?>
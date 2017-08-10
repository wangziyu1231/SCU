<?php
	header('content-type:text/html;charset=utf-8');
	require_once('/../ORG/checkedImage.php');
	//登录控制器
	class loginController{
		function login(){
			$loginModel = M('login');
			$a=$loginModel->logincheck();
			echo $a;
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
		
		public function showPI(){
			@session_start();
			VIEW::_assign("usr",$_SESSION['userinfo']['username']);
			VIEW::display('./main/individualInterface.html');
		}
		
		public function showPI2(){
			$userinfo = M('getUserinfo');
			if($arr_info = $userinfo->getInfo()){
				VIEW::_assign("userinfo",$arr_info);
			}
			if($arr_club = $userinfo->getSociety() ){
				VIEW::_assign("society",$arr_club);
			}
			@session_start();
			VIEW::_assign("usr",$_SESSION['userinfo']['username']);
			VIEW::display('./main/individualInterface2.html');
		}
		
		function logout(){
			$logout = M('logout');
			if($logout->logout())
				alertGO("退出成功","main.php");

		}
	}
?>

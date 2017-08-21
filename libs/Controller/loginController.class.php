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
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('./main/individualInterface.html');
		}
		
		public function showPI2(){
			$userinfo = M('getUserinfo');
			if($arr_info = $userinfo->getInfo()){
				VIEW::_assign("userinfo",$arr_info);
			}
			if($arr_club = $userinfo->getSociety() ){
				VIEW::_assign("society",$arr_club);
				//加入一个随机参 让浏览器知道图片已刷新
				VIEW::_assign("rand",rand());
			}
			if($arr_concern = $userinfo->getConcern()){
				VIEW::_assign("concern",$arr_concern);
			}
			@session_start();
			// VIEW::_assign("usr",$_SESSION['userinfo']['username']);
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('./main/individualInterface2.html');
		}
		
		function logout(){
			$logout = M('logout');
			if($logout->logout())
				alertGO("退出成功","main.php");

		}
	}
?>
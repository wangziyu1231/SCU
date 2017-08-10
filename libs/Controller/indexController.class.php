<?php
	header('content-type:text/html;charset=utf-8');
	require_once('/../libs/ORG/checkedImage_contact.php');
	//首页的控制器
	class indexController{
		
		//显示首页，为默认
		public function index(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr hvr' >{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			$temp=$this->getVideo();
			if(!empty($temp))
				VIEW::_assign("video","../db/index/video/".$temp[0]->videoName);
			$arr=$this->getScrollImage();
			if(!empty($arr)){
				VIEW::_assign("arr",$arr);
			}
			VIEW::display('main/index.html');
		}
		
		public function showAboutUs(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('main/aboutUs.html');
		}
		
		public function getCheckedImage_contactUs(){
			createCheckedImage(90,33);
		}
		
		public function contactUs(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('main/contactUs.html');
		}
		
		public function getScrollImage(){
			$indexmodel=M('index');
			return $indexmodel->getScrollImage();
		}
		
		public function getVideo(){
			$indexmodel=M('index');
			return $indexmodel->getVideo();
		}
		
		public function getAImage(){
			$indexmodel=M('index');
			echo $indexmodel->getAImage();
		}
		
		public function information(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('main/information-of-club.html');
		}
		
		public function notice(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('main/new.html');
		}
		
		public function show1(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			//获取当前成员加入该社团的状态
			$isJoin = M('joinSociety');
			$result = $isJoin->isJoin();
			if($result==1)
				VIEW::_assign('isJoin','已加入');
			else if($result==0)
				VIEW::_assign('isJoin','等待审核');
			else
				VIEW::_assign('isJoin','加入社团');
			
			VIEW::display('main/orgMessage1.html');
		}
		
		public function show2(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			//获取当前成员加入该社团的状态
			$isJoin = M('joinSociety');
			$result = $isJoin->isJoin();
			if($result==1)
				VIEW::_assign('isJoin','已加入');
			else if($result==0)
				VIEW::_assign('isJoin','等待审核');
			else
				VIEW::_assign('isJoin','加入社团');

			VIEW::display('main/orgMessage2.html');
		}
		
		public function show3(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='main.php?controller=login&method=showPI'><span class='lr' >消息<sup>1</sup></span></a>");
				VIEW::_assign("reg","<a href='main.php?controller=login&method=showPI2'><span class='lr' >{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			//获取当前成员加入该社团的状态
			$isJoin = M('joinSociety');
			$result = $isJoin->isJoin();
			if($result==1)
				VIEW::_assign('isJoin','已加入');
			else if($result==0)
				VIEW::_assign('isJoin','等待审核');
			else
				VIEW::_assign('isJoin','加入社团');

			VIEW::display('main/orgMessage3.html');
		}
	}
?>

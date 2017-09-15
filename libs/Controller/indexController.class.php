<?php
	header('content-type:text/html;charset=utf-8');
	require_once('/../ORG/checkedImage_contact.php');
	require_once('/../../framework/function/url_encode.php');
	//首页的控制器
	class indexController{
		



		//显示首页，为默认
		public function index(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr'  id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			$temp=$this->getVideo();
			if(!empty($temp))
				VIEW::_assign("video","../db/index/video/".$temp[0]->videoName);
			$arr=$this->getScrollImage();
			if(!empty($arr)){
				VIEW::_assign("arr",$arr);
			}

			VIEW::_assign("url_aboutUs","index.html?".encrypt_url("controller=index&method=showAboutUs",'SCU'));
			VIEW::_assign("url_information","index.html?".encrypt_url("controller=index&method=information",'SCU'));
			VIEW::_assign("url_contactUs","index.html?".encrypt_url("controller=index&method=contactUs",'SCU'));
			VIEW::_assign("url_reg","index.html?".encrypt_url("controller=reg&method=one",'SCU'));
			VIEW::_assign("url_showPI2","index.html?".encrypt_url("controller=login&method=showPI2",'SCU'));
			VIEW::_assign("url_logout","index.html?".encrypt_url("controller=login&method=logout",'SCU'));


			VIEW::display('main/index.html');
		}
		
		public function showAboutUs(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr'  id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::_assign("url_aboutUs","index.html?".encrypt_url("controller=index&method=showAboutUs",'SCU'));
			VIEW::_assign("url_information","index.html?".encrypt_url("controller=index&method=information",'SCU'));
			VIEW::_assign("url_contactUs","index.html?".encrypt_url("controller=index&method=contactUs",'SCU'));
			VIEW::_assign("url_reg","index.html?".encrypt_url("controller=reg&method=one",'SCU'));
			VIEW::_assign("url_showPI2","index.html?".encrypt_url("controller=login&method=showPI2",'SCU'));
			VIEW::_assign("url_logout","index.html?".encrypt_url("controller=login&method=logout",'SCU'));

			VIEW::display('main/aboutUs.html');
		}
		
		public function getCheckedImage_contactUs(){
			createCheckedImage(90,33);
		}
		
		public function contactUs(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr'  id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::_assign("url_aboutUs","index.html?".encrypt_url("controller=index&method=showAboutUs",'SCU'));
			VIEW::_assign("url_information","index.html?".encrypt_url("controller=index&method=information",'SCU'));
			VIEW::_assign("url_contactUs","index.html?".encrypt_url("controller=index&method=contactUs",'SCU'));
			VIEW::_assign("url_reg","index.html?".encrypt_url("controller=reg&method=one",'SCU'));
			VIEW::_assign("url_showPI2","index.html?".encrypt_url("controller=login&method=showPI2",'SCU'));
			VIEW::_assign("url_logout","index.html?".encrypt_url("controller=login&method=logout",'SCU'));

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
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr'  id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::_assign("url_aboutUs","index.html?".encrypt_url("controller=index&method=showAboutUs",'SCU'));
			VIEW::_assign("url_information","index.html?".encrypt_url("controller=index&method=information",'SCU'));
			VIEW::_assign("url_contactUs","index.html?".encrypt_url("controller=index&method=contactUs",'SCU'));
			VIEW::_assign("url_reg","index.html?".encrypt_url("controller=reg&method=one",'SCU'));
			VIEW::_assign("url_showPI2","index.html?".encrypt_url("controller=login&method=showPI2",'SCU'));
			VIEW::_assign("url_logout","index.html?".encrypt_url("controller=login&method=logout",'SCU'));
			VIEW::_assign("url_club1","index.html?".encrypt_url("controller=index&method=show1&sNO=3",'SCU'));

			VIEW::display('main/information-of-club.html');
		}
		
		public function notice(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr'  id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
			}
			VIEW::display('main/new.html');
		}
		
		public function show1(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr'  id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
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
			//获取关注状态
			$isConcern = M('concernSociety');
			$result_concern = $isConcern->isConcern();
			VIEW::_assign('isConcern',$result_concern);
			if($result_concern){
				VIEW::_assign('isConcern','1');
			}
			else
				VIEW::_assign('isConcern','0');
			VIEW::_assign("url_aboutUs","index.html?".encrypt_url("controller=index&method=showAboutUs",'SCU'));
			VIEW::_assign("url_information","index.html?".encrypt_url("controller=index&method=information",'SCU'));
			VIEW::_assign("url_contactUs","index.html?".encrypt_url("controller=index&method=contactUs",'SCU'));
			VIEW::_assign("url_reg","index.html?".encrypt_url("controller=reg&method=one",'SCU'));
			VIEW::_assign("url_showPI2","index.html?".encrypt_url("controller=login&method=showPI2",'SCU'));
			VIEW::_assign("url_logout","index.html?".encrypt_url("controller=login&method=logout",'SCU'));
			VIEW::_assign("url_club1","index.html?".encrypt_url("controller=index&method=show1&sNO=3",'SCU'));
			VIEW::_assign("url_club2","index.html?".encrypt_url("controller=index&method=show2&sNO=3",'SCU'));
			VIEW::_assign("url_club3","index.html?".encrypt_url("controller=index&method=show3&sNO=3",'SCU'));
			VIEW::display('main/orgMessage1.html');
		}
		
		public function show2(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr'  id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
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
			//获取关注状态
			$isConcern = M('concernSociety');
			$result_concern = $isConcern->isConcern();
			if($result_concern){
				VIEW::_assign('isConcern','1');
			}
			else{
				VIEW::_assign('isConcern','0');
			}
			VIEW::_assign("url_aboutUs","index.html?".encrypt_url("controller=index&method=showAboutUs",'SCU'));
			VIEW::_assign("url_information","index.html?".encrypt_url("controller=index&method=information",'SCU'));
			VIEW::_assign("url_contactUs","index.html?".encrypt_url("controller=index&method=contactUs",'SCU'));
			VIEW::_assign("url_reg","index.html?".encrypt_url("controller=reg&method=one",'SCU'));
			VIEW::_assign("url_showPI2","index.html?".encrypt_url("controller=login&method=showPI2",'SCU'));
			VIEW::_assign("url_logout","index.html?".encrypt_url("controller=login&method=logout",'SCU'));
			VIEW::_assign("url_club1","index.html?".encrypt_url("controller=index&method=show1&sNO=3",'SCU'));
			VIEW::_assign("url_club2","index.html?".encrypt_url("controller=index&method=show2&sNO=3",'SCU'));
			VIEW::_assign("url_club3","index.html?".encrypt_url("controller=index&method=show3&sNO=3",'SCU'));
			VIEW::display('main/orgMessage2.html');
		}
		
		public function show3(){
			@session_start();
			if(isset($_SESSION['userinfo'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr'  id='hvr'>{$_SESSION['userinfo']['username']}<div id='tringle'></div></span></a>");
			}
			if(isset($_COOKIE['username'])){
				VIEW::_assign("login","<a href='index.html?".encrypt_url("controller=login&method=showPI",'SCU')."'><span class='lr' >消息<sup  id='new'>1</sup></span></a>");
				VIEW::_assign("reg","<a href='index.html?".encrypt_url("controller=login&method=showPI2",'SCU')."'><span class='lr' id='hvr'>{$_COOKIE['username']}<div id='tringle'></div></span></a>");
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
			//获取关注状态
			$isConcern = M('concernSociety');
			$result_concern = $isConcern->isConcern();
			if($result_concern){
				VIEW::_assign('isConcern','1');
			}
			else
				VIEW::_assign('isConcern','0');
			/*
			//获取评论
			$comment = M('comment');
			$result_comment = $comment->getAll();
			if($result)
				VIEW::_assign('comment_arr',$result_comment);
			*/
			VIEW::_assign("url_aboutUs","index.html?".encrypt_url("controller=index&method=showAboutUs",'SCU'));
			VIEW::_assign("url_information","index.html?".encrypt_url("controller=index&method=information",'SCU'));
			VIEW::_assign("url_contactUs","index.html?".encrypt_url("controller=index&method=contactUs",'SCU'));
			VIEW::_assign("url_reg","index.html?".encrypt_url("controller=reg&method=one",'SCU'));
			VIEW::_assign("url_showPI2","index.html?".encrypt_url("controller=login&method=showPI2",'SCU'));
			VIEW::_assign("url_logout","index.html?".encrypt_url("controller=login&method=logout",'SCU'));
			VIEW::_assign("url_club1","index.html?".encrypt_url("controller=index&method=show1&sNO=3",'SCU'));
			VIEW::_assign("url_club2","index.html?".encrypt_url("controller=index&method=show2&sNO=3",'SCU'));
			VIEW::_assign("url_club3","index.html?".encrypt_url("controller=index&method=show3&sNO=3",'SCU'));
			VIEW::display('main/orgMessage3.html');
		}
	}
?>
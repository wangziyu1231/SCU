<?php
	header('content-type:text/html;charset=utf-8');
	//首页的控制器
	class indexController{
		
		//显示首页，为默认
		public function index(){
			VIEW::display('main/index.html');
		}
		
		public function getScrollImage(){
			$indexmodel=M('index');
			echo $indexmodel->getScrollImage();
		}
		
		public function getVideo(){
			$indexmodel=M('index');
			echo $indexmodel->getVideo();
		}
		
		public function getAImage(){
			$indexmodel=M('index');
			echo $indexmodel->getAImage();
		}
		
		public function information(){
			VIEW::display('./main/information-of-club.html');
		}
		
		public function notice(){
			VIEW::display('./main/new.html');
		}
		
		public function show1(){
			VIEW::display('./main/orgMessage1.html');
		}
		
		public function show2(){
			VIEW::display('./main/orgMessage2.html');
		}
		
		public function show3(){
			VIEW::display('./main/orgMessage3.html');
		}
		
		public function a(){
			VIEW::display('./main/individualInterface.html');
		}
		
		public function b(){
			VIEW::display('./main/individualInterface2.html');
		}
	}
?>
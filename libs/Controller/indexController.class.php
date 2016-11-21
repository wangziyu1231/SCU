<?php
	header('content-type:text/html;charset=utf-8');
	//首页的控制器
	class indexController{
		
		//显示首页，为默认
		public function index(){
			VIEW::display('index.html');
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
			VIEW::display('information-of-club.html');
		}
		
		public function notice(){
			VIEW::display('new.html');
		}
	}
?>
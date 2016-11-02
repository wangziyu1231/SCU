<?php
	header('content-type:text/html;charset=utf-8');
	//首页的控制器
	class indexController{
		
		//显示首页，为默认
		public function index(){
			VIEW::display('index.html');
		}
		
		//测试
		public function test(){
			DB::query("select * from `test`");
			echo DB::getCharset();
		}
	}
?>
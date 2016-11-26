<?php
	header('content-type:text/html;charset=utf-8');
	//注册控制器
	class regController{
		
		function check_user_exist(){
			//判断用户名是否已存在于DB
			$regModel = M('reg') ;
			$regModel->usercheck();
		}
		
		function one(){
			VIEW::display('./main/reg1.html');
		}
		
		function two(){
			VIEW::display('./main/reg2.html');
			if($_POST){
				//注册处理模型
				$regModel = M('reg') ;
				$regModel->getReg();
			}
		}
		
		function three(){
			VIEW::display('./main/reg3.html');
			if($_POST){
				//注册处理模型
				$regModel = M('reg') ;
				$regModel->getReg();
			}
		}
}
?>
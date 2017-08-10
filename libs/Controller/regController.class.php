<?php
	header('content-type:text/html;charset=utf-8');
	//注册控制器
	class regController{
		
		function check_user_exist(){
			$regModel = M('reg');
			echo $regModel->usercheck();
		}
		
		function one(){
			VIEW::display('./main/reg1.html');
		}
		
		function two(){
			if($_POST){
				VIEW::display('./main/reg2.html');
				//注册处理模型
				$regModel = M('reg') ;
				$regModel->getReg();
			}
			else
				header("Location:main.php?controller=reg&method=one");
		}
		
		function three(){
			if($_POST){
				VIEW::display('./main/reg3.html');
				//注册处理模型
				$regModel = M('reg') ;
				$result = $regModel->getReg();
				if($result){
					header("refresh:1.2;url=./main.php");
				}
				else
					alertGo('注册失败，未知错误','main.php');

			}
			else
				header("Location:main.php?controller=reg&method=one");
		}
}
?>
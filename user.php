<?php
	header("Content-type: text/html; charset=utf-8");
	//该页面用于调试
	//启动SESSION
	@session_start();
	if(isset($_SESSION['userinfo'])){
		//用户已经登录
		$login = true;   
		$userinfo = $_SESSION['userinfo'];  
		$username = $userinfo['username'];
		echo '登录成功！欢迎您！'.$username;

	}else{
		//用户尚未登录
		$login = false;
		echo "您尚未成功登录!";
	}
	
	
	//用户退出  url中传参数
	if(isset($_GET['action']) && $_GET['action']=='logout'){
		
		//清除COOKIE数据
		setcookie('username','',time()-1);
		setcookie('password','',time()-1);

		//清除SESSION数据
		unset($_SESSION['userinfo']);

		//如果SESSION中没有其他数据，则销毁SESSION
		// if(empty($_SESSION)){
			session_destroy();
		// }

		//跳转到首页
		header('Location: main.php');

		//终止脚本
		die;
	}
?>

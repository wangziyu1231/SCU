<?php
	
	//注册模型
	class regModel{
		function usercheck(){
			//验证用户名存在与否
			$username=isset($_POST['username'])?$_POST['username']:"";//将post得到的username给temp
			//sql 语句
			$sql = "select `username` from `userinfo` where `username` = ".$username;			
			//先执行查询
			DB::query($sql);
			//$yn存储fetch结果集的结果 
			// $yn = DB::fetch(DB::FETCH_ONE,DB::FETCH_ASSOC);
			//测试fetch 结果
			$yn = (DB::fetch(DB::FETCH_ONE,DB::FETCH_ASSOC)=="null");
			// echo $yn;
			if(!$yn){
			//用户名已存在
				echo 'true';
			}
			else{
				echo 'false';
			}
		}
		
		//从表单接收用户注册信息
		function getReg(){
			$table = 'userinfo';
			//启动session的初始化
			@session_start();
			/*	login1
				用户名
				密码
				email
			*/
			if($_GET['method']=='two'){
				if(!empty($_POST)){
					$username = $_POST['username'];
					$password = $_POST['pwd'];
					$email = $_POST['email'];
					//密码盐
					$salt = md5(uniqid(microtime()));
					//加密用户密码
					$password = md5($salt.md5($password));
					//数组存储 注册表1
					$_SESSION = array(
						'username'=>$username,
						'password'=>$password,
						'salt'=>$salt,
						'email'=>$email
					);			
				}
			}	
			/*	login2
				姓名
				系别
				专业
				性别
				手机
				微信*/
			if($_GET['method']=='three'){
				if(!empty($_POST)){
					$name = $_POST['realname'];
					$dept = $_POST['dept'];
					$major = $_POST['major'];
					$sex = $_POST['sex'];
					$tel = $_POST['tel'];
					$wechat = $_POST['chat'];
					//数组存放注册表2的信息
					$arr = array(
						'name'=>$name,
						'dept'=>$dept,
						'major'=>$major,
						'sex'=>$sex,
						'tel'=>$tel,
						'wechat'=>$wechat
					);		
					$reginfo = array_merge($_SESSION,$arr);
				}
				// insert 导入数据库
				if(isset($reginfo['username'])){
					DB::insert($table,$reginfo);
					$_SESSION =array();
					session_destroy();
					//注册完成1.2s 跳转到审核完成界面 此处测试 暂时转到首页
					header("refresh:1.2;url=./main.php");
				}	
			}
				
		}
	}

?>	
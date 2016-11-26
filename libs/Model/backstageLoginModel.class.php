<?php
	class backstageLoginModel{
	//登录模型
		function fetch($username,$table){
			//查询并获取改用户的一行信息
			//sql语句
			$sql = "select `susername`,`spassword`,`ssalt` from ".$table." where `susername`='$username' ";
			//先执行查询
			DB::query($sql);
			//fetch得到结果集 $yn判断结果集是否为空 
			return DB::fetch(DB::FETCH_ONE,DB::FETCH_ASSOC);
		}
		
		function logincheck(){
			$table = 'societyinfo'; 
			//判断cookie是否保存信息
			if(isset($_COOKIE['username'])&&isset($_COOKIE['password'])){
				$username = $_COOKIE['susername'];
				$password = $_COOKIE['spassword'];
				$user_row= $this->fetch($username,$table);
				if($user_row!="null"){
					//计算cookie密码
					$user_row =json_decode($user_row,true);
					$ua = isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'';
					$password_cookie = md5($user_row['spassword']).md5($ua.$user_row['ssalt']);
					//验证cookie密码
					if($password == $password_cookie){
						//登录成功
						session_start();
						$_SESSION['societyinfo']= array(
							'username'=>$username
						);
						alertGo("登录成功",'admin.php?controller=socmem&method=socMember');
						die;	
					}
				}
				die('登录状态已失效，请重新登录。');
				
			}
			
			else if(!empty($_POST)){
			
				//获取post的用户名密码
				$username = isset($_POST['username']) ? trim($_POST['username']) : '';
				$password = isset($_POST['password']) ? $_POST['password'] : '';
				
				$user_row= $this->fetch($username,$table);
				$yn = ($user_row=="null");
				$user_row=json_decode($user_row,true);
				
				// echo $yn;
				if(!$yn){
				//用户存在
					//判断密码是否正确
					$password = md5($user_row['ssalt'].md5($password));
					if($password == $user_row['spassword']){
						//判断是否勾选了记住密码
						if(isset($_POST['auto_login'])&&$_POST['auto_login'] == "on"){
							//$ua  user agent信息 用于加密密码
							$ua = isset($_SERVER['HTTP_USER_AGENT'])?$_SERVER['HTTP_USER_AGENT']:'';
							//加密后的cookie密码
							$password_cookie = md5($user_row['spassword']).md5($ua.$user_row['ssalt']);
							//保存期限 此处为一个月
							$cookie_expire = time()+ 2592000;
							//保存用户名
							setcookie('username',$username,$cookie_expire);
							//保存密码
							setcookie('password',$password_cookie,$cookie_expire);
						}
						//登录成功 页面跳转
						@session_start();
						$_SESSION['societyinfo']= array(
							'username'=>$username
						);
						// header('Location:admin.php?controller=socmem&method=test');
						alertGo("登录成功",'admin.php?controller=socmem&method=socMember');
						
						
					}
				}
				else{
					die('用户名不存在或密码错误。');
				}
			
			}
				
			
		}
	}

?>	
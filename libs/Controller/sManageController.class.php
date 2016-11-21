<?php
	class sManageController{
		
	//管理员登录
		public function login(){
			$model=M('smm');
			$flag=$model->login();
			if($flag)
				die("登录成功");
			else
				die("用户名或密码有误");
		}
		
		
	//显示页面
		//登录页面
		public function showManage(){
			VIEW::display('test.html');
		}
		
		//社团注册审核
		public function showRegCheck(){
			$model=M('smr');
			$model->get();
			$arr=json_decode($model->getNext());
			$arr=is_object($arr)?get_object_vars($arr):$arr;
			VIEW::assign($arr);
			VIEW::display('regform.html');
		}
		
		//活动申请审核
		public function aChecked(){
			VIEW::display('application-from.html');
		}
		
		//活动发布
		public function show_apply(){
			VIEW::display('activity-release.html');
		}
		
		//管理人员
		public function manage(){
			VIEW::display('manage_manage.html');
		}
		
		
		
	//管理人员模块
		//添加管理员
		public function addManager(){
			$model=M('smm');
			echo $model->add();
		}
		
		//删除管理员
		public function delManager(){
			$usr='root1';
			$model=M('smm');
			echo $model->del($usr);
		}
	}

?>
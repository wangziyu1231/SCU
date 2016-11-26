<?php
	class socSubmitController{
		//社团提交控制器
		
		
		//===========================
		//测试用 
		//显示社团年度注册表-提交
		function regsubtest(){
			VIEW::display('admin/regform.html');
		}
		//显示社团活动申请表-提交
		function actsubtest(){
			VIEW::display('admin/actform.html');
		}
		//===========================
		
		
		//社团年度注册表提交
		function regSubmit(){
			$regSubmit = M('regSubmit');
			$regSubmit->submit();
		}
		
		//社团活动申请表提交
		function actSubmit(){
			$actSubmit = M('actSubmit');
			$actSubmit->submit();
		}
		
		
	}
?>
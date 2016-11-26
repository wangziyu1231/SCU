<?php
	class regSubmitModel{
		//社团年度注册表提交模型
		
		
		function submit(){
			if(!empty($_POST)){
				$table = 'society_reg';
				DB::insert($table,$_POST);
				die('提交成功 请等待审核');
			}
			else{
				die('提交失败');
			}
		}
		
		
	}
?>
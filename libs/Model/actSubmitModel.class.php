<?php
	class actSubmitModel{
		//社团活动申请表提交模型
		
		
		function submit(){
			if(!empty($_POST)){
				$table = 'activity_apply';
				DB::insert($table,$_POST);
				die('提交成功 请等待审核');
			}
			else{
				die('提交失败');
			}
		}
		
		
	}
?>
<?php
	class socmemController{
		//社团成员管理 控制器
		
		/**
		  *socMember 方法
		  *获取已经通过审核、或者社团管理员添加的 默认过审的社团成员
		  *$para : 传的参数 'soc'  
		  */
		function socMember(){ 
			
			$para = 'soc';
			$socmem = M('socmem');
			$socmem->getSocMember($para);
	
		}
		
		
		/**
		   *pendMember方法
		   *获取待审核的社团成员
		   *$para : 传的参数 'pend'  
		   */
		function pendMember(){ 
			$para = 'pend';
			$socmem = M('socmem');
			$socmem->getSocMember($para);
		
		}
		
		
		
		
		/**
		   * add update del方法
		   *社团成员的编辑功能
		   */
		// function add(){
			// $socManage = M('socManage');
			// $socManage->add();
		// }
		// function update(){
			
			// $socManage = M('socManage');
			// $socManage->update();
		// }
		function del(){
			$socManage = M('socManage');
			$socManage->del();
		}
		
		
	}
?>
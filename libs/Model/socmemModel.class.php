<?php
	class socmemModel{
		/**
		  *getSocMember 方法 获取社团成员表格信息
		  *return: 数组 包含 社团会员信息(已通过社团审核)    
		  */
		
		function getSocMember($para){
			//初始化
			@session_start();
			if(isset($_SESSION['societyinfo'])){
				//用户已经登录
				$socManager = $_SESSION['societyinfo'];
				$value =$socManager['username'];
				$table = 'societyinfo';
				if($para == 'soc'){
					// print_r($socmem);//该句为测试用
					$socmem = json_decode($this->fetch($value,$table,1))[0];
					if(!empty($socmem)){
						VIEW::assign($socmem) ;//返回society_member的数据  
						VIEW::display('admin/backstageManagement.html');
					}
					// else{
						// $arr = json_decode($this->fetch($value,$table,2))[0];
						// $socmem =array('sName'=>$arr['sName']);
						// VIEW::assign($socmem) ;//返回society_member的数据  
						// VIEW::display('admin/backstageManagement.html');
					// }
					
				}
				else if($para =='pend'){
					return json_decode($this->fetch($value,$table,0));
				}
				
			}
			else{
				die('请先登录');
			}
		}
		
		// function getPendMember(){ }
		
		/**
		  *fetch 方法  
		  *$value: 传入sql查询相关的值
		  *$table : 数据库表
		  *$flag: 一个标志 1:获取过审社团成员   0:获取待审社团成员 
		  */
		
		function fetch($value,$table,$flag){
			if($flag ==1){
				//sql 语句
				$sql = "select sm.* from ".$table." as t,`society_member` as sm where `susername` = '$value' and t.sName=sm.sName and review = '1'" ;
			}
			else if($flag ==0){
				//sql 语句
				$sql = "select sm.* from ".$table." as t,`society_member` as sm where `susername` =  '$value'  and t.sName=sm.sName and review = '0'" ;
			}
			else {
				$sql = "select `sName` from ".$table." where  `susername` =  '$value' ";
			}
			
			//查询
			DB::query($sql);
			return DB::fetch(DB::FETCH_ALL,DB::FETCH_ASSOC);
		}
	}
?>
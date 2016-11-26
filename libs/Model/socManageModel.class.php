<?php
	class socManageModel{
		
		function del(){
			//获取要删除的社团成员id => smNO
			if($_POST){
				$smNO = $_POST['smNO'];
				die($smNO);
				//sql
				$table = 'society_member';
				$value = $smNO;
				if($this->fetch($value,$table,1)!="null"){
					$where ="`smNO`=".$value;
					if(DB::del($table,$where)){
						alertBack("删除成功");
					}
						
				}	
			}
			else{
				alertBack("该社团成员信息不存在或已删除");
			}
			
		}
		
		//审核提交
		function review(){
			//获取要审核的社团成员id => smNO
			$smNO = isset($_GET['smNO']) ? intval($_GET['smNO']) : 0;
			//sql
			$table = 'society_member';
			$value = $smNO;
			if($this->fetch($value,$table,0)!="null"){
				$where = "`smNO` = ".$smNO;
				$arr = array('review'	=>'1');
				DB::update($table,$arr,$where);
			}
		}
		
		
		
		function fetch($value,$table,$flag){
			//sql 语句
			$sql = "select * from ".$table." where `smNO`= ".$value;
			if($flag==1){
				$sql.=" and `review` = '1' " ;
			}else{
				$sql.=" and `review` = '0' " ;	
			}
			//查询
			DB::query($sql);
			return DB::fetch(DB::FETCH_ONE,DB::FETCH_ASSOC);
		}
		
		
		/*   ======暂不需要=======
		function add(){
			if(!empty($_POST)){
				$table = 'society_member';
				DB::insert($table,$_POST);
				//提交后跳转回上一页
				// 
				//结束脚本
				die();
			}
		}
		function update(){
			if(!empty($_POST)){
				//获取要编辑的社团成员id => smNO
				$smNO = isset($_GET['smNO']) ? intval($_GET['smNO']) : 0;
				//数据库表处理
				$table = 'society_member';
				//数据库条件
				$where = "`smNO` = ".$smNO;
				DB::update($table,$_POST,$where);
				//提交后跳转回上一页
				// header(); 
				//结束脚本
				die();
			}
		}
			
		 ==========================================*/
		 
	}
?>
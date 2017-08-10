<?php
	class activityModel{
		public function activity(){
			@session_start();
			$sql="select `aNO`,`aName`,`hName`,`date_of_entry`,`location` from `scu_activity`";
			DB::query($sql);
			if(($arr['page']=DB::makePage(10))>0){
				$_SESSION['sql']=$sql;
				$arr['date']=DB::getPage(1);
			}	
			else{
				unset($_SESSION['sql']);
				$arr['page']=1;
			}
			return $arr;
		}
		
		public function getPage($p){
			@session_start();
			if(isset($_SESSION['sql'])){
				DB::query($_SESSION['sql']);
				if(($arr['page']=DB::makePage(10))>0){
					$arr['date']=DB::getPage($p);
				}	
			}else{
				$arr['page']=1;
			}
				
			return $arr;
		}
		
		public function getDate_activity(){
			$aNO=$_POST['aNO'];
			$sql="select `aNO`,`aName`,`aContent`,`location`,`hName` from `scu_activity` where `aNO`={$aNO}";
			DB::query($sql);
			return DB::fetch(DB::FETCH_ONE,DB::FETCH_ASSOC);
		}
		
	/*	public function activitySubmit(){
			if($_FILES['file_c']['error']==0){
				move_uploaded_file($_FILES['file_c']['tmp_name'],"../db/activity/".$_FILES['file_c']['name']);
				return $_FILES['file_c']['name'];
			}else{
				die($_FILES['file_c']['error']);
			}
		}
     */
            public function activitySubmit(){
			/*if($_FILES['file']['error']==0){
				move_uploaded_file($_FILES['file']['tmp_name'],"../db/activity/".$_FILES['file']['name']);
				return $_FILES['file']['name'];
			}else{
				die($_FILES['file']['error']);
            }*/
            return DB::update("scu_activity",array("aName"=>$_POST['aname'],"hName"=>$_POST['hname'],"location"=>$_POST['location'],'aContent'=>$_POST['editorValue']),"ssss","`aNO`=".$_POST['aNO']);

		}
	}
?>

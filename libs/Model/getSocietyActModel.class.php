<?php 
	//获取社团活动

	class getSocietyActModel{
		function getSocAct($sNO){
			$sql = "select aa.* from `activity_apply` as aa  ,`societyinfo` as si where aa.sName  = si.sName and si.sNO = $sNO and aa.review = '1' group by `aNO` order by aa.date_of_entry desc";
			$rst = DB::query($sql);
			if($rst){
				$result = DB::fetch(DB::FETCH_ALL,DB::FETCH_ASSOC);
			}
			if($result){
				$society_activity = json_decode($result,true);
				return $society_activity;
			}
			else
				return false;

		}
	}
	


 ?>
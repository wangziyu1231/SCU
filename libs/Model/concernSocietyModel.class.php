<?php
	class concernSocietyModel(){
		//关注社团模型
		private $sNO;
		private $username;
		//获取关注状态
		function isConcern(){
			if (isset($_GET['sNO'])) {
				$this->sNO =  intval($_GET['sNO']);
				//DB查询 是否存在 即该用户是否已加入社团
				@session_start();
				//从session获取username
				if($_SESSION['userinfo']['username'])
					$this->username = $_SESSION['userinfo']['username'];
				else
					//调用登录框
					die('先登录');
				if($is_concern = $this->fetch($this->username,$this->sNO)){
					//已经关注 返回true
					return true;
				}
				else
					//未关注 返回false
					return false;
			}
		}

		//关注
		function concern(){
			//若已关注 执行就删除该记录
			if($this->isConcern()){
				$where = '`username` = '.$this->username;
				if(DB::del('concern',$where))
					return true;
				else
					return false;
			}
			//若未关注 执行就插入该记录
			else{
				$arr = array(
					'username'=>$this->username
					'sNO'=>$this->sNO);
				if(DB::insert('concern',$arr))
					return true;
				else
					return false;
			}

		}


		function fetch($sNO,$username){
			$sql = "select * from `concern` as a where a.sNo = '$this->sNO' and a.username = '$this->username' group by a.username,a.sNO ";
			if(DB::query($sql)){
				return DB::fetch(DB::FETCH_ONE,DB::FETCH_ASSOC);
			}
		}
	}
?>
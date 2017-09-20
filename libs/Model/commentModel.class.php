<?php 
	//社团评论模型类
	class commentModel{
		/**
		*	addComment(): 发表留言
		*	  
		*/
		function addComment(){
			if(!empty($_POST) && isset($_GET['sNO'])){
				$table = 'society_evaluate';
				//注：这个表仍需修改 

				/*

				`society_evaluate`（
				topic_id	主键
				content	评论内容
				date_of_entry 评论提交时间
				）
				add table `user_comment`（
				username  用户id
				topic_id  评论id
				）
				add table `sno_comment`（

				sNO  社团id
				topic_id  评论id
				）

				*/

				//一系列sql插入操作逻辑

				if(DB::insert($table,$_POST,'ssss')){
					$arr_user_comment = array(
						'username' => $_POST['userinfo']['username'],
						'topic_id' => $_POST['topic_id']
 					 );
 					$arr_sno_comment = array(
 						'sNO' => $_GET['sNO'], 
 						'topic_id' => $_$_POST['topic_id']
 					);
					$flag = DB::insert('user_comment',$arr_user_comment,'ss');
					if($flag){
						$flag = DB::insert('sno_comment',$arr_sno_comment,'ss');
						if($flag){
							return true;
						}
						else
							return false;
					}
					else
						return false

				}
				else
					return false;
			}
		}

		function getAll(){
			if(!empty($_GET['sNO'])){
				//从get方法获取sno
				$sNO = $_GET['sNO'];
				$sql = "select * from `society_evaluate` where `sNO`='$sNO'";
				$rst = DB::query($sql);
				if($rst){
					$result = DB::fetch(DB::FETCH_ALL,DB::FETCH_ASSOC);
				}
				if($result){
					$comment_all = json_decode($result,true);
					return $comment_all;
				}
				else
					return false;
			}
		}

		
	}
 ?>
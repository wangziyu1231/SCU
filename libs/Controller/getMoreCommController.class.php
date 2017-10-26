<?php 
	class getMoreCommController{
		//该类用于ajax获取评论异步刷新网页
		function getMoreComm(){
			
			$sNO = $_POST['sNO'];
			$i = $_POST['i'];
			$more_comment = M('comment');
			$result_comment = $more_comment->getAll($sNO,$i);
			echo json_encode($result_comment);
		}
	}
	
 ?>
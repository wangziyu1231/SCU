<?php
	//�½���֤����ļ�
	/*
		@$img_w:Ҫ���ɵ���֤��Ŀ��
		@$img_h:Ҫ���ɵ���֤��ĸ߶�
		@$count:��֤�����ֵ����Ĭ��Ϊ4
		@$fontSize:�����С
		return:none
	*/
	function createCheckedImage($img_w,$img_h,$count=4,$fontSize=20){
		@session_start();
		//����һ����a-z��1-9������
		$arr=array_merge(range('A','Z'),range('a','z'),range(1,9));
		$str="";//�����֤�����ֵ
		for($i=0;$i<$count;$i++){
			 $str.= $arr[rand(0,60)];
		}
		$_SESSION['checkedString']=$str;
		//���ɻ���
		$img=imagecreatetruecolor($img_w,$img_h);
		//���ɱ���ɫ
		$bg_color=imagecolorallocate($img,0xf0,0xf0,0xf0);
		//���û����ı���ɫ
		imagefill($img,0,0,$bg_color);
		//��������
		$fontName="./img/font/ARIALUNI.TTF";
		
		//��ȡÿһ����ֵ�Ŀ��
		$str_w=imagefontwidth($fontSize);
		$str_h=imagefontheight($fontSize);
		
		//��֤����ֵ����ʼ���
		$x=($img_w-($str_w*$count))/2;
		$y=($img_h)/2+11;
		
		for($i=0;$i<10;$i++){
			$color=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
			imageline($img,mt_rand(0,$img_w),mt_rand(0,$img_h),mt_rand(0,$img_w),mt_rand(0,$img_h),$color);
		}
		for($i=0;$i<$count;$i++){
			//������������ɫ
			$str_color=imagecolorallocate($img,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
			imagettftext($img,$fontSize,mt_rand(5,55),$x,$y,$str_color,$fontName,$str[$i]);
			$x+=$str_w+3;
		}
		header('Content-type:image/png');
		imagepng($img);
		imagedestroy($img);
	}

?>
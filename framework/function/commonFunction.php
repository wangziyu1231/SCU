<?php
	/**
	*$name:ʵ�����Ŀ�������
	*$method��Ҫ���õķ�����Ĭ��Ϊ��
	*return:����������
	*/
	function C($name,$method=null){
		require_once('/../../libs/Controller/'.$name.'Controller.class.php');
		$name.='Controller';
		$obj=new $name;
		if($method!=null){
			$obj->$method();
		}
		return $obj;
	}
	
	/**
	*$name:ʵ������ģ����
	*return:ģ�Ͷ���
	*/
	function M($name){
		require_once('/../../libs/Model/'.$name.'Model.class.php');
		$name.='Model';
		return (new $name);
	}
	
	/**
	*$name:ʵ��������ͼ��
	*return:��ͼ����
	*/
	function V($name){
		require_once('/../../libs/View/'.$name.'View.class.php');
		$name.='View';
		return (new $View);
	}
	
	/**
	*$path:����������·��
	*$name:ʵ�����ĵ���������
	*$params:Ϊ���ʼ�������ԣ�Ϊ�����������ʽ��array('key'=>'value')
	*return:�����������
	*/
	function ORG($path,$name,$params=array()){
		require_once('/../../libs/ORG/'.$path.$name.'.class.php');
		$obj=new $name();
		if(!empty($params)){
			foreach($params as $key=>$value){
				$obj->$key=$value;
			}
		}
		return $obj;
	}
	
	/**
	*$message:Ҫ�������Ϣ��Ĭ��Ϊhello
	*$url: Ҫ��ת�ĵ�ַ
	*return :none
	*/
	function alertGo($message="hello",$url){
		echo "<script>alert('{$message}');location.href='$url';</script>";
	}
	
	/**
	*$message:Ҫ�������Ϣ��Ĭ��Ϊhello
	*return :none
	*/
	function alertBack($message="hello"){
		echo "<script>alert('{$message}');history.back();</script>";
	} 
	

	
?>
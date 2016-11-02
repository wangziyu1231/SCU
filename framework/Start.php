<?php
	/*框架的启动引擎类*/
	//包含框架中所有的类文件
	require_once('include_list.php');
	foreach($list as $value){
		require_once($value);
	}
	
	class Start{
		private static $config;
		private static $controller;
		private static $method;
		
		//初始化试图引擎类
		private static function init_view(){
			VIEW::init("Smarty",self::$config['smarty_config']);
		}
		
		//初始化数据库引擎类
		private static function init_db(){
			DB::init("mysqll",self::$config['db_config']);
		}
		
		//启动程序
		public static function run($config){
			self::$config=$config;
			self::init_view();
			self::init_db();
			self::$controller=isset($_GET['controller'])?$_GET['controller']:"index";
			self::$method=isset($_GET['method'])?$_GET['method']:"index";
			$obj=C(self::$controller,self::$method);
		}
	}
?>
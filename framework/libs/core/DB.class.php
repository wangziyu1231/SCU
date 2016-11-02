<?php
	//数据库引擎类
	class DB{
		
		const FETCH_ONE='getone';
		const FETCH_ALL='getall';
		const FETCH_OBJ='getobj';
		const FETCH_NUM=MYSQL_NUM;
		const FETCH_ASSOC=MYSQL_ASSOC;
		const FETCH_BOTH=MYSQL_BOTH;
		
		public static $db;//存储实例化mysql类的对象
		
		//初始化数据库
		public static function init($name,$config){
			self::$db=new $name;
			if(!empty($config)){
				self::$db->connect($config);
			}else{
				die("配置数组为空");
			}
		}
		
		//执行sql语句,返回执行结果，一般用于create,grand,select等操作
		//若是要执行insert，update，delete操作可使用，insert，update,delete方法
		public static function query($sql=null){
			if(!empty($sql)){
				return self::$db->query($sql);
			}
			else{
				die("sql语句为空");
			}
		}
		
		//返回结果集中的行数
		public static function numRows(){
			return self::$db->numRows();
		}
		
		//返回结果集中的列数
		public static function fields(){
			return self::$db->fields();
		}
		
		//获取数据库使用的字符集
		public static function getCharset(){
			return self::$db->getCharset();
		}
		
		//设置数据库连接的字符集
		public static function setCharset($charset=null){
			if(!empty($charset)){
				return self::$db->setCharset($charset);
			}else{
				die("字符集为空!");
			}
		}
		
		//设置结果集的偏移量
		public static function seek($offest=null){
			return self::$db->seek($offest);
		}
		
		/*获取结果集中的数据,
		$type的可选值为DB::FETCH_ALL,DB::FETCH_ONE,DB::FETCH_OBJ
		$dateType的可选值为DB::FETCH_NUM,DB::FETCH_ASSOC,DB::FETCH_BOTH
		return json数据*/
		public static function fetch($type,$dateType){
			switch($type){
				case DB::FETCH_ONE:
					$jsstr=json_encode(self::$db->fetchOne($dateType));
					break;
				case DB::FETCH_ALL:
					$jsstr=json_encode(self::$db->fetchAll($dateType));
					break;
				case DB::FETCH_OBJ:
					$jsstr=json_encode(self::$db->fetchObject());
					break;
				default:$jsstr="";
			}
			return $jsstr;
		}
		
		//返回上一次执行所影响的行数
		public static function affectedRows(){
			return self::$db->affectedRows();
		}
		
		//返回上一次插入的id
		public static function insertId(){
			return self::$db->insertId();
		}
		
		//释放结果集
		public static function freeResult(){
			self::$db->freeResult();
		}
		
		//插入数据
		public static function insert($table,$arr){
			if(!empty($table)){
				return self::$db->insert($table,$arr);
			}else{
				die("要插入数据的表名为空");
			}
		}
		
		//更新数据
		public static function update($table,$arr=array(),$where=null){
			if(!empty($table)){
				return self::$db->update($table,$arr,$where);
			}else{
				die("要更新的表名为空");
			}
		}
		
		//删除数据
		public static function del($table,$where){
			if(!empty($table)){
				return self::$db->del($table,$where);
			}else{
				die("要删除的表名为空");
			}
		}
		
	}

?>
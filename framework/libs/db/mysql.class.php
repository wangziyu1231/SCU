<?php
	class mysqll{
		/**
		*连接数据库
		*$config:为连接数据库的配置信息，采用关联数组的形式，默认为一个空数组
		*return:连接标志符
		*/
		private static $link;
		private static $result;
		//private static $stmt;
		function connect($config=array()){
			$host=isset($config['host'])?$config['host']:"";
			$user=isset($config['user'])?$config['user']:"";
			$password=isset($config['password'])?$config['password']:"";
			$dbname=isset($config['dbname'])?$config['dbname']:"";
			$charset=isset($config['charset'])?$config['charset']:"utf8";
			$link=mysqli_connect($host,$user,$password,$dbname);
			if(!$link){
				die('数据库连接出错，错误原因为'.mysqli_conncet_error());
			}
			self::$link=$link;
			$this->setCharset($charset);
			return $link;
		}
		
		//设置字符集，成功r返回 字符集，失败return false
		function setCharset($charset){
			$flag=mysqli_set_charset(self::$link,$charset);
			if(mysql_errno()){
				die("设置字符集出错，错误原因为：".mysql_error());
			}
			if($flag){
				return mysqli_character_set_name(self::$link);
			}else{
				return false;
			}
		}
		
		/**获取数据库使用的字符集
		*/
		function getCharset(){
			return mysqli_character_set_name(self::$link);
		}
		
		/**
		*执行sql语句
		*$sql: 要执行的sql语句
		*retrun: 执行失败return false,执行SELECT, SHOW, DESCRIBE或 EXPLAIN查询会返回一个mysqli_result 对象，其他查询则返回TRUE。
		*/
		function query($sql){
			//$sql=mysqli_real_escape_string(self::$link,$sql);
			$result=mysqli_query(self::$link,$sql);
			if(!$result){
				die("执行sql语句出错，错误原因为".mysqli_error(self::$link)."<br/>"."错误的sql语句：".$sql);
			}
			self::$result=$result;
			return $result;
		}
		
		/**
		*设置结果集的偏移量
		*$offest:要设置的偏移量，从0开始， 默认为0；
		*retrun: false or true
		*/
		function seek($offest=0){
			$offest=intval($offest);
			if($offest<0||$offest>=$this->numRows())
				return false;
			return mysqli_data_seek(self::$result,$offest);
		}
		
		
		/**
		*从结果集中获取一行数据，并封装成一位数组
		*$type:获取数组的类型，三选一,MYSQLI_ASSOC,MYSQLI_NUM,MUSQLI_BOTH
		*return:false or 数组
		*/
		function fetchOne($type=MYSQLI_ASSOC){
			if(empty(self::$result))
				die("结果集为空，请先执行查询，再获取数据");
			return mysqli_fetch_array(self::$result,$type);
		}
		
		/**
		*从结果集中获取全部数据，并封装成二维数组
		*$type:获取数组的类型，三选一,MYSQLI_ASSOC,MYSQLI_NUM,MUSQLI_BOTH
		*return:空数组 or 二维数组
		*/
		function fetchAll($type=MYSQLI_ASSOC){
			if(empty(self::$result))
				die("结果集为空,请先执行查询，再获取数据");
			while($r=mysqli_fetch_array(self::$result,$type)){
				$arr[]=$r;
			}
			return isset($arr)?$arr:array();
		}
		
		/**
		*从结果集中获取一列数据，并封装成一个新对象
		*return: 对象 or false
		*/
		function fetchObject(){
			if(empty(self::$result))
				die("结果集为空,请先执行查询，再获取数据");
			return mysqli_fetch_object(self::$result);
		}
		
		/**
		*返回上一次查询影响的行数
		*return:执行成功则返回>=0的整数，失败返回false
		*/
		function affectedRows(){
			$temp=mysqli_affected_rows(self::$link);
			if($temp==-1)
				return false;
			return $temp;
		}
		
		/**
		*返回上次插入语句，自增长的id,失败return false
		*/
		function insertId(){
			if(!empty(self::$link))
				return mysqli_insert_id(self::$link);
			else
				return false;
		}
		
		
		/**
		*获取结果集的列数
		*return: >=0
		*/
		function fields(){
			if(!empty(self::$result))
				return mysqli_num_fields(self::$result);
			else
				die("请先执行查询");
		}
		
		
		/**
		*获取结果集数据的行数
		*return:false or >0的整数
		*/
		function numRows(){
			if(!empty(self::$result)){
				$temp=mysqli_num_rows(self::$result);
				if($temp<=0)
					return false;
				else
					return $temp;
			}else
				die("请先执行查询");
		}
		
		/*释放结果集
		*/
		function freeResult(){
			if(!empty(self::$result))
				mysqli_free_result(self::$result);
		}
		/**
		*往表中插入数据
		*$table:要插入的表
		*$arr:要字段以及值
		*return: -1 or 插入的id
		*/
		function insert($table,$arr=array()){
			if(!empty($arr)){
				foreach($arr as $key=>$value){
					$k[]='`'.$key.'`';
					$v[]="'".$value."'";
				}
			}
			if(!empty($table)){
				$sql='insert into `'.$table.'`';
				$strk=implode(',',$k);
				$strv=implode(',',$v);
				$sql.='('.$strk.')  ';
				$sql.='values('.$strv.')';
				self::$result=mysqli_query(self::$link,$sql);
				return $this->insertId();
			}else{
				return false;
			}
		}
		
		
		/**
		*更新表中的数据
		*$table:要更新的表
		*$arr:要更新的字段及值
		*$where:条件
		*return: -1 or 插入的id
		*/
		function update($table,$arr=array(),$where=null){
			if(!empty($table)){
				$sql="update `$table` set  ";
				foreach($arr as $key=>$value){
					$sql.='`'.$key.'`'.'="'.$value.'",';
				}
				$sql=substr($sql,0,count($sql)-2);
				$sql.="    ";
				if(!empty($where)){
					$where=mysqli_real_escape_string(self::$link,$where);
					$sql.=' where   '.$where;
				}
				$this->query($sql);
				return $this->affectedRows();
			}else
				return false;
		}
		
		/*
		*删除表中的数据
		*$table:表名
		*$where:条件
		*return: false or 影响的行数
		*/
		function del($table,$where){
			if(!empty($table)){
				$sql="delete from `$table`     ";
				if(!empty($where)){
					$sql.='  where '.$where;
				}
				$this->query($sql);
				return $this->affectedRows();
			}else
				return false;
		}
	}
?>
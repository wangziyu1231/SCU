<?php
	//管理的入口文件
	header("Content-type: text/html; charset=utf-8");
	require_once('config.php');
	require_once('framework/Start.php');
	Start::run($config,"backstageLogin","login_view");
?>
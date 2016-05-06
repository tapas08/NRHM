<?php
	//connect to server
	mysql_connect('localhost','root','')or die('error server');
	
	//connect to db
	mysql_select_db('MIS')or die('error db');
	require_once('includes/validation.php');
	
	session_start();
	session_name("auth");
	
?> 
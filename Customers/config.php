<?php

	$DB_HOST = 'remotemysql.com';
	$DB_USER = 'YNJ4jhoenj';
	$DB_PASS = '6TfrgZtvZh';
	$DB_NAME = 'YNJ4jhoenj';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	

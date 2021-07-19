<?php

	$DB_HOST = 'pei17y9c5bpuh987.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
	$DB_USER = 'ol9srihjuo6pu5v9';
	$DB_PASS = 'ahn9alyahvgq4vcf';
	$DB_NAME = 'btkpxbu07ua2q46v';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	

<?php  
	/*
		Nama file 	: 12_06_logout.php
		Nama 		: Rezky Yustisio Hadi Pratama
	*/

	session_start();
	$_SESSION['username'] = '';
	unset($_SESSION['username']);
	session_unset();
	session_destroy();
	header('Location: 12_04_login.php');
?>
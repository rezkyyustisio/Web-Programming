<?php  
	/*
		Nama file 	: 12_02_logout.php
		Nama 		: Rezky Yustisio Hadi Pratama
	*/

	session_start();
	$_SESSION['username'] = '';
	unset($_SESSION['username']);
	session_unset();
	session_destroy();
	header('Location: 12_01_login.php');
?>
<?php  
	session_start();		
	if (!isset($_SESSION['username'])) {
		header('location:login_admin.php');  
	}

	include 'common/header_admin.php';

?> 




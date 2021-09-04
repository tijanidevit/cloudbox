<?php 
	session_start();

	unset($_SESSION['cloud_user']);

	header('location: ./login');	
?>
<?php 
	include_once '../core/session.class.php';
	include_once '../core/users.class.php';
	include_once '../core/core.function.php';
	echo register();
	function register()
	{
		$session = new Session();
		$user_obj = new Users();
		if (isset($_POST['email'])) {

			if (!isset($_POST['password']) || empty($_POST['password']) ) {
				return displayWarning('password is required and cannot be empty');
			}

			$email = $_POST['email'];
			$fullname = $_POST['fullname'];
			$password = $_POST['password'];


			if ($user_obj->check_email_existence($email)) {
				return displayWarning($email.' has already been registered. Try a unique one');
			}
			
			if ($user_obj->register($fullname,$email,$password)) {
				$user = $user_obj->fetch_user($email);
				$session->create_session('cloud_user',$user);
				return 1;
			}
			else{
				return displayWarning('Error With Server! Try again.');
			}
		}
	}
?>
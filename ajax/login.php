<?php 
include_once '../core/session.class.php';
include_once '../core/users.class.php';
include_once '../core/core.function.php';

$session = new Session();
$user_obj = new users();

if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	if ($user_obj->check_email_existence($email)) {
		if ($user_obj->login($email,$password)) {
			$user = $user_obj->fetch_user($email);
			$session->create_session('cloud_user',$user);
			echo 1;
		}
		else{
			echo displayWarning('Invalid Password');
		}
	}
	else{
		echo displayWarning('Email address not recognised');
	}
}

else{
	echo "No input made";
}
?>
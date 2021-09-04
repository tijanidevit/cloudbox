<?php 
include_once '../core/session.class.php';
include_once '../core/users.class.php';
include_once '../core/core.function.php';

$session = new Session();
$user_obj = new Users();

if (isset($_POST['username'])) {
	$username = $_POST['username'];

	if ($user_obj->check_username_existence($username)) {
		$user = $user_obj->fetch_user($username);
		$session->create_session('chit_username',$username);
		$session->create_session('chit_user_id',$user['id']);
		echo 1;
	}
	else{
		echo displayWarning('Username not recognised');
	}
}

else{
	echo "No input made";
}
?>
<?php 
	include_once '../core/session.class.php';
	include_once '../core/users.class.php';
	include_once '../core/core.function.php';
	echo register();
	function register()
	{
		$session = new Session();
		$user_obj = new Users();
		if (isset($_POST['username'])) {

			if (!isset($_POST['gender']) || empty($_POST['gender']) ) {
				return displayWarning('Gender is required and cannot be empty');
			}

			$username = $_POST['username'];
			$fullname = $_POST['fullname'];
			$gender = $_POST['gender'];


			if ($user_obj->check_username_existence($username)) {
				return displayWarning($username.' has already been registered. Try a unique one');
			}
			
			$image = upload_file($_FILES['image'],'../uploads/images/');
			if ($user_obj->register($username,$fullname,$gender,$image)) {
				$user = $user_obj->fetch_user($username);
				$session->create_session('chit_user',$user);
				return 1;
			}
			else{
				return displayWarning('Error With Server! Try again.');
			}
		}
	}
?>
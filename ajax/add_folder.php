<?php 
	include_once '../core/session.class.php';
	include_once '../core/user_folders.class.php';
	include_once '../core/users.class.php';
	include_once '../core/core.function.php';
	echo create();
	function create()
	{
		$session = new Session();
		$user_folder_obj = new User_folders();
		$user_obj = new Users();
		if (isset($_POST['folder_name'])) {

			$folder_name = $_POST['folder_name'];
			$user_id = $_SESSION['cloud_user']['id'];


			if ($user_folder_obj->check_folder_existence($folder_name,$user_id)) {
				return displayWarning('You have already been created this folder. Try a unique one');
			}
			
			if ($user_folder_obj->create($user_id,$folder_name)) {
				return displaySuccess('Folder Successfully Created.');
			}
			else{
				return displayWarning('Error With Server! Try again.');
			}
		}
		else{
			return displayWarning('No input made.');
		}
	}
?>
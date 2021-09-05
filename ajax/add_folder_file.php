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
		if (isset($_POST['folder_id'])) {

			$folder_id = $_POST['folder_id'];
		}

		else{
			$folder_id = 0;
		}

		$tile = $_POST['title'];
		$user_id = $_SESSION['cloud_user']['id'];

		$_file = $_FILES['file']; 


		$file_is_new = check_file_existence('../uploads', $_file);

		if ($file_is_new) {
			//Add new file

			//Add file to user's file

			//Add file to folder
		}

		else{
			//get file ID

			//add file to user_file

			//add file to folder
		}


		if ($user_folder_obj->check_folder_existence($folder_id,$user_id)) {
			return displayWarning('You have already been created this folder. Try a unique one');
		}
		
		if ($user_folder_obj->create($user_id,$folder_id)) {
			return displaySuccess('Folder Successfully Created.');
		}
		else{
			return displayWarning('Error With Server! Try again.');
		}
	}	
?>
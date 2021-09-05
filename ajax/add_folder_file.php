<?php 
	include_once '../core/session.class.php';
	include_once '../core/user_folders.class.php';
	include_once '../core/user_files.class.php';
	include_once '../core/users.class.php';
	include_once '../core/files.class.php';
	include_once '../core/core.function.php';
	echo create();
	function create()
	{
		$session = new Session();
		$user_folder_obj = new User_folders();
		$user_file_obj = new User_files();
		$user_obj = new Users();
		$file_obj = new files();
		if (isset($_POST['folder_id'])) {

			$folder_id = $_POST['folder_id'];
		}

		else{
			$folder_id = 0;
		}

		$title = $_POST['title'];
		$user_id = $_SESSION['cloud_user']['id'];

		$_file = $_FILES['file']; 


		$check_file_existence = check_file_existence('../uploads', $_file);
		$file_exist = $check_file_existence[0];
		$fileW = $check_file_existence[1];

		// var_dump($fileW); return;

		if (!$file_exist) {
			$file =  upload_file($_file,'../uploads/');
			$file_obj->add_file($file);
			$file_id = $file_obj->fetch_last_file()['id'];
		}

		else{
			$file_id = $file_obj->fetch_file($fileW)['id'];
		}

		$user_file_obj->add_user_file($user_id,$file_id,$title);

		$user_file_id = $user_file_obj->fetch_last_user_file($user_id)['id'];
		
		if ($user_folder_obj->add_folder_file($user_file_id,$folder_id)) {
			return displaySuccess('File Successfully Uploaded.');
		}
		else{
			return displayWarning('Error With Server! Try again.');
		}
	}	
?>
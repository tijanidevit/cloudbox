<?php

	function upload_file($file,$path)
	{
		$file_name = rand(1000,9999).'-'.$file['name'];
		$file_name = str_replace(' ', '-', $file_name);
		$file_tmp = $file['tmp_name'];

		move_uploaded_file($file_tmp, $path.$file_name);
		return $file_name;
	}

	function upload_two_files($file,$path){
		$files_d = [];
		for ($i=0; $i < count($file['name']) ; $i++) { 
			$file_name = rand(1000,9999).'-'.$file['name'][$i];
			$file_name = str_replace(' ', '-', $file_name);

			$file_tmp = $file['tmp_name'][$i];
			move_uploaded_file($file_tmp, $path.$file_name);
			array_push($files_d, $file_name);
			if ($i == 1) {
				return $files_d;
			}
		}
		return $files_d;
	}

	function getFileType($file){
		$file_names = explode('.', $file);
		$ext = $file_names[1];
		if ($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'svg') {
			return 'jpg';
		}
		if ($ext == 'mp4' || $ext == '3gp') {
			return 'mp4';
		}
		if ($ext != 'doc' && $ext != 'pdf' && $ext != 'ppt' && $ext != 'xlxs') {
			return 'doc';
		}

		return $ext;
	}

	function getRealFileType($file){
		$file_names = explode('.', $file);
		$ext = $file_names[1];
		echo $ext;
	}

	function getFileSize($path){
		$filesize = filesize($path); // bytes
		$filesize = round($filesize / 1024 / 1024, 1); // megabytes with 1 digit
		echo $filesize.'MB';
	}

	function getFolderFiles($path){
		$files = array_diff(scandir($path), array('.', '..'));
		return $files;
	}

	function check_file_existence($path, $_file){
		$existing_files = getFolderFiles($path);

		foreach ($existing_files as $file) {
			if (file_get_contents($path.'/'.$file) == file_get_contents($_file['tmp_name'])){
				return [true, $file];

			}
		}

		return [false,''];
	}

	function format_date($date){
		return date('F d, Y', strtotime($date));
	}
	function redirect($link){
		header("location:".$link);
	}
	function displayError($message)
	{
	    return '<div class="alert alert-danger">' . $message . '</div>';
	}

	function displayWarning($message)
	{
	    return '<div class="alert alert-warning">' . $message . '</div>';
	}

	function displaySuccess($message)
	{
	    return '<div class="alert alert-success">' . $message . '</div>';
	}
?>
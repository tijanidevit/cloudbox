<?php 
	include_once '../core/session.class.php';
	include_once '../core/patterns.class.php';
	include_once '../core/users.class.php';
	include_once '../core/core.function.php';
	echo add_pattern();
	function add_pattern()
	{
		$session = new Session();
		$pattern_obj = new Patterns();
		$user_obj = new Users();
		if (isset($_POST['patterns'])) {

			$user_id = $_SESSION['chit_user']['id'];
			$patterns = $_POST['patterns'];

			foreach ($patterns as $pattern) {
				$pattern_obj->add_pattern($user_id,$pattern);
			}

			$user_obj->update_pattern_set(1,$user_id);
			$user = $user_obj->fetch_user($user_id);
			$session->create_session('chit_user',$user);
			return 1;
		}
	}
?>
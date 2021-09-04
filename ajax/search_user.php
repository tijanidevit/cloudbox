<?php 
include_once '../core/session.class.php';
include_once '../core/users.class.php';
include_once '../core/chats.class.php';
include_once '../core/core.function.php';

$session = new Session();
$user_obj = new Users();
$chat_obj = new chats();

if (isset($_POST['q'])) {
	$q = $_POST['q'];

	if ($user_obj->check_username_existence($q)) {
		if ($_SESSION['chit_user']['username'] != $q) {
			$searched_user = $user_obj->fetch_user($q);

			$verify_chat_request = $chat_obj->verify_user_chat_request($sender_id,$receipient_id)['status'];

			if ($verify_chat_request) {
				echo '
					<li class="mt-1" id='.$searched_user['id'].'>
			            <div class="chat-box">
			                <div class="profile online"><img class="g" src="./uploads/images/'.$searched_user['image'].'" alt="Avatar" /></div>
			                <div class="details">
			                    <h3>'.$searched_user['fullname'].'</h3>
			                </div>
			                <div>
			                	<button id="send-request-btn" class="btn btn-sucess"> Send Chat Request </button>
			                </div>	
			            </div>
			        </li>
				';
			}
			else
			{
				echo '
					<li class="mt-1" id='.$searched_user['id'].'>
			            <div class="chat-box">
			                <div class="profile online"><img class="g" src="./uploads/images/'.$searched_user['image'].'" alt="Avatar" /></div>
			                <div class="details">
			                    <h3>'.$searched_user['fullname'].'</h3>
			                </div>
			                <div>
			                	<button id="send-message-btn" class="btn btn-sucess"> Message </button>
			                </div>	
			            </div>
			        </li>
				';
			}
		}
	}
	else{
		echo displayWarning('User not found');
	}
}

else{
	echo "No input made";
}
?>
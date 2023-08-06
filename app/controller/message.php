<?php
	include(ROOT_PATH . "/app/database/db.php");
    include(ROOT_PATH . "/app/messages/validate_messages.php");
	

	$table = 'message';

	//  $admin = selectAll($table, ['role' => 'admin']);
	$messages = selectAll($table);
	
	$errors = array();
    $name = '';
	$id = '';
	$email = '';
	$comment = '';

	if(isset($_POST['send-message']))
	{
		
		$errors = validateFeedback($_POST);

		if (count($errors) === 0) 
		{	
            
			unset($_POST['send-message']);
			$user_id = create($table, $_POST);
			$user = selectOne($table, ['id' => $user_id]);
            header('location:' . BASE_URL . '/index');
			exit();
			
		}else{
			$email = $_POST['email'];
			$comment = $_POST['message'];
		}

	}

	//Delete Feedback
	if (isset($_GET['del_id'])) {
		$count = delete($table, $_GET['del_id']);
		$_SESSION['message'] = 'User deleted succesfully';
		$_SESSION['type'] = 'success';
		header('location:' . BASE_URL . '/admin/admin');
		exit();
	}

	//fetch feedback info with id for edition 
	if (isset($_GET['id'])) {
		$user = selectOne($table, ['id' => $_GET['id']]);
		$id = $user['id'];
		// $avatar = $user['avatar'];
		$username = $user['username'];
		$email = $user['email'];
		// $role = $user['role'];
		// $bio = html_entity_decode($user['bio']);
	}
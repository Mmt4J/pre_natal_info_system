<?php
	include(ROOT_PATH . "/app/database/db.php");
	include(ROOT_PATH . "/app/messages/validate_user_login.php");

	$table = 'user';

	//  $admin = selectAll($table, ['role' => 'admin']);
	 $users = selectAll($table);
	
	$errors = array();
    $username = '';
	$id = '';
	$email = '';
	$password = '';
	$cpassword = '';

	function loginUser($user){
		$_SESSION['id'] = $user['id'];
		$_SESSION['name'] = $user['name'];
		$_SESSION['user'] = $user['user'];
		$_SESSION['message'] = 'You are now logged in';
		$_SESSION['type'] = 'success';
		header('location: ' . BASE_URL . '/user/chat.php');
		exit();
	}

	if(isset($_POST['register']))
	{
		
		$errors = validateUser($_POST);

		if (count($errors) === 0) 
		{	
            $_POST['name'] = $_POST['username'];
			unset($_POST['register'], $_POST['cpassword'], $_POST['username']);

			$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$user_id = create($table, $_POST);
			$user = selectOne($table, ['id' => $user_id]);
            $_SESSION['message'] = 'User created succesfully';
            $_SESSION['type'] = 'success';
            header('location:' . BASE_URL . '/user/login');
			exit();
			
		}else{
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
		}

	}

	if (isset($_POST['userLogin'])) {
		$errors = validateLogin($_POST);

		if (count($errors) === 0) {
			
			$user = selectOne($table, ['email' => $_POST['email']]);

			if ($user && password_verify($_POST['password'], $user['password'])) {
				
				//Login user
				loginUser($user);
			}else{
				array_push($errors, 'Wrong credentials');
			}
		}
		$email = $_POST['email']; 	
		$password = $_POST['password']; 	
	} 

		//Delete user
	if (isset($_GET['del_id'])) {
		$count = delete($table, $_GET['del_id']);
		$_SESSION['message'] = 'User deleted succesfully';
		$_SESSION['type'] = 'success';
		header('location:' . BASE_URL . '/admin/admin');
		exit();
	}

	//fetch admin info with id for edition 
	if (isset($_GET['id'])) {
		$user = selectOne($table, ['id' => $_GET['id']]);
		$id = $user['id'];
		// $avatar = $user['avatar'];
		$username = $user['username'];
		$email = $user['email'];
		// $role = $user['role'];
		// $bio = html_entity_decode($user['bio']);
	}

	if (isset($_POST['update-admin'])) {
		$errors = validateAdmin($_POST);
		$u_id = $_POST['id'];
		$confirmP =$_POST['passwordC'];
		unset($_POST['update-admin'], $_POST['passwordC'], $_POST['id']);
		if (count($errors) === 0) {

			// if (!empty($_FILES['avatar']['name'])) {
			// $image_name = time() . '_' . $_FILES['avatar']['name'];
			// $destination = ROOT_PATH . "/assets/image/" . $image_name;

			// $result = move_uploaded_file($_FILES['avatar']['tmp_name'], $destination);

			// 	if ($result) {
			// 		$_POST['avatar'] = $image_name;

			// 	}else{
			// 		unset($_POST['avatar']);
			// 	}
			// }
		
			$_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
			// $_POST['bio'] = htmlentities($_POST['bio']);
			$count = update($table, $u_id, $_POST);
			
			$_SESSION['message'] = 'User updated succesfully';
			$_SESSION['type'] = 'success';
			header('location:' . BASE_URL . '/admin/admin');
		}else{
				$id = $u_id;
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$passwordC = $confirmP;
				// $role = $_POST['role'];
				// $bio = $_POST['bio'];
			}

	}

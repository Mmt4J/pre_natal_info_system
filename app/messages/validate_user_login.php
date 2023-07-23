<?php 

	function validateUser($user)
	{	

		$errors = array();
		
		if (empty($user['username'])) {
			array_push($errors, 'Username is required');
		}

		if (empty($user['email'])) {
			array_push($errors, 'Email is required');
		}

		if (empty($user['password'])) {
			array_push($errors, 'Password is required');
		}

		if ($user['cpassword'] !== $user['password']) {
			array_push($errors, 'Password do not match');
		}
		
		return $errors;
	}

	function validateLogin($user)
	{	
		$errors = array();
		
		if (empty($user['email'])) {
			array_push($errors, 'Email is required');
		}
		
		if (empty($user['password'])) {
			array_push($errors, 'Password is required');
		}
		return $errors;
	}


	
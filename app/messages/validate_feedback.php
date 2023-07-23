<?php 

	function validateFeedback($feedback)
	{	

		$errors = array();
		
		if (empty($feedback['name'])) {
			array_push($errors, 'Username is required');
		}

		if (empty($feedback['email'])) {
			array_push($errors, 'Email is required');
		}

		if (empty($feedback['comment'])) {
			array_push($errors, 'Password is required');
		}
		
		return $errors;
	}
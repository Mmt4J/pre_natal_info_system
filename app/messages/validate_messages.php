<?php 

	function validateFeedback($feedback)
	{	

		$errors = array();
		
		if (empty($feedback['email'])) {
			array_push($errors, 'Email is required');
		}

		if (empty($feedback['message'])) {
			array_push($errors, 'Message is required');
		}
		
		return $errors;
	}
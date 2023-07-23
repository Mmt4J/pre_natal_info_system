<?php 

function validateQr($post)
	{
		$errors = array();

		if (empty($post['messages'])) {
			array_push($errors, 'Message is required');
		}

		if (empty($post['response'])) {
			array_push($errors, 'Response is required');
		}
		
		$existingPost = selectOne('chatbot', ['messages' => $post['messages']]);
		if ($existingPost) {
			
			if(isset($post['id'])){
				if ($existingPost['id'] != $post['id']) {
					array_push($errors, 'Message already exist');
				}
			}
			array_push($errors, 'Message already exist');
		}
		return $errors;
	}
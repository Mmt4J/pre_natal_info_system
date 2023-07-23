<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/messages/validate_qr.php");


// $categories = selectAll('category');

$table = 'chatbot';
$questionAndResponse = selectAll($table);

$errors  = array();
$id ="";
$message ="";
$response ="";


if (isset($_POST['add-message'])) {

	$errors = validateQr($_POST);
	
	if (count($errors) ===0) {
		unset($_POST['add-message']);
		$_POST['messages'] = htmlentities($_POST['messages']);
		$_POST['response'] = htmlentities($_POST['response']);

		//Create post
		$post_id = create($table, $_POST);
		$_SESSION['message'] = 'Q & R created succesfully';
		$_SESSION['type'] = 'success';
		header('location:' . BASE_URL . '/admin/qr');
		exit();
	}else{
		$message = $_POST['messages'];
		$response = $_POST['response'];
	}
	
}


//Fectch info for Q and R using id
if (isset($_GET['id'])) {
	$messages = selectOne($table, ['id' => $_GET['id']]);
	//dd($message);
	$id = $messages['id'];
	$message = $messages['messages'];
	$response = $messages['response'];
	
}

//Edit QR table
if (isset($_POST['update-qr'])) {
		
		$errors = validateQr($_POST);
	
	if (count($errors) ===  0) {
		$id = $_POST['id'];
		unset($_POST['update-qr'], $_POST['id']);
		$_POST['messages'] = htmlentities($_POST['messages']);
		$_POST['response'] = htmlentities($_POST['response']);
		
		//update post
		$qr_id = update($table, $id, $_POST);
		$_SESSION['message'] = 'Q ans R updated succesfully';
		$_SESSION['type'] = 'success';
		header('location:' . BASE_URL . '/admin/qr');
		eixit();

	}else{

		$id = $_POST['id'];
		$message = $_POST['messages'];
		$response = $_POST['response'];
	}
	
}

if (isset($_GET['del_id'])) {
	$count = delete($table, $_GET['del_id']);
	$_SESSION['message'] = 'Q and R deleted succesfully';
	$_SESSION['type'] = 'success';
	header('location:' . BASE_URL . '/admin/qr');
	eixit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
	$published = $_GET['published'];
	$p_id = $_GET['p_id'];
	//...Update published
	$count = update($table, $p_id, ['published' => $published]);

	$_SESSION['message'] = 'Post published state changed';
	$_SESSION['type'] = 'success';
	header('location:' . BASE_URL . '/admin/posts/index');
	eixit();
}
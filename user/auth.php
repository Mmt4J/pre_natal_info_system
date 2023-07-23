<?php
if(!isset($_SESSION['name'])){ 
    session_destroy();
    header('location: ' . BASE_URL . '/index.php');
}
<?php
if(!isset($_SESSION['username'])){ 
    session_destroy();
    header('location: ' . BASE_URL . '/index.php');
}
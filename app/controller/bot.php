<?php

require ('../database/connect.php');

$user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);
$query = "SELECT * FROM chatbot WHERE messages LIKE '%$user_messages%'";
$runQuery = mysqli_query($conn, $query);

if(mysqli_num_rows($runQuery) > 0){

    $result = mysqli_fetch_assoc($runQuery);
    echo $result['response'];

}else{

    echo "Sorry!" . " <br/> " . "I dan't unsderstand you." . " <br/> " . "Talk to one of the <a href='#'>doctor</a>"; 

}


?>
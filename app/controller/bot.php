<?php

require ('../database/connect.php');

$user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);
$query = "SELECT * FROM chatbot";
$runQuery = mysqli_query($conn, $query);

if(mysqli_num_rows($runQuery) > 0){

    while($result = mysqli_fetch_assoc($runQuery)){
       
        $message = $result['messages'];
        similar_text($message, $user_messages, $percentage);
        if($percentage > 80){
            echo $result['response'];
            break;
        }
          
    } 

}else{

    echo "Sorry!" . " <br/> " . "I dan't unsderstand you." . " <br/> " . "Talk to one of the <a href='#'>doctor</a>"; 

}


?>
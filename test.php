<?php

$var1 = "What is you name";

require ('app/database/connect.php');

$query = "SELECT * FROM chatbot";
$runQuery = mysqli_query($conn, $query);

if(mysqli_num_rows($runQuery) > 0){

    while($row = mysqli_fetch_assoc($runQuery)){
       
        $message = $row['messages'];
        similar_text($message, $var1, $percentage);
        if($percentage > 80){
            echo $row['response'];
            break;
        }
        
    }

}

?>
















?>
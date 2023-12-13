<?php 

    $server_name = 'localhost';
    $user_name = 'root';
    $pass = '';
    $db = 'real_state';

    $conn = mysqli_connect($server_name,$user_name,$pass,$db);
    if($conn){
        echo "Data Base Connected !";
    }


?>
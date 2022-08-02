<?php

    $host = 'localhost:7777';
    $user = 'root';
    $pass = '';
    $db_name = 'heist_store';

    $conn = new mySQLi($host, $user, $pass, $db_name);
    if($conn->connect_error){
        die('Database Connection Error: '. $conn->connect_error);
    }
?>
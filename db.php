<?php

    $username = 'root';
    $password = '';
    $hostname = 'localhost';
    $database = 'app1';

    $db = mysqli_connect($hostname,$username,$password,$database);

    if ($db->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
      
    }
?>
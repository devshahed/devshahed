<?php
    $host = "localhost";
    $username = "root";
    $password = "1122";
    $db_name = "devshahed";

    $conn = new mysqli($host, $username, $password, $db_name);

    if($conn->connect_error){
        die("Connection failed due to: " . $conn->connect_error);
    }
?>
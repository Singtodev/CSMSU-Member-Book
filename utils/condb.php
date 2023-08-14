<?php
    $host = "localhost";
    $user = "demo";
    $pass = "abc123";
    $dbname = "book_member";
    $condb = mysqli_connect($host,$user,$pass,$dbname);

    if($condb->connect_error){
        die("Connect failed" . $conn->connect_error);
    }




?>
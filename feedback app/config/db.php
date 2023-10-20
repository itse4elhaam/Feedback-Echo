<?php
// we can use pdo in production         

    define('DB_HOST', '');
    define('DB_USER', '');
    define('DB_PASS', '');
    define('DB_NAME', '');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn->connect_error){
        die('Connection failed' . $conn->connect_error);
    }

    // echo 'CONNECTED';

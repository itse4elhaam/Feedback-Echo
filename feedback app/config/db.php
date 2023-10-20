<?php
// we can use pdo in production         

    define('DB_HOST', 'localhost');
    define('DB_USER', 'elhaam');
    define('DB_PASS', 'sin100=100');
    define('DB_NAME', 'feedback app');

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn->connect_error){
        die('Connection failed' . $conn->connect_error);
    }

    // echo 'CONNECTED';

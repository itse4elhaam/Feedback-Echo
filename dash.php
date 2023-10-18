<?php
    session_start();

    if(isset($_SESSION['username'])){
        echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";
    }
    else{
        echo "Welcome guest";
    }
?>

<a href="logout.php">logout</a>
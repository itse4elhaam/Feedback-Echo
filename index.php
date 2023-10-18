<?php
    session_start();

    if(isset($_POST['submit'])){
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            $password = $_POST['password'];

    if ($username === 'john' & $password == 'password') {
        $_SESSION['username'] = $username;
        // echo $_SESSION['username'];
        header('Location: /practice app/dash.php');
    } else {
        echo "wrong";
    }
    }
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password">
    <br>
    <input name="submit" type="submit" value="Submit">
</form>
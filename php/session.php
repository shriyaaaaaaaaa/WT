<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session php</title>
</head>
<body>
    <?php
    //start the session
    session_start();
    //set session variable
    $_SESSION['username'] = 'admin';
    $_SESSION['email']="dasfnj@gmail.com";
    echo "session variables are set! <br>";

    //getting session variables
    echo "username is ".$_SESSION["username"]."<br>";
    echo "email is ".$_SESSION["email"]."<br>";

    //remove all session varibales
    session_unset();
    //destroy the session
    session_destroy();
    ?>
</body>
</html>
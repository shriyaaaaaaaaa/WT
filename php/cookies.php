<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies php</title>
</head>
<body>
    <?php
    $cookie_name="user";
    $cookie_value="John Doe";
    setcookie($cookie_name, $cookie_value, time()+ (86400*30), "/"); //creating cookie that expires in 86400sec=1day so 30 days. "/" path ho include garehuncha

    if(!isset($_COOKIE[$cookie_name])){ //IF COOKIE is not set. $_COOKIE is global variable
            echo "cookie named " .$cookie_name. " is not set! <br>";
    }
    else{
          echo "cookie " .$cookie_name. " is set. <br>";
          echo "value of cookie is ".$_COOKIE[$cookie_name]."<br>"; //if you use cookie_value it gives default johndoe even if cookie is changed
    }

    // Delete the cookie by setting its expiration date in the past
    if(isset($_COOKIE[$cookie_name])) {
        // Delete cookie
        setcookie($cookie_name, "", time() - 3600, "/"); // expire one hour ago
        echo "Cookie '$cookie_name' is deleted.";
    } else {
        echo "Cookie '$cookie_name' does not exist or is already deleted.";
    }
    ?>
</body>
</html>
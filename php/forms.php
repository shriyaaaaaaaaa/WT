<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php forms</title>
</head>
<body>
    <!-- $_GET and $_POST 
     info sent from a form with get method is visible to everyone. it has limits to info that can be sent which is about 2000 char
    info sent from a form with post method is invisible to everyone and no limits to info that can be sent. -->

   <form name="loginform" method="POST" action="./formsubmit.php">
    <div>
        username: <input type="text" name="username" id="username">
        password: <input type="password" name="password" id="password">
    </div>
    <br>
    <input type="submit" name="login" value="login">
   </form>
   <?php
   if("POST"==$_SERVER["REQUEST_METHOD"]){ //checks if the request method is POST (i.e., the form has been submitted). If it is, it retrieves the username and password values from the $_POST superglobal array.
    $username=$_POST["username"];   //The $_POST array contains all the data submitted through the HTTP POST method.
    $password=$_POST["password"];
    echo "hello, ".$_POST["username"]; //. "and" .$_POST["password"];
   }
   ?>


</body>
</html>
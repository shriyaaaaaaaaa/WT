<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <!-- HTML form to input name -->
<form method="post" action="">
    Name: <input type="text" name="name">
    Email: <input type="email" name="email">
    <input type="submit" value="Submit">
</form>

    <?php

//1.text validation: use preg_match()=searches string for pattern, returns true if pattern exists otherwise false. only letters and whitespacse allowed.
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "name" field is set and not empty
    if (isset($_POST["name"]) && !empty(trim($_POST["name"]))) {
        $name = trim($_POST["name"]); // Trim the input to remove unnecessary whitespace

        // Validate the name: only letters and whitespace allowed
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "Only letters and whitespace are allowed!";
        } 
        else {
            echo "The name is " . $name;
        }
    } 
    else {
        echo "Please enter a name.";
    }
    echo "<br>";
}


//2.email validation:FILTER_VALIDATE_EMAIL
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //check email field is set and not empty
    if (isset($_POST["email"]) && !empty($_POST["name"])){
        $email=($_POST["email"]);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "$email is valid email";
        }
        else{
            echo "$email is not valid email";
        }
    }
    else{
        echo "Please enter email";
    }
}


//3. for validating number AND integer use FILTER_VALIDATE_FLOAT and FILTER_VALIDATE_INT respectively.
?>

</body>
</html>
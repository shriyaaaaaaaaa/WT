<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create table in database</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydatabase";

    $conn=mysqli_connect($servername,$username,$password,$dbname);

    if(! $conn){
        die("connection failed: " . mysqli_connect_error());
    }

    $sql="CREATE TABLE student(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,   /*id: an auto-incrementing primary key.*/
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        phone VARCHAR(20),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  /*a timestamp field that defaults to the current timestamp and updates on any changes.*/
        )";

        if(mysqli_query($conn,$sql)){
            echo "table created successfully";
        }
        else{
            echo "error creating table: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
</body>
</html>


<!--inserting single data

$sql="INSERT INTO STUDENTS(firstname,lastname,email)
VALUES('John','Doe','john@example.com')";-->
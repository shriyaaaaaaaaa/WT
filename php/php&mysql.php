<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL and PHP</title>
</head>
<body>
    <?php
    //1.MySQLi(object-oriented): creating connection using object-oriented approach
    $servername = "localhost";
    $username = "root";
    $password=""; //empty string, not even space is allowed. since localhost so password not needed.
    $dbname = "mydb";

    //creating connection
    $conn=new mysqli($servername, $username, $password,$dbname); //new mysqli() takes the parameter and creates the connection.
    //The connection is stored in the $conn variable.

    //checking the connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error); //connect_error returns error if there is any error in process of being connected.
    }
    echo "connected successfully";

    // Close the connection when you're done
    $conn->close();

    //2.MySQLi(procedural approach): 
    $servername = "localhost";
    $username = "root";
    $password="";

    //creating a connection
    $conn = mysqli_connect($servername, $username, $password); //mysqli_connect(): if opens a new connection to MySQL server.

    //checking a connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); //shows the type of error occured.
    }
    echo "connected successfully";

    //close the  connection
    mysqli_close($conn);

    //3.PDO. creating database using procedural approach
    $servername="localhost";
    $username="root";
    $password="";

    //creating a connection
    $conn=mysqli_connect($servername,$username,$passsword);

    //check connetion
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }

    //create database
    $sql="CREATE DATABASE webtech"; //db_name
    if(mysqli_query($conn,$sql)){ //performs query against db
        echo "database created";
    }
    else{
        echo "database not created" .mysqli_error($conn);
    }
    mysqli_close($conn);


    //a. inserting multiple data with mysqli_multi_query() function
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="webtech";

    //creating a connection
    $conn=mysqli_connect($servername,$username,$passsword,$dbname);

    //check connetion
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    //inserting data
    $sql="INSERT INTO student (name,rollno,marks)
            VALUES ('Rahul','13','300');";

    $sql .= "INSERT INTO student (name,rollno,marks)   /* . yaad gara*/
            VALUES ('sahil','14','300');";


    if(mysqli_multi_query($conn,$sql)){ 
        echo "records inserted successfully";
    }
    else{
        echo "erorr!" .$sql. "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
  
    //note if only one data insert use mysqli_query.

    ?>

    
</body>
</html>
<!--2079(3)-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data in Database Using Form</title>
</head>
<body>
    <?php
    if (!empty($_POST)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "web"; // Ensure this database exists

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieving form data
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $sex = $_POST['sex']; // Fixed variable, previously $age was duplicated

        // SQL query to insert data
        $sql = "INSERT INTO webb (name, dob, age, sex)
         VALUES ('$name', '$dob', '$age', '$sex')";

        // Execute the query
        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }

        // Close the connection
        mysqli_close($conn);
    }
    ?>

    <h3>Fill out the form, please</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!--The form uses the $_SERVER['PHP_SELF'] method to submit the form data back to the same script for processing.-->
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">    <!--By using echo isset thingy you ensure that after form submission, the fields remain filled with the previously entered values-->
        <br>

        <label>Date of Birth:</label>
        <input type="date" name="dob" value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : ''; ?>">
        <br>

        <label>Age:</label>
        <input type="number" name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>">
        <br>

        <label>Gender:</label>
        <input type="radio" name="sex" value="Male" <?php 
        if (isset($_POST['sex']) && $_POST['sex'] == "Male") echo 'checked'; ?>> Male
        <input type="radio" name="sex" value="Female" <?php 
        if (isset($_POST['sex']) && $_POST['sex'] == "Female") echo 'checked'; ?>> Female
        <br>

        <input type="submit" value="Send">
        <input type="reset" value="Clear">
    </form>

</body>
</html>


<!--ensure webb table exists
    CREATE TABLE webb (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    dob DATE,
    age INT,
    sex ENUM('Male', 'Female')
);

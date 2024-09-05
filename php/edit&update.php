

!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>
    <h2>Edit Record</h2>

    <?php if (isset($name)) : ?>
    <form action="update.php" method="post">
        <!-- Hidden field to pass the ID -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" value="<?php echo $age; ?>" required><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male" <?php echo ($gender == 'Male') ? 'checked' : ''; ?>> Male
        <input type="radio" name="gender" value="Female" <?php echo ($gender == 'Female') ? 'checked' : ''; ?>> Female
        <br>

        <input type="submit" value="Update">
    </form>
    <?php endif; ?>
</body>
</html>

<!--edit.php-->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the ID is provided via GET request
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Get the details of the record with the provided ID
    $sql = "SELECT Id, name, age, gender FROM personal_details WHERE Id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Store the current values for the form
        $name = $row['name'];
        $age = $row['age'];
        $gender = $row['gender'];
    } else {
        echo "No record found!";
    }
} else {
    echo "Invalid ID!";
}

mysqli_close($conn);
?>






<!--update php-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form data is submitted
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    // Update the record in the database
    $sql = "UPDATE personal_details SET name='$name', age=$age, gender='$gender' WHERE Id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid data!";
}

mysqli_close($conn);
?>

<!-- Redirect back to the listing page after update -->
<a href="your_listing_page.php">Back to Records</a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search Catalog</title>
</head>
<body>
    <h3>Book Search Catalog</h3>
    <form action="insert_book.php" method="post">
        <label for="search_type">Search Type:</label>
        <select name="search_type" id="search_type">
            <option value="title">Title</option>
            <option value="author">Author</option>
            <option value="genre">Genre</option>
        </select>
        <br><br>

        <label for="keyword">Search Keyword:</label>
        <input type="text" name="keyword" id="keyword" required>
        <br><br>

        <label>Downloadable:</label>
        <input type="radio" name="downloadable" value="1" required> Yes
        <input type="radio" name="downloadable" value="0" required> No
        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<!--insert_book.php-->
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieving form data
$search_type = $_POST['search_type'];
$keyword = $_POST['keyword'];
$downloadable = $_POST['downloadable'];

// Insert data into the database
$sql = "INSERT INTO book_catalog (search_type, keyword, downloadable) 
        VALUES ('$search_type', '$keyword', '$downloadable')";

if (mysqli_query($conn, $sql)) {
    // Redirect to the page where we will display the stored data
    header("Location: view_books.php");
    exit();
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>


<!--display_data.php-->
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to select data
$sql = "SELECT * FROM book_catalog";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Book Catalog</title>
</head>
<body>
    <h3>Stored Books Data</h3>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Search Type</th>
                <th>Keyword</th>
                <th>Downloadable</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                // Fetch each row and display it in the table
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['search_type'] . "</td>";
                    echo "<td>" . $row['keyword'] . "</td>";
                    echo "<td>" . ($row['downloadable'] ? 'Yes' : 'No') . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // Close the connection
    mysqli_close($conn);
    ?>
</body>
</html>


<!--database setup-->
CREATE DATABASE IF NOT EXISTS library;
USE library;

CREATE TABLE IF NOT EXISTS book_catalog (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    search_type VARCHAR(50) NOT NULL,
    keyword VARCHAR(100) NOT NULL,
    downloadable TINYINT(1) NOT NULL
);


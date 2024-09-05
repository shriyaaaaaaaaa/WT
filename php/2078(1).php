<?php
// Define a multidimensional array for products
$products = array(
    array(
        "pcode" => "P001",
        "pname" => "Laptop",
        "price" => 1000
    ),
    array(
        "pcode" => "P002",
        "pname" => "Smartphone",
        "price" => 700
    ),
    array(
        "pcode" => "P003",
        "pname" => "Tablet",
        "price" => 400
    )
);
?>



<!--html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3>Product Details</h3>
    <table>
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Iterate over the products array to display in a table
            foreach ($products as $product) {
                echo "<tr>";
                echo "<td>" . $product['pcode'] . "</td>";
                echo "<td>" . $product['pname'] . "</td>";
                echo "<td>$" . $product['price'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

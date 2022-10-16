<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "javajam";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Testing if database exists with a random query. 
/*
$sql = "SELECT * from javajam.products";

if (!mysqli_query($conn, $sql)) { //If the DB doesn't exist, we need to create it. Else, go to line 68 and close the DB. 

	// If DB doesn't exist, we create it 

	$sql = "CREATE DATABASE IF NOT EXISTS javajam";

	if (!mysqli_query($conn, $sql)) {
		echo "Error creating database: " . mysqli_error($conn);
		mysqli_close($conn);
	}

	//Switch to javajam database.
*/
$sql = "use javajam";
if (!mysqli_query($conn, $sql)) {
	echo "Failed to switch tables, check use statement.";
	mysqli_close($conn);
}

//Add some tables to the database
$sql = "CREATE TABLE IF NOT EXISTS products (
productID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
productName VARCHAR(30) NOT NULL,
productPrice DOUBLE NOT NULL
)";

if (!mysqli_query($conn, $sql)) {
	echo "Error creating Products table: " . mysqli_error($conn);
	mysqli_close($conn);
}

//Fill tables with data

$sql = "INSERT INTO products (productID, productName, productPrice)
VALUES (1, 'endless_cup', 2.00);";
$sql .= "INSERT INTO products (productID, productName, productPrice)
VALUES (2, 'single_cafeaulait', 3.00);";
$sql .= "INSERT INTO products (productID, productName, productPrice)
VALUES (3, 'double_cafeaulait', 4.00);";
$sql .= "INSERT INTO products (productID, productName, productPrice)
VALUES (4, 'single_cappu', 4.75);";
$sql .= "INSERT INTO products (productID, productName, productPrice)
VALUES (5, 'double_cappu', 5.75);";

if (!mysqli_multi_query($conn, $sql)) {
	echo "Failed to fill tables with data: " . mysqli_error($conn);
	mysqli_close($conn);
}
mysqli_close($conn);
?>
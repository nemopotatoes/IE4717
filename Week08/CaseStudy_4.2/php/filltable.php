<?php
function insert_table_row($id) {
	$conn = mysqli_connect('localhost', 'root', '', 'javajam');

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT productPrice FROM products WHERE productID = $id;";
	if ($result = mysqli_query($conn, $sql)) {
		$row = mysqli_fetch_row($result);
		echo number_format((float)$row[0], 2, '.', '');
	} else {
		echo "Failed fetching data from database.";
	}
	mysqli_close($conn);
}
?>
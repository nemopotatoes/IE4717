<?php
function insertCatSales($id) {
    // connection 
    $conn = mysqli_connect("localhost", "root", "", "javajam");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return;
    }
    $sql = "SELECT totalSales FROM sales WHERE productID = $id;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get total sales: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		echo number_format((float)$row[0], 2, '.', '');
    }
    mysqli_close($conn);
}

function insertSubTotal($id) {
    // connection 
    $conn = mysqli_connect("localhost", "root", "", "javajam");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return;
    }
}
?>

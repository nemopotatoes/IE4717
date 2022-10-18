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

function insertCatSubTotal($id) {
    // connection 
    $conn = mysqli_connect("localhost", "root", "", "javajam");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return;
    }
    $nextid = $id+1;
    $sql = "SELECT totalSales FROM sales WHERE productID = $id;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get total sales: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row1 = number_format((float)$row[0], 2, '.', '');
    }
    $sql = "SELECT totalSales FROM sales WHERE productID = $nextid;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get total sales: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row2 = number_format((float)$row[0], 2, '.', '');
    }
    $sum = $row1 + $row2;
    // echo number_float((float)$sum[0], 2, '.', ''); 
    echo $sum;
    mysqli_close($conn);
}

function insertCatTotal() {
    // connection 
    $conn = mysqli_connect("localhost", "root", "", "javajam");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return;
    }

    $sql = "SELECT totalSales FROM sales WHERE productID = 1;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get total sales: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row1 = number_format((float)$row[0], 2, '.', '');
    }

    $sql = "SELECT totalSales FROM sales WHERE productID = 2;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get total sales: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row2 = number_format((float)$row[0], 2, '.', '');
    }

    $sql = "SELECT totalSales FROM sales WHERE productID = 3;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get total sales: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row3 = number_format((float)$row[0], 2, '.', '');
    }

    $sql = "SELECT totalSales FROM sales WHERE productID = 4;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get total sales: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row4 = number_format((float)$row[0], 2, '.', '');
    }

    $sql = "SELECT totalSales FROM sales WHERE productID = 5;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get total sales: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row5 = number_format((float)$row[0], 2, '.', '');
    }

    $sum = $row1 + $row2 + $row3 + $row4 + $row5;

    echo $sum;
    mysqli_close($conn);
}

?>

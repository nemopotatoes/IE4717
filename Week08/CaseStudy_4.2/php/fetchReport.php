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

function productQty($id) {
    // connection 
    $conn = mysqli_connect("localhost", "root", "", "javajam");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return;
    }
    $sql = "SELECT sum(qty) FROM orders WHERE productID = $id;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get sales quantity: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		echo number_format((int)$row[0]);
    }
	// echo $row;
    mysqli_close($conn);
}

function subTotal_total() {
    // connection 
    $conn = mysqli_connect("localhost", "root", "", "javajam");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return;
    }
    $sql = "SELECT sum(qty) FROM orders WHERE productID = 1;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get sales quantity: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row1 = number_format((int)$row[0]);
    }
    $sql = "SELECT sum(qty) FROM orders WHERE productID = 2;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get sales quantity: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row2 = number_format((int)$row[0]);
    }
    $sql = "SELECT sum(qty) FROM orders WHERE productID = 3;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get sales quantity: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row3 = number_format((int)$row[0]);
    }
    $sql = "SELECT sum(qty) FROM orders WHERE productID = 4;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get sales quantity: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row4 = number_format((int)$row[0]);
    }
    $sql = "SELECT sum(qty) FROM orders WHERE productID = 5;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get sales quantity: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row5 = number_format((int)$row[0]);
    }
    $sum = $row1 + $row2 + $row3 + $row4 + $row5;
    echo $sum;
}

function sumTotal($first, $second) {
    // connection 
    $conn = mysqli_connect("localhost", "root", "", "javajam");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        return;
    }
    $sql = "SELECT sum(qty) FROM orders WHERE productID = $first;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get sales quantity: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row1 = number_format((int)$row[0]);
    }
    $sql = "SELECT sum(qty) FROM orders WHERE productID = $second;";
    if (!$result = mysqli_query($conn, $sql)) {
        echo "Failed to get sales quantity: " . mysqli_error($conn);
    } else {
        $row = mysqli_fetch_row($result);
		$row2 = number_format((int)$row[0]);
    }
    $sum = $row1 + $row2;
    echo $sum;
    mysqli_close($conn);
}

function bestSelling() {
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

    $best = $row1;
    $bestname = "Just Java";
    
    if ($row2 == $best) { $bestname .= ", Cafe Au Lait Single";}
    elseif ($row2 > $best) { $best = $row2; $bestname = "Cafe Au Lait Single";}

    if ($row3 == $best) { $bestname .= ", Cafe Au Lait Double";}
    elseif ($row3 > $best) { $best = $row3; $bestname = "Cafe Au Lait Double";}

    if ($row4 == $best) { $bestname .= ", Iced Cappuccino Single";}
    elseif ($row4 > $best) { $best = $row4; $bestname = "Iced Cappuccino Single";}

    if ($row5 == $best) { $bestname .= ", Iced Cappuccino Double";}
    elseif ($row5 > $best) { $best = $row5; $bestname = "Iced Cappuccino Double";}

    echo $bestname;
    mysqli_close($conn);
}

?>


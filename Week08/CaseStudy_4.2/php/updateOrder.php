<?php 
$conn = mysqli_connect('localhost', 'root', '', 'javajam');

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}

//Declare variables 
$justjavaqty=$_POST['qtyJustJava'];
$cafeqty=$_POST['qtyCafeAuLait'];
$cappuqty=$_POST['qtyCappuccino'];
$radioCafe=$_POST['cafeaulait'];
$radioCap=$_POST['cappuccino'];

if($justjavaqty == 0 && $cafeqty == 0 && $cappuqty == 0) {
	echo "Select products you'd like to order before submitting.<br>";
	return;
}

$sql = "SELECT productPrice FROM products WHERE productID = 1;";
if ($result = mysqli_query($conn, $sql)) {
	$sql = "SELECT totalSales FROM sales WHERE productID = 1;";
	if ($result = mysqli_query($conn, $sql)) {
		updateSalesTable(getCurrentTotals(1) + ($justjavaqty * getCurrentPrice(1)), 1);
		$javaTotal = $justjavaqty * getCurrentPrice(1);
	}
}
$cafeTotal = 0.0;
$cappuTotal = 0.0;

//Insert new orders into database and update total_sales
if ($justjavaqty > 0) {
	updateOrderTable($justjavaqty, 1);
}
if ($cafeqty > 0) {
	if ($radioCafe == "2.00") {
		updateOrderTable($cafeqty, 2);
		updateSalesTable(getCurrentTotals(2) + ($cafeqty * getCurrentPrice(2)), 2);
		$cafeTotal = $cafeqty * getCurrentPrice(2);
	} elseif($radioCafe == "3.00") {
		updateOrderTable($cafeqty, 3);
		updateSalesTable(getCurrentTotals(3) + ($cafeqty * getCurrentPrice(3)), 3);
		$cafeTotal = $cafeqty * getCurrentPrice(3);
	}
}
if ($cappuqty > 0) {
	if ($radioCap == "4.75") {
		updateOrderTable($cappuqty, 4);
		updateSalesTable(getCurrentTotals(4) + ($cappuqty * getCurrentPrice(4)), 4);
		$cappuccinoTotal = $cappuqty * getCurrentPrice(4);
	} elseif($radioCap == "5.75") {
		updateOrderTable($cappuqty, 5);
		updateSalesTable(getCurrentTotals(5) + ($cappuqty * getCurrentPrice(5)), 5);
		$cappuTotal = $cappuqty * getCurrentPrice(5);
	}
}
mysqli_close($conn);
$totalOrder = "Order placed for:<br>";
if ($justjavaqty > 0){
	$totalOrder .= "$justjavaqty Regular for $$javaTotal<br>";
}
if ($cafeqty > 0) {
	$totalOrder .= "$cafeqty Cafe au Lait for $$cafeTotal<br>";
}
if ($cappuqty > 0) {
	$totalOrder .= "$cappuqty Cappuccino for $$cappuTotal<br><br>";
}
echo $totalOrder;
$menuLink = "<a href='../../menu.php'>Click here</a>";
echo "Redirecting you to Menu page in 10 seconds. $menuLink to return to menu page now.";
header("refresh:10;url=../../menu.php");
return;

function updateOrderTable($qty, $productID) {
	$conn = mysqli_connect("localhost", "root", "", "javajam");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
 	$sql = "INSERT INTO orders (orderID, productID, qty) VALUES (NULL, $productID, $qty);";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update database: " . mysqli_error($conn);
		mysqli_close($conn);
	}
}
function updateSalesTable($totalSales, $productID) {
	$conn = mysqli_connect("localhost", "root", "", "javajam");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}

	$sql = "UPDATE sales SET totalSales = $totalSales WHERE productID = $productID;";
	if (!mysqli_query($conn, $sql)) {
		echo "Failed to update value for product id $productID : " . mysqli_error($conn);
	}
}

function getCurrentPrice($productID) {
	$conn = mysqli_connect("localhost", "root", "", "javajam");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "SELECT productPrice FROM products WHERE productID = $productID;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get price for product $productID : " . mysqli_error($conn);
	}
	$result = mysqli_fetch_row($result);
	return $result[0];
}

function getCurrentTotals($productID) {
	$conn = mysqli_connect("localhost", "root", "", "javajam");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}
	$sql = "SELECT totalSales FROM sales WHERE productID = $productID;";
	if (!$result = mysqli_query($conn, $sql)) {
		echo "Failed to get totals for product $productID : " . mysqli_error($conn);
	}
	$result = mysqli_fetch_row($result);
	return $result[0];
}

?>

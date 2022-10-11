<?php 
$conn = mysqli_connect('localhost', 'root', '', 'javajam');

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}
//Declare variables 
$justjava=$_POST['endless-just-java'];
$singleCafe=$_POST['single-cafeaulait'];
$doubleCafe=$_POST['double-cafeaulait'];
$singleCap=$_POST['single-cappuccino'];
$doubleCap=$_POST['double-cappuccino'];

for($i = 1; $i <= 5; $i++) {
	if ($i == 1) {
		$sql = "UPDATE products SET productPrice = $justjava WHERE productID = $i";
		mysqli_query($conn, $sql);
	} elseif ($i == 2) {
		$sql = "UPDATE products SET productPrice = $singleCafe WHERE productID = $i";
		mysqli_query($conn, $sql);
	} elseif ($i == 3) {
		$sql = "UPDATE products SET productPrice = $doubleCafe WHERE productID = $i";
		mysqli_query($conn, $sql);
	} elseif ($i == 4) {
		$sql = "UPDATE products SET productPrice = $singleCap WHERE productID = $i";
		mysqli_query($conn, $sql);
	} elseif ($i == 5) {
		$sql = "UPDATE products SET productPrice = $doubleCap WHERE productID = $i";
		mysqli_query($conn, $sql);
	}
}
mysqli_close($conn);
header("refresh:0;url=../../updateprice.php");

?>
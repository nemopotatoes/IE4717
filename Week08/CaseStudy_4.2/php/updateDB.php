<?php 
$conn = mysqli_connect('localhost', 'root', '', 'javajam');

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}
//Declare variables 
$justjava=$_POST['endless-just-java'];
$justjavacheck=$_POST['justjavacheck'];
$singleCafe=$_POST['single-cafeaulait'];
$doubleCafe=$_POST['double-cafeaulait'];
$cafecheck=$_POST['cafecheck'];
$singleCap=$_POST['single-cappuccino'];
$doubleCap=$_POST['double-cappuccino'];
$capcheck=$_POST['cappuccinocheck'];

for($i = 1; $i <= 5; $i++) {
	if ($i == 1 && $justjava && $justjavacheck) {
		$sql = "UPDATE products SET productPrice = $justjava WHERE productID = $i";
		mysqli_query($conn, $sql);
	} else if ($i == 2 && $singleCafe && $cafecheck) {
		$sql = "UPDATE products SET productPrice = $singleCafe WHERE productID = $i";
		mysqli_query($conn, $sql);
	} else if ($i == 3 && $doubleCafe && $cafecheck) {
		$sql = "UPDATE products SET productPrice = $doubleCafe WHERE productID = $i";
		mysqli_query($conn, $sql);
	} else if ($i == 4 && $singleCap && $capcheck) {
		$sql = "UPDATE products SET productPrice = $singleCap WHERE productID = $i";
		mysqli_query($conn, $sql);
	} else if ($i == 5 && $doubleCap && $capcheck) {
		$sql = "UPDATE products SET productPrice = $doubleCap WHERE productID = $i";
		mysqli_query($conn, $sql);
	}
}
mysqli_close($conn);
header("refresh:0;url=../../CaseStudy_4/updateprice.php");

?>
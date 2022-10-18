<?php
include "php/fetchReport.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylesheet.css">
	<script defer src="./js/orderprice.js"></script>
</head>
<body>
<div class="wrapper">
	<header>
	</header>
	<div id="nav">
		<nav>
			<ul> 
				<b>
					<li><a href="index.html">Home</a></li>
					<li><a href="menu.php">Menu</a></li>
					<li><a href="music.html">Music</a></li>
					<li><a href="jobs.html">Jobs</a></li>
					<br><br>
					<li><u>Admin</u></li>
					<li><a href="updateprice.php">Prices</a></li>
					<li><a href="report.php">Report</a></li>
				</b>
			</ul>
		</nav>
	</div>
	<div class="content">
		<h1>Coffee at JavaJam</h1>
			<table class="productReport">
				<tr>
					<td><b>Product</b></td>
					<td><b><i>Endless Cup</i></b></td>
					<td><b><i>Single</i></b></td>
					<td><b><i>Double</i></b></td>
					<td><b>Subtotal</b></td>
                </tr>
                <tr>
                    <td><b>Just Java</b></td>
                    <td><?php productQty(1) ?></td>
                    <td>/</td>
                    <td>/</td>
                    <td><?php productQty(1) ?></td>
				<tr>
					<td><b>Cafe au Lait</b></td>
                    <td>/</td>
                    <td><?php productQty(2) ?></td>
                    <td><?php productQty(3) ?></td>
                    <td><?php sumTotal(2, 3) ?></td>
				</tr>
                <tr>
                    <td><b>Iced Cappuccino</b></td>
                    <td>/</td>
                    <td><?php productQty(4) ?></td>
                    <td><?php productQty(5) ?></td>
                    <td><?php sumTotal(4, 5) ?></td>
				</tr>
				<tr>
                    <td><b>Total</b></td>
                    <td><?php productQty(1) ?></td>
                    <td><?php sumTotal(2, 4) ?></td>
                    <td><?php sumTotal(3, 5) ?></td>
                    <td><?php subTotal_total() ?></td>
				</tr>
			</table>
			<br><br>
			<h3>Best Selling Product(s):</h3>
	</div>
	<footer>
		Copyright &copy; 2014 JavaJam Coffeee House<br>
		<a href="mailto:jessie@goh.com">jessie@goh.com</a>
	</footer>
</div>
	
</body>
</html>
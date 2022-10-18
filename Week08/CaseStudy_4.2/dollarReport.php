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
					<td colspan="2"><b>Category</b></td>
					<td><b>Subtotal</b></td>
                </tr>
                <tr>
                    <td><b>Just Java</b></td>
                    <td><i>Endless Cup</i></td>
                    <td>$<?php insertCatSales(1) ?></td>
                    <td><b>$<?php insertCatSales(1) ?></b></td>
				<tr>
					<td rowspan="2"><b>Cafe au Lait</b></td>
                    <td><i>Single</i></td>
                    <td>$<?php insertCatSales(2) ?></td>
                    <td rowspan="2"><b>$<?php insertCatSubTotal(2) ?></b></td>
				</tr>
				<tr>
                    <td><i>Double</i></td>
                    <td>$<?php insertCatSales(3) ?></td>
                    <td></td>
				</tr>
                <tr>
                    <td rowspan="2"><b>Iced Cappuccino</b></td>
                    <td><i>Single</i></td>
                    <td>$<?php insertCatSales(4) ?></td>
                    <td rowspan="2"><b>$<?php insertCatSubTotal(4) ?></b></td>
				</tr>
                <tr>
                    <td><i>Double</i></td>
                    <td>$<?php insertCatSales(5) ?></td>
                    <td></td>
				</tr>
				<tfoot>
					<td class="total" colspan="4">
						<b>Total:</b> $<?php insertCatTotal() ?></span>
					</td>
				</tfoot>
			</table>
	</div>
	<footer>
		Copyright &copy; 2014 JavaJam Coffeee House<br>
		<a href="mailto:jessie@goh.com">jessie@goh.com</a>
	</footer>
</div>
	
</body>
</html>
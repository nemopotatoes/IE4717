<?php include "php/fetchPrices.php"; ?>

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
        <br>
		<h2>Click below to generate sales report:</h2>
        <h4>
            <li><a href="quantityReport.php">By Quantity Sales</a></li>
			<li><a href="dollarReport.php">By Dollar Sales</a></li>
        </h4>
        <h3>Popular option of best selling product:</h3>
        <br>
	</div>
	<footer>
		Copyright &copy; 2014 JavaJam Coffeee House<br>
		<a href="mailto:jessie@goh.com">jessie@goh.com</a>
	</footer>
</div>
	
</body>
</html>
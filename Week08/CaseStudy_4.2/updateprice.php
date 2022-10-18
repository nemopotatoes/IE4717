<?php
include "php/fetchPrices.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="stylesheet.css">
	<script defer src="./js/updateprice.js"></script>
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
		<h2>Update Coffee Prices</h2>
		<div class="content">
			<form action="php/updateDB.php" method="post">
				<table class="menutable">
					<tr>
						<td>
							<input type="checkbox" name="justjavacheck" id="justjavacheck" onclick=updateInputStatus(1)>
						</td>
						<td><b>Just Java</b></td>
						<td>Regular house blend, decaffeinated coffee, 
							or flavor of the day. <br><br>
							<b>Endless Cup $<?php insert_table_row(1) ?></b><span id="justjavaPrice"></span>
							<br> New Price:<input formnovalidate name="endless-just-java">
							
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="cafecheck" id="cafecheck" onclick=updateInputStatus(2)>
						</td>
						<td><b>Cafe au Lait</b></td>
						<td>House blended coffee infused into a smooth, 
							steamed milk. <br><br>
							<b>Single $<?php insert_table_row(2) ?></b><span id="cafesinglePrice"></span>
							<br> New Price:<input formnovalidate name="single-cafeaulait"> 
							
							<br><br><b>Double $<?php insert_table_row(3) ?><span id="cafedoublePrice"></b></span>
							<br> New Price:<input formnovalidate name="double-cafeaulait"></b>
							
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="cappuccinocheck" id="cappuccinocheck" onclick=updateInputStatus(3)>
						</td>
						<td><b>Iced Cappuccino</b></td>
						<td>Sweetened espresso blended with icy-cold milk 
							and served in a chilled glass. <br><br>
							<b>Single $<?php insert_table_row(4) ?></b><span id="cappuccinosinglePrice"></span>
							<br> New Price:<input formnovalidate name="single-cappuccino">
							
								<br><br><b>Double $<?php insert_table_row(5) ?></b><span id="cappuccinodoublePrice"></span>
								<br> New Price:<input formnovalidate name="double-cappuccino"></b>
								
						</td>
					</tr>
					<tr>
					<td></td><td></td><td><input type="submit" value="update" style="float:right;"></td>
				</table>
			</form>
		</div>
	</div>
	<footer>
		Copyright &copy; 2014 JavaJam Coffeee House<br>
		<a href="mailto:jessie@goh.com">jessie@goh.com</a>
	</footer>
</div>
	
</body>
</html>
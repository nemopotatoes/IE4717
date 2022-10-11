<?php
include "php/filltable.php";
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
					<li><a href="menu.html">Menu</a></li>
					<li><a href="music.html">Music</a></li>
					<li><a href="jobs.html">Jobs</a></li>
					<br><br>
					<li><u>Admin</u></li>
					<li><a href="updateprice.html">Price</a></li>
				</b>
			</ul>
		</nav>
	</div>
	<div class="content">
		<h1>Coffee at JavaJam</h1>
		<div class="content">
			<form action="php/updateDB.php" method="post">
				<table class="menutable">
					<tr>
						<td>
							<input type="checkbox" name="justjavacheck" id="justjavacheck" onclick=updateInputStatus(1)>
						</td>
						<td><b>Just Java</b></td>
						<td>Regular house blend, decaffeinated coffee, 
							or flavor of the day. <br>
							<b>Endless Cup $<span id="justjavaPrice"></span><input name="endless-just-java"></b>
							<?php insert_table_row(1) ?>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="cafecheck" id="cafecheck" onclick=updateInputStatus(2)>
						</td>
						<td><b>Cafe au Lait</b></td>
						<td>House blended coffee infused into a smooth, 
							steamed milk. <br>
							<b>Single $<span id="cafesinglePrice"></span><input name="single-cafeaulait"> 
							<?php insert_table_row(2) ?>
							Double $<span id="cafedoublePrice"></span><input name="double-cafeaulait"></b>
							<?php insert_table_row(3) ?>
						</td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" name="cappuccinocheck" id="cappuccinocheck" onclick=updateInputStatus(3)>
						</td>
						<td><b>Iced Cappuccino</b></td>
						<td>Sweetened espresso blended with icy-cold milk 
							and served in a chilled glass. <br>
							<b>Single $<span id="cappuccinosinglePrice"></span><input name="single-cappuccino">
							<?php insert_table_row(4) ?>
								Double $<span id="cappuccinodoublePrice"></span><input name="double-cappuccino"></b>
								<?php insert_table_row(5) ?>
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
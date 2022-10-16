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
				</b>
			</ul>
		</nav>
	</div>
	<div class="content">
		<h1>Coffee at JavaJam</h1>
		<form id="order-form">
			<table class="menutable">
				<tr>
					<td></td>
					<td><b>Just Java</b></td>
					<td>
						<div>
							Regular house blend, decaffeinated coffee, 
							or flavor of the day. <br>
						</div>
						<div>
							<input type="radio" name="justJava"
							id="endless-just-java" value="2.00">
							<b>Endless Cup $2.00</b>
						</div>
					</td>
					<td>
						<label for="qty-just-java">Qty: </label>
						<input type="number" min="0" value="0" name="qtyJustJava"
						id="qty-just-java"></input>
					</td>
					<td class="subtotal">
						Subtotal: $<span id="subtotal-just-java">0</span>
					</td>
				</tr>
				<tr>
					<td><b>Cafe au Lait</b></td>
					<td>
						<div>
							House blended coffee infused into a smooth, 
							steamed milk. <br>
						</div>
						<div>
							<input type="radio" name="cafeaulait"
							id="single-cafeaulait" value="2.00">
								<b>Single $2.00</b>
							</input>
							<input type="radio" name="cafeaulait"
							id="double-cafeaulait" value="3.00">
								<b>Double $3.00</b>
							</input>
						</div>
					</td>
					<td>
						<label for="qty-cafeaulait">Qty: </label>
						<input type="number" min="0" value="0" name="qtyCafeAuLait"
						id="qty-cafeaulait"></input>
					</td>
					<td class="subtotal">
						Subtotal: $<span id="subtotal-cafeaulait">0</span>
					</td>
				</tr>
				<tr>
					<td><b>Iced Cappuccino</b></td>
					<td>
						<div>
							Sweetened espresso blended with icy-cold milk 
							and served in a chilled glass. <br>
						</div>
						<div>
							<input type="radio" name="cappuccino"
							id="single-cappuccino" value="4.75">
								<b>Single $4.75</b>
							</input>
							<input type="radio" name="cappuccino"
							id="double-cappuccino" value="5.75">
								<b>Double $5.75</b>
							</input>
						</div>
					</td>
					<td>
						<label for="qty-cappuccino">Qty: </label>
						<input type="number" min="0" value="0" name="qtyCappuccino"
						id="qty-cappuccino"></input>
					</td>
					<td class="subtotal">
						Subtotal: $<span id="subtotal-cappuccino">0</span>
					</td>
				</tr>
				<tfoot>
					<td class="total" colspan="4">
						Total: $<span id="total-price">0</span>
					</td>
				</tfoot>
			</table>
		</form>
	</div>
	<footer>
		Copyright &copy; 2014 JavaJam Coffeee House<br>
		<a href="mailto:jessie@goh.com">jessie@goh.com</a>
	</footer>
</div>
	
</body>
</html>
<?php
	$title = "Food Menu";
?>

<?php require 'req/head.php'?>


<div class="fs-container">

	<div class="full-small fs-1 fs-1-fixed">
		<h1 class="cart-title">Cart</h1>
		<div class="fm-cart">
			<p class="noitem">CAN'T SEE any items in the cart. Add items by clicking on them.<br/><br/><img src="/img/cena.png"></p>
			<table></table>
		</div>
		<table>
			<tr>
				<td>Total Cost</td>
				<td>Rs. <span class="cost"></span></td>
			</tr>
		</table>
		<form name="buy">
			<div class="about-you"><i class="material-icons about-you-email">mail</i><input type="email" name="email" placeholder="E-Mail"></div>
			<input type="submit" value="Order">
			<p class="noemail">Enter your E-Mail and add items to your cart.</p>
		</form>
		<div class="buy-done">

			<h1 class="buy-done-head">Please Wait
				<div class="loader">
					<svg class="circular" viewBox="25 25 50 50">
						<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
					</svg>
				</div>
			</h1>
			<p class="buy-done-body">Placing the order...</p>
		</div>
	</div>

	<div class="full-small fs-2">
		
		<div class="fm-container">
			<h1>Menu</h1>
			<div class="fm-list">
				<div class="fm-head">
					<div class="fm-head-image fm-indian"></div>
					<h2>Indian</h2>
				</div>
				<div class="fm-group">
					<table>
						<caption>Starters</caption>
						<tr>
							<td>Tandoori Chicken</td>
							<td>450</td>
						</tr>
						<tr>
							<td>Paneer Tikka</td>
							<td>150</td>
						</tr>
					</table>
					<table>
						<caption>Main Course</caption>
						<tr>
							<td>Butter Chicken</td>
							<td>450</td>
						</tr>
						<tr>
							<td>Daal Makhani</td>
							<td>300</td>
						</tr>
						<tr>
							<td>Mutton Biryani</td>
							<td>500</td>
						</tr>
					</table>
					<table>
						<caption>Breads</caption>
						<tr>
							<td>Naan</td>
							<td>30</td>
						</tr>
						<tr>
							<td>Pudina Paratha</td>
							<td>40</td>
						</tr>
						<tr>
							<td>Roti</td>
							<td>20</td>
						</tr>
					</table>
					<table>
						<caption>Drinks</caption>
						<tr>
							<td>Lassi</td>
							<td>70</td>
						</tr>
					</table>
					<table>
						<caption>Desserts</caption>
						<tr>
							<td>Kulfi</td>
							<td>60</td>
						</tr>
						<tr>
							<td>Gulab Jamun</td>
							<td>60</td>
						</tr>
					</table>
				</div>
				<div class="fm-head">
					<div class="fm-head-image fm-chinese"></div>
					<h2>Chinese</h2>
				</div>
				<div class="fm-group">
					<table>
						<caption>Starters</caption>
						<tr>
							<td>Spring Rolls</td>
							<td>100</td>
						</tr>
						<tr>
							<td>Dimsums</td>
							<td>100</td>
						</tr>
					</table>
					<table>
						<caption>Main Course</caption>
						<tr>
							<td>Chilli Chicken</td>
							<td>350</td>
						</tr>
						<tr>
							<td>Veg. Manchurian</td>
							<td>300</td>
						</tr>
					</table>
					<table>
						<caption>Rice / Noodles</caption>
						<tr>
							<td>Fried Rice</td>
							<td>100</td>
						</tr>
						<tr>
							<td>Chowmein</td>
							<td>120</td>
						</tr>
					</table>
				</div>
				<div class="fm-head">
					<div class="fm-head-image fm-italian"></div>
					<h2>Italian</h2>
				</div>
				<div class="fm-group">
					<table>
						<caption>Pasta</caption>
						<tr>
							<td>Cheesy White Pasta</td>
							<td>250</td>
						</tr>
						<tr>
							<td>Tangy Red Pasta</td>
							<td>250</td>
						</tr>
					</table>
					<table>
						<caption>Pizza</caption>
						<tr>
							<td>Margherita</td>
							<td>275</td>
						</tr>
						<tr>
							<td>Vegetable Heaven</td>
							<td>325</td>
						</tr>
						<tr>
							<td>Chicken Heaven</td>
							<td>375</td>
						</tr>
						<tr>
							<td>Hawaiian</td>
							<td>350</td>
						</tr>
					</table>
				</div>
				<div class="fm-head">
					<div class="fm-head-image fm-fastfood"></div>
					<h2>Fast Food</h2>
				</div>
				<div class="fm-group">
					<table>
						<caption>Main Course</caption>
						<tr>
							<td>Crispy Veg Burger</td>
							<td>200</td>
						</tr>
						<tr>
							<td>Chicken Burger</td>
							<td>250</td>
						</tr>
						<tr>
							<td>Cheesy Roll</td>
							<td>225</td>
						</tr>
						<tr>
							<td>Sandwich</td>
							<td>200</td>
						</tr>
					</table>
					<table>
						<caption>Side Dishes</caption>
						<tr>
							<td>Crispy Veg Burger</td>
							<td>200</td>
						</tr>
						<tr>
							<td>Chicken Burger</td>
							<td>250</td>
						</tr>
						<tr>
							<td>Cheesy Roll</td>
							<td>225</td>
						</tr>
						<tr>
							<td>Sandwich</td>
							<td>200</td>
						</tr>
					</table>
					<table>
						<caption>Drinks</caption>
						<tr>
							<td>Cola</td>
							<td>30</td>
						</tr>
						<tr>
							<td>Chocolate Milk Shake</td>
							<td>70</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

	</div>


<?php require 'req/foot.php'?>
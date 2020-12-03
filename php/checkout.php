
<!doctype html>
<html lang="en">
	<head>
		<?php include("../htmls/header.html");?>
	</head>

	<body class="bg-light">

		<!--  NAV BAR  -->
		<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
			<a class="navbar-brand" href="#">Seven Miles Hardware</a>
			
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="store.php">Store</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="checkout.php">Checkout<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Sign-out</a>
					</li>
					
				</ul>
				<form class="form-inline mt-2 mt-md-0">
					<input name="search" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</div>
		<!-- END OF NAV BAR -->
		
        <!--heading-->
        <h3>Add your credit or debit card information</h3>

        <!--checkout div class. -->
        <div class ="checkout">

            <!--Visa card icons-->
            <div class="checkoutdiv">
				<label for="fname">Accepted Cards</label>
				<div class="icon-container">
					<i class="fa fa-cc-visa" style="color:navy;"></i>
					<i class="fa fa-cc-amex" style="color:blue;"></i>
					<i class="fa fa-cc-mastercard" style="color:red;"></i>
					<i class="fa fa-cc-discover" style="color:orange;"></i>
				</div>

				<!--user input fields-->
				<br>
				<label for="cname">Name on Card</label><br>
				<input type="text" id="cname" name="cardname" placeholder="First Middle Last"><br>
				<label for="ccnum">Credit card number</label><br>
				<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"><br>
				<label for="expmonth">Exp Month</label><br>
				<input type="text" id="expmonth" name="expmonth" placeholder="September"><br>

				<!--Card info-->
				<div class="row">
					<div class="checkoutdiv2">
						<label for="expyear">Exp Year</label><br>
						<input type="text" id="expyear" name="expyear" placeholder="2018"><br>
					</div>
					<div class="checkoutdiv3">
						<label for="cvv">CVV</label><br>
						<input type="text" id="cvv" name="cvv" placeholder="352"><br>
						<br>
					</div>

					<!--Delivery option-->


					<div class="checkoutdiv3">
						<label for="delivery">Delivery Option</label><br>
						<input type="text" id="delivery" name="delivery" placeholder="pick up or send to my address"><br>
						<br>
					</div>
				</div>
			</div>
            <!--End of user input field-->

            <!--buttons-->
            <button class="btn btn-primary btn-checkout" type="button">add your card</button>
            <a href="cart.html"><button class="btn btn-primary btn-checkout" type="button">cancel</button></a>
        </div>
        <br>
        </main>
			
			<?php include("../htmls/footer.html");?>
	</body>
</html>

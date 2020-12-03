<?php

session_start();

require_once ('./includes/item-processor-inc.php');
require_once ('./includes/cart-inc.php');

?>

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
						<a class="nav-link" href="cart.php">My Cart<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Sign-out</a>
					</li>
					
				</ul>
			</div>
		</div>
		<!-- END OF NAV BAR -->
		
		<div class="container-fluid">
			<div class="row px-5">
				<div class="col-md-7">
					<div class="shopping-cart">
						<h6>My Cart</h6>
						<hr>

						<?php

						$_SESSION['total'] = 0;
						if(isset($_SESSION['cart']))
						{
							$items = generateDataFromDatabase();

							for($i = 0; $i < count($items); $i++)
							{
								if(in_array($items[$i]["id"], $_SESSION['cart']))
								{
									create_cart_component($items[$i]['imgName'],
														  $items[$i]['name'],
														  $items[$i]['price'],
														  $items[$i]['id']);

									$_SESSION['total'] += $items[$i]['price'];
								}
							}
						}
						else
						{
							echo "<h5>Cart is empty<h5>";
						}
						
						?>
		 
					</div>
				</div>
				<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

					<div class="pt-4">
						<h6>PRICE DETAILS</h6>
						<hr>
						<div class="row price-details">
							<div class="col-md-6">
								<?php
								if (isset($_SESSION['cart'])){
									$count  = count($_SESSION['cart']);
									echo "<h6>Price ($count items)</h6>";
								}else{
									echo "<h6>Price (0 items)</h6>";
								}
								?>

								<h6>Delivery Charges</h6>
								<hr>
								<h6>Amount Payable</h6>
							</div>
							<div class="col-md-6">
								<form action="checkout.php" method="post">
									<h6>$<?php echo $_SESSION['total']; ?></h6>
									<h6 class="text-success">FREE</h6>
									<hr>
									<h6>$<?php
										 echo $_SESSION['total'];
										 ?></h6>
									<button type="submit" class="btn btn-danger mx-2" name="checkout">Checkout</button>
								</form>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

		<?php include("../htmls/footer.html");?>
	</body>
</html>

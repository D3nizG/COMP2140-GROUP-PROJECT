<?php

session_start();

require_once ('./includes/item-processor-inc.php');
require_once ('./includes/item-component-inc.php');


?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Shopping Cart</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

		<!-- Bootstrap CDN -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
	<body>

		<!--  NAV BAR  -->
		<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
			<a class="navbar-brand" href="#">Seven Miles Hardware</a>
			
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="store.php">Store <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cart.php">My Cart</a>
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
		
    	<div class="container">
			<div class="row text-center py-5">
				<?php
				
				$items = generateDataFromDatabase();
 				if(count($items) > 0)
				{
					for($i = 0; $i < count($items); $i++)
					{
						if($items[$i]["stock"] > 0)
						{
							
							create_component($items[$i]["id"],
											 $items[$i]["name"],
											 $items[$i]["imgName"],
											 $items[$i]["price"],
											 $items[$i]["desc"]);
						}
					}
				}
				
				?>

			</div>
		</div>
		

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</body>
</html>

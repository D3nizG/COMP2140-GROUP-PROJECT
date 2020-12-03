<?php

session_start();

require_once ('./includes/item-processor-inc.php');
require_once ('./includes/item-component-inc.php');


?>

<!doctype html>
<html lang="en">
	<head>
         <?php include("../htmls/header.html");?>	
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
				<form method="get" action="includes/search-inc.php" class="form-inline mt-2 mt-md-0">
					<input name="search" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					<button name="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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

		<?php include("../htmls/footer.html");?>

	</body>
</html>

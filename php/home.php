<!DOCTYPE html>
<html>
    <head>
		<?php include("../htmls/header.html");?>
	</head>
	
    <body>

		<!--  NAV BAR  -->
		<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
			<a class="navbar-brand" href="#">Seven Miles Hardware</a>
			
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="smh.php">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="store.php">Store</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cart.php">My Cart</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Sign-out</a>
					</li>
				</ul>
			</div>
		</div>

		<style>
		 .center {
			 display: block;
			 margin-left: auto;
			 margin-right: auto;
			 width: 50%;
		 }
		</style>
		<img class="center" src="../images/homepagepic.png" alt="Seven Miles Hardware <3" width="500"
			 height="500">
		
		<?php include("../htmls/footer.html");?>
	</body>
</html>

<?php

session_start();

require_once ('./includes/item-processor-inc.php');
require_once ('./includes/cart-inc.php');

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Cart</title>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

		<!-- Bootstrap CDN -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="style.css">

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
				<form class="form-inline mt-2 mt-md-0">
					<input name="search" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
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

						$total = 0;
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

									$total += $items[$i]['price'];
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
								<h6>$<?php echo $total; ?></h6>
								<h6 class="text-success">FREE</h6>
								<hr>
								<h6>$<?php
									 echo $total;
									 ?></h6>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<style>
		 .site-footer
		 {
			 background-color:#26272b;
			 padding:45px 0 20px;
			 font-size:15px;
			 line-height:24px;
			 color:#737373;
		 }
		 .site-footer hr
		 {
			 border-top-color:#bbb;
			 opacity:0.5
		 }
		 .site-footer hr.small
		 {
			 margin:20px 0
		 }
		 .site-footer h6
		 {
			 color:#fff;
			 font-size:16px;
			 text-transform:uppercase;
			 margin-top:5px;
			 letter-spacing:2px
		 }
		 .site-footer a
		 {
			 color:#737373;
		 }
		 .site-footer a:hover
		 {
			 color:#3366cc;
			 text-decoration:none;
		 }
		 .footer-links
		 {
			 padding-left:0;
			 list-style:none
		 }
		 .footer-links li
		 {
			 display:block
		 }
		 .footer-links a
		 {
			 color:#737373
		 }
		 .footer-links a:active,.footer-links a:focus,.footer-links a:hover
		 {
			 color:#3366cc;
			 text-decoration:none;
		 }
		 .footer-links.inline li
		 {
			 display:inline-block
		 }
		 .site-footer .social-icons
		 {
			 text-align:right
		 }
		 .site-footer .social-icons a
		 {
			 width:40px;
			 height:40px;
			 line-height:40px;
			 margin-left:6px;
			 margin-right:0;
			 border-radius:100%;
			 background-color:#33353d
		 }
		 .copyright-text
		 {
			 margin:0
		 }
		 @media (max-width:991px)
		 {
			 .site-footer [class^=col-]
			 {
				 margin-bottom:30px
			 }
		 }
		 @media (max-width:767px)
		 {
			 .site-footer
			 {
				 padding-bottom:0
			 }
			 .site-footer .copyright-text,.site-footer .social-icons
			 {
				 text-align:center
			 }
		 }
		 .social-icons
		 {
			 padding-left:0;
			 margin-bottom:0;
			 list-style:none
		 }
		 .social-icons li
		 {
			 display:inline-block;
			 margin-bottom:4px
		 }
		 .social-icons li.title
		 {
			 margin-right:15px;
			 text-transform:uppercase;
			 color:#96a2b2;
			 font-weight:700;
			 font-size:13px
		 }
		 .social-icons a{
			 background-color:#eceeef;
			 color:#818a91;
			 font-size:16px;
			 display:inline-block;
			 line-height:44px;
			 width:44px;
			 height:44px;
			 text-align:center;
			 margin-right:8px;
			 border-radius:100%;
			 -webkit-transition:all .2s linear;
			 -o-transition:all .2s linear;
			 transition:all .2s linear
		 }
		 .social-icons a:active,.social-icons a:focus,.social-icons a:hover
		 {
			 color:#fff;
			 background-color:#29aafe
		 }
		 .social-icons.size-sm a
		 {
			 line-height:34px;
			 height:34px;
			 width:34px;
			 font-size:14px
		 }
		 .social-icons a.facebook:hover
		 {
			 background-color:#3b5998
		 }
		 .social-icons a.twitter:hover
		 {
			 background-color:#00aced
		 }
		 .social-icons a.linkedin:hover
		 {
			 background-color:#007bb6
		 }
		 .social-icons a.dribbble:hover
		 {
			 background-color:#ea4c89
		 }
		 @media (max-width:767px)
		 {
			 .social-icons li.title
			 {
				 display:block;
				 margin-right:0;
				 font-weight:600
			 }
		 }
		</style>
		<!-- Site footer -->
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<h6>About</h6>
						<p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
					</div>

					<div class="col-xs-6 col-md-3">
						<h6>Categories</h6>
						<ul class="footer-links">
							<li><a href="http://scanfcode.com/category/c-language/">C</a></li>
							<li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
							<li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
							<li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
							<li><a href="http://scanfcode.com/category/android/">Android</a></li>
							<li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
						</ul>
					</div>

					<div class="col-xs-6 col-md-3">
						<h6>Quick Links</h6>
						<ul class="footer-links">
							<li><a href="http://scanfcode.com/about/">About Us</a></li>
							<li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
							<li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
							<li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
							<li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<hr>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">
						<p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
							<a href="#">Scanfcode</a>.
						</p>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12">
						<ul class="social-icons">
							<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
						</ul>
					</div>
				</div>
			</div>
		</footer> 
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>

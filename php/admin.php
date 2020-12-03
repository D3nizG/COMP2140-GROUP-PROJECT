<?php

session_start();

require_once ('./includes/item-processor-inc.php');
require_once ('./includes/cart-inc.php');

?>


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
						<a class="nav-link" href="admin.php">Admin</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Sign-out</a>
					</li>
				</ul>
			</div>
		</div>


		<div class="container contact-form">
            <form method="post" action="includes/add-item.php">
                <h3>Add Item</h3>
				<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Item Name *" value="" />
                        </div>
						
                        <div class="form-group">
                            <input type="number" name="quantity" class="form-control" placeholder="Quantity in stock *" value="" />
                        </div>

						<div class="form-group">
                            <input type="text" name="image" class="form-control" placeholder="Image" value="" />
                        </div>
						
                        <div class="form-group">
                            <input type="number" name="price" class="form-control" placeholder="Price" value="" />
                        </div>
						
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Insert" />
                        </div>
						
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="desc" class="form-control" placeholder="Item Description" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
				</div>
            </form>
		</div>
        

		<?php include("../htmls/footer.html");?>
	</body>
</html>

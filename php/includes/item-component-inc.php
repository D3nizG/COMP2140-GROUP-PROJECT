<?php


function create_component($id, $name, $img, $price, $desc, $action)
{
	$component = "

				<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
					<form action=\"$action\" method=\"post\">
						<div class=\"card shadow\">
							<div>
								<img src=\"./../images/$img\" alt=\"Image1\" class=\"img-fluid card-img-top\">
							</div>
							<div class=\"card-body\">
								<h5 class=\"card-title\">$name</h5>
								<p class=\"card-text\">
									$desc
								</p>
								<h5>
									<span class=\"price\">$$price</span>
								</h5>
								
								<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
								<input type=\"hidden\" name=\"product_id\" value=\"$id\">
							</div>
						</div>
					</form>
				</div>";

	echo $component;
}


?>

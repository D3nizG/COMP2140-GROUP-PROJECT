<?php

if(!isset($_SESSION))
{
    session_start();
}

if(isset($_SESSION['sessionStart']) && $_SESSION['sessionStart'] === true)
{
	if(isset($_POST['add']))
	{
		if(isset($_SESSION['cart']))
		{
			if(in_array($_POST['product_id']))
			{
				// Do nothing
			}
			else
			{
				$_SESSION['cart'][count($_SESSION['cart'])] = $_POST['product_id'];
			}
			header("Location: ../store.php");
		}
		else
		{
			// NOTE(afb) :: Nothing in cart
			// 
			$_SESSION['cart'] = array($_POST['product_id']);
			header("Location: ../store.php");
		}
	}
	elseif(isset($_POST['remove']))
	{
		// NOTE(afb) :: Handled elsewhere
	}
	else
	{
        // TODO(afb) :: No idea how you reached here so redirect.
	}
}
else
{
	// NOTE(afb) :: Not signed in
}

function create_cart_component($img, $name, $price, $id){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$id\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=../images/cement.jpg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$name</h5>
                                <h5 class=\"pt-2\">$$price</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

?>

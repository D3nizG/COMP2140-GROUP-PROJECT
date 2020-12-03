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
			if(in_array($_POST['product_id'], $_SESSION['cart']))
			{
				// Do nothing
                //echo "hee";
				header("Location: ../store.php");
				exit();

			}
			else
			{
				array_push($_SESSION['cart'], $_POST['product_id']);
			}
			header("Location: ../store.php");
            exit();
		}
		else
		{
			// NOTE(afb) :: Nothing in cart
			// 
			$_SESSION['cart'] = array($_POST['product_id']);
            //echo "lol";
            header("Location: ../store.php");
            exit();
		}
	}
	elseif(isset($_POST['remove']))
	{
		// NOTE(afb) :: Handled elsewhere
		
		if ($_GET['action'] == 'remove')
		{
            foreach ($_SESSION['cart'] as $key => $value)
			{
                if($value == $_GET['id'])
				{
                    unset($_SESSION['cart'][$key]);
					if(count($_SESSION['cart']) === 0)
					{
						$_SESSION['cart'] = NULL;
					}
                }
            }
        }

        header("Location: ../cart.php");
        exit();
	}
	else
	{
        // TODO(afb) :: No idea how you reached here so redirect.
	}
}
else
{
	// NOTE(afb) :: Not signed in
    header("Location: ../login.php");
    exit();
}

function create_cart_component($img, $name, $price, $id){
    $element = "
    
    <form action=\"includes/cart-inc.php?action=remove&id=$id\" method=\"post\" class=\"cart-items\">
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

<?php

require 'database-manager.php';



if(isset($_SESSION['sessionUser']) && $_SESSION['sessionUser'] === 'admin')
{
	$itemName = trim($_POST['name']);
	$quan = trim($_POST['quantity']);
	$img = trim($_POST['image']);
	$price = trim($_POST['price']);
	$desc = trim($_POST['desc']);

	if(empty($itemName) ||
	   empty($quan) ||
	   empty($img) ||
	   empty($price) ||
	   empty($desc))
	{
		echo "Hello";
		//header("Location: ../admin.php");
	}
	else
	{
		if($dbsActive)
		{
			$sql = "SELECT INTO items (itemName, quantity, price, refName, totalSold, itemDescription)" .
				   "('$itemName', $quan, $price,'$img', 0, '$desc')";
			
			if(mysqli_query($dbs, $sql))
			{
				echo "good";
			}
			else
			{
				echo "Shit";
			}
		}
		else
		{
			echo "bad";
		}
	}
}

?>

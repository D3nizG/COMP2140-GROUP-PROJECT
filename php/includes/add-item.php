<?php

require 'database-manager.php';

session_start();

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
		header("Location: ../admin.php");
	}
	else
	{
		if($dbsActive)
		{

			$sql = "INSERT INTO items (itemName, quantity, price, refName, totalSold, itemDescription) VALUES (?, ?, ?, ?, ?, ?)";
			$zero = 0;
			
			$stmt = mysqli_stmt_init($dbs);
			if(!mysqli_stmt_prepare($stmt, $sql))
			{
				header("Location: ../admin.php?error=sqlerrordd");
			}
			else
			{

				mysqli_stmt_bind_param($stmt, "ssssss", $itemName, $quan, $price, $img, $zero, $desc);
				if(mysqli_stmt_execute($stmt))
				{
					header("Location: ../admin.php?success=itemadded");
				}
				else
				{
					header("Location: ../admin.php?error=sqlerrordd");
				}
			}
			
		}
		else
		{
			echo "real bad";
		}
	}
}
else
{
    echo "Very Bad";
}
?>

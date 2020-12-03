<?php

require 'database-manager.php';


function redirect($location)
{
	header("Location: $location");
	exit();
}

function generateDataFromDatabase()
{
	$itemArray = array();

	global $dbsActive;
	global $dbs;
	
	if($dbsActive)
	{
		$sql = "SELECT * FROM items WHERE 1";
		
		if($result = mysqli_query($dbs, $sql))
		{
			// Success

			$counter = 0;
			while($row = mysqli_fetch_assoc($result))
			{

				$item = array("id"=>$row["id"], "name"=>$row["itemName"],
							  "stock"=>$row["quantity"],
							  "price"=>$row["price"],
							  "imgName"=>$row["refName"],
							  "desc"=>$row["itemDescription"]);

				$itemArray[$counter] = $item;
				$counter++;
			}
			
		}
		else
		{
			// error
			$itemArray = NULL;
			echo "SQL error 2";
		}

		
	}
	else
	{
		$itemArray = NULL;
	}

	return $itemArray;
}

?>

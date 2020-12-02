<?php

require 'database-manager.php';


function redirect($location)
{
	header("Location: $location");
	exit();
}

if($dbsActive)
{
	$sql = "SELECT * FROM items";

	$stmt = mysqli_stmt_init($dbs);
	if(!mysqli_stmt_prepare($stmt, $sql))
	{
		// NOTE(afb) :: Cannoot retrieve from database
		exit();
		redirect("../SMH.html?error=sqlerrorll");
	}
	
}

?>

<?php

require 'item-processor-inc.php';

$search = trim($_GET["search"]);

function nameMatch($arr)
{
	global $search;
	return strpos(strtolower($arr["name"]), $search) !== false;
}


if(empty($search))
{
	header("Location: ../cart.php");
	exit();
}
else
{
	$search = strtolower($search);
	$items = generateDataFromDatabase();
	$result = array_filter($items, "nameMatch");
}

?>

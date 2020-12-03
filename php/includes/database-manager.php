<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'SevenMilesHardwareDB');

$dbsActive = true;

$dbs = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if(!$dbs)
{
	$dbsActive = false;
	die("MySQLi connection error " . mysqli_connect_error());
}
?>

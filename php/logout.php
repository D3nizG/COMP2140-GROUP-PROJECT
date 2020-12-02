<?php


if(!isset($_SESSION))
{
	session_start();
	unset($_SESSION['sessionStart']);
	unset($_SESSION['sessionID']);
	unset($_SESSION['sessionUser']);
	unset($_SESSION['cart']);
	unset($_SESSION['total']);
	unset($_SESSION);
	session_destroy();
}
else
{
	unset($_SESSION['sessionStart']);
	unset($_SESSION['sessionID']);
	unset($_SESSION['sessionUser']);
	unset($_SESSION['cart']);
	unset($_SESSION['total']);
	unset($_SESSION);
	session_destroy();														
}

header("Location: login.php");
?>

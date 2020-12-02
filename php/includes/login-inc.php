<?php

function redirect($location)
{
	header("Location: $location");
	exit();
}

if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true)
{
	header("Location: ../welcome.php");
	exit();
}
else
{
	if(isset($_POST['submit']))
	{
		require 'database-manager.php';

		if(!$dbsActive)
		{
			redirect("../login.php?error=mysqlierror");
		}
		
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if(empty($username) ||
		   empty($password))
		{
			// NOTE(afb) :: Either password or username not enetered.
			redirect("../login.php");
		}
		else
		{
			// NOTE(afb) :: Validate username and password.
			$sql = "SELECT * FROM customers WHERE username = ? OR email = ?";
			$stmt = mysqli_stmt_init($dbs);

			if(!mysqli_stmt_prepare($stmt, $sql))
			{
				redirect("../login.php?error=mysqlerror");
			}
			else
			{
				mysqli_stmt_bind_param($stmt, "ss", $username, $username);
				mysqli_stmt_execute($stmt);

				$result = mysqli_stmt_get_result($stmt);
				if($row = mysqli_fetch_assoc($result))
				{
					$storedPass = $row['password'];
					if(password_verify($password, $storedPass))
					{
						session_start();
						$_SESSION['sesssionStart'] = true;
						$_SESSION['sessionID'] = $row['id'];
						$_SESSION['sessionUser'] = $row['username']; 
						redirect("../index.php");
						exit();
					}
					else
					{
						redirect("../login.php?error=incorrectpassword");
					}
				}
				else
				{
					redirect("../login.php?error=nouser");
				}
			}
		}
	}
	else
	{
		header("Location: ../login.php");
		exit();
	}

}
?>

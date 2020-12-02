<?php

function redirect($location)
{
	header("Location: $location");
	exit();
}

if(isset($_POST['submit']))
{
	// Add database connection
	require 'database-manager.php';
	
	$username = trim($_POST['username']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);
	$conPassword = trim($_POST['conPassword']);
	
	
	if(empty($username) ||
	   empty($password) ||
	   empty($email) ||
	   empty($conPassword))
	{
		redirect("../register.php?error=incompletefields");
	}
	elseif(!preg_match("/^[a-zA-z0-9]*/", $username))
	{
		// TODO :: Email validation
		redirect("../register?error=invalidusername");
	}
	elseif($password !== $conPassword)
	{
		redirect("../register?error=passwordsdonotmatch");
	}
	else
	{
		$sql = "SELECT * FROM users WHERE username = ? or email = ?;";

		$stmt = mysqli_stmt_init($dbs);
		if(!mysqli_stmt_prepare($stmt, $sql))
		{
			redirect("../register.php?error=sqlerrorll");
		}
		else
		{
			mysqli_stmt_bind_param($stmt, "ss", $username, $email);
			mysqli_stmt_execute($stmt);
			
			mysqli_stmt_store_result($stmt);
			$rowCount = mysqli_stmt_num_rows($stmt);
			
			if($rowCount > 0)
			{
				redirect("../register.php?error=usernameoremailtaken");
			}
			else
			{
				$sql = "INSERT INTO users (username, email, passcode) VALUES (?, ?, ?)";
				$stmt = mysqli_stmt_init($dbs);
				if(!mysqli_stmt_prepare($stmt, $sql))
				{
					redirect("../register.php?error=sqlerrordd");
				}
				else
				{
					$hashPassword = password_hash($password, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPassword);
					mysqli_stmt_execute($stmt);
					header("Location: ../login.php?success=registered");					
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($dbs);
}
else
{
	redirect("../register.php");
}
?>

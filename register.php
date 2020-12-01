<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>

	<body>
		
		<div>
			<h1>Register</h1>
			<p>Have an account? <a href="login.php">Register Here!</a></p>
			
			<form method="post" action="includes/register-inc.php">
				
				<input type="text" name="username" placeholder="Username">
				<input type="text" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<input type="password" name="conPassword" placeholder="Confirm Password">
				<button name="submit" type="submit">Register</button>
				
				
			</form>
		</div>
	</body>
</html>

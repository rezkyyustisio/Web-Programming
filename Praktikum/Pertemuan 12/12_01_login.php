<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>
<body>
	
	<center>
		<h1>Silahkan login</h1>

		<form action="proses_login.php" method="POST">
			<table>
				<tr>
					<td>Username</td><td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td><td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td><td><input type="reset" value="Cancel"><input type="submit" name="submit" value="Login"></td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>
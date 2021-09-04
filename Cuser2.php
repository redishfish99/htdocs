<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="testPDO.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="user" placeholder="Username" id="user" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="text" name="pass" placeholder="Password" id="pass" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8">

		<title>Login pour Faculté</title>

	</head>
	<body>
		<div class="login">
			<h1>Login pour Faculté</h1>
			<form action="authenticatefaculte.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>
<a href="mainpagelogin.php">Retour</a>
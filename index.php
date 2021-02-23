<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="src/css/main.css">
	</head>
	<body>
		<div id="container" class="container">
			<form method="post" action="">
				<div id="form" class="links">
					<div id=links class="links">
						<button type="submit" formaction="./login.php">Login</button><br>
						<br>
						<button type="submit" formaction="./register.php">Register</button><br>
						<br>
						<button type="submit" formaction="./test.php">Test</button><br>
						<br>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
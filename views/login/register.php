<?php 
session_start();
?> 
<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div>
				<form method="POST" action="../../Sessionhelper/registerSession.php" id="register">
						<h3>Register</h3>
						<?php if(isset($_GET['error'])){ ?>
						<div class="alert alert-danger" role="alert">
						<?php echo $_GET['error']; ?>
						</div>
						<?php } ?>

						<?php if(isset($_GET['success'])){ ?>
						<div class="alert alert-success" role="alert">
						<?php echo $_GET['success']; ?>
						</div>
						<?php } ?>

						<div class="name">
							<label>FullName</label>
							<input type="text" name="name">
						</div>

						<div class="username">
							<label>UserName</label>
							<input type="text" name="username">
						</div>

						<div class="mail">
							<label>Email</label>
							<input type="email" name="email">
						</div>

						<div class="city">
							<label>City</label>
							<input type="text" name="city">
						</div>

						<div class="phonenumber">
							<label>PhoneNumber</label>
							<input type="number" name="phonenumber">
						</div>

						<div class="passwd">
							<label>Password</label>
							<input type="password" name="password">
						</div>

						<div class="submit">
							<button type="submit" name="submit" class="dark">Register</button>
						</div>
				</form>
				<a href="../../index.php">Log In</a>

		</div>
	</body>
	</html>


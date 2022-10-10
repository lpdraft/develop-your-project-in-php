<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- CDNs Jquery -->
    <script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Jquery document ready function -->
    <script src="assets/js/app.js" defer></script>
</head>

<body>
<div class="body">
		<div class="veen">
			<div class="login-btn splits">
				<p>Already an user?</p>
				<button class="active">Login</button>
			</div>
			<div class="rgstr-btn splits">
				<p>Don't have an account?</p>
				<button>Register</button>
			</div>
            <!-- Two FORMS -->
			<div class="wrapper">

                <!-- FORM lOGIN -->
				<form method="POST" action="./controllers/UsersController.php" id="login" tabindex="500">
					<h3>Login</h3>
                    <input type="hidden" name="type" value="login">
					<div class="mail">
						<input type="email" name="email">
						<label>Granted Email</label>
					</div>
					<div class="passwd">
						<input type="password" name="passwoord">
						<label>Your Password</label>
					</div>
					<div class="submit">
						<button type="submit" name="submit" class="dark">Login</button>
					</div>
				</form>


                <!-- FORM REGISTER -->
				<form method="POST" action="./controllers/UsersController.php" id="register" tabindex="502">
					<!-- <h3>Register</h3> -->
                    <input type="hidden" name="type" value="register">

					<div class="name">
						<input type="text" name="name">
						<label>Full Name</label>
					</div>
					<div class="surname">
						<input type="text" name="surname">
						<label>Surname Name</label>
					</div>
                    <div class="username">
                        <input type="text" name="username">
                        <label>User Name</label>
                    </div>
					<div class="mail">
						<input type="email" name="email">
						<label>Email</label>
					</div>
					<div class="city">
						<input type="text" name="city">
						<label>City</label>
					</div>
					<div class="phonenumber">
						<input type="number" name="phonenumber">
						<label>Phone Number</label>
					</div>
					<div class="passwd">
						<input type="password" name="password">
						<label>Password</label>
					</div>

					<div class="submit">
						<button type="submit" name="submit" class="dark">Register</button>
					</div>
				</form>
			</div>
		</div>	
	</div>

</body>
</html>

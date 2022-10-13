<?php require_once('/xampp/htdocs/develop-your-project-in-php/assets/html/header.php');?>

<form method="POST" action="../../controllers/LoginController.php" id="register">
					<h3>Register</h3>
                    <input type="hidden" name="type" value="register">

					<div class="name">
						<label>Full Name</label>
						<input type="text" name="name">
					</div>

					<div class="surname">
						<label>Surname Name</label>
						<input type="text" name="surname">
					</div>

                    <div class="username">
                        <label>User Name</label>
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
						<label>Phone Number</label>
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
                <a href="viewLogin.php">Log In</a>
    


<?php require_once('/xampp/htdocs/develop-your-project-in-php/assets/html/footer.php');?>
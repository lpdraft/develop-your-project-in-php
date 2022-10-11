<?php require_once('../assets/html/header.php');?>

    <form method="POST" action="./controllers/UsersController.php" id="login" tabindex="500">
		<h3>Login</h3>
        <input type="hidden" name="type" value="login">

		<div class="mail">
			<label>Granted Email</label>
			<input type="email" name="email">
		</div>

		<div class="passwd">
			<label>Your Password</label>
			<input type="password" name="passwoord">
		</div>

		<div class="submit">
			<button type="submit" name="submit" class="dark">Login</button>
		</div>            
	</form>

    <a href="viewRegister.php">Want to register?</a>


<?php require_once('../assets/html/footer.php');?>
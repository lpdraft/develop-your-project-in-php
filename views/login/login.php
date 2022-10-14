
	<div>
			<form method="POST" action="" id="login" tabindex="500">
				<h3>Login</h3>

				<!-- Handeling Errors -->
				<?php if(isset($errorLog)){
					echo $errorLog;	
				}
				?>

				<div class="mail">
					<label>Admin username</label>
					<input type="text" name="username">
				</div>

				<div class="passwd">
					<label>Password</label>
					<input type="password" name="password">
				</div>

				<div class="submit">
					<button type="submit" name="submit" class="dark">Login</button>
				</div>            
			</form>

		<a href="../../../develop-your-project-in-php/views/login/register.php">Want to register?</a>
	</div>

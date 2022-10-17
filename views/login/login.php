<?php 
    include_once './assets/html/header.php';
    include_once './Sessionhelper/admin_session.php';
?>

<!-- Slogan Box -->
	<div class="card p-2">
		<h3>Slogan Title</h3>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis repellendus in at a voluptatibus temporibus blanditiis modi exercitationem doloremque earum ad voluptas, placeat quo laudantium inventore aut iste quas.</p>
	</div>
    <h1 class="header">Please Login</h1>

    <?php errorMsg('login') ?>
    <div>
    <form method="post" action="/develop-your-project-in-php/controllers/loginController.php">
    <input type="hidden" name="type" value="login">
        <input type="text" name="name/email"  
        placeholder="Insert Username/Email...">

        <input type="password" name="adminPwd" 
        placeholder="Password...">

        <button type="submit" name="submit">Log In</button>
    </form>




    <!-- Trigger Register Modal Button -->
	<button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
	  Want to Register?
	</button>

    <!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Please Register</h5>

	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>

	      <div class="modal-body">  
            <?php errorMsg('register') ?>
		  		<form method="POST" action="/develop-your-project-in-php/controllers/loginController.php" id="register">
					<!-- Hidden input for Post Switch method -->
                    <input type="hidden" name="type" value="register">

					<div class="name">
						<label>FullName</label>
						<input type="text" name="adminName" placeholder="your fullname..">
					</div>

                    <div class="username">
                        <label>UserName</label>
                        <input type="text" name="adminUname" placeholder="your username..">
                    </div>

					<div class="mail">
						<label>Email</label>
						<input type="email" name="adminEmail" placeholder="your email..">
					</div>

					<div class="city">
						<label>City</label>
						<input type="text" name="adminCity" placeholder="your city..">
					</div>

					<div class="phonenumber">
						<label>PhoneNumber</label>
						<input type="number" name="adminPhone" placeholder="your phonenumber..">
					</div>
					<div class="password">
						<label>Password</label>
						<input type="password" name="adminPwd" placeholder="your password..">
					</div>

					<div class="password">
						<label>Repeat Password</label>
						<input type="password" name="pwdRepeat" placeholder="repeat password..">
					</div>

				
					<div class="modal-footer">
				  		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
				  		<button type="submit" class="btn btn-success" name="submit">Submit</button>
					</div>
			</form>
	      </div>
	    </div>
	  </div>
	</div>
    </div>

<?php 
   include_once './assets/html/header.php';
?>
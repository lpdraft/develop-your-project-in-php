<?php 
    include_once './Sessionhelper/admin_session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../develop-your-project-in-php/assets/css/loginCss.css">

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
 </script>
	
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
		integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
 </script>
<style>
	.modal-body{
		margin: 0 auto;
	}
</style>
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">

    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="../../../develop-your-project-in-php/assets/images/chorro.jpg" alt="login" class="login-card-img">   
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="../../../develop-your-project-in-php/assets/images/logo.png" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Sign into your account</p>
              <form method="POST" action="../develop-your-project-in-php/controllers/loginController.php">
                <?php errorMsg('login') ?>
                <input type="hidden" name="type" value="login">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="name/email"" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="adminPwd" class="form-control" placeholder="*********">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login">
				  <button id="registerBtn" type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
	                    Want to Register?
	            </button>
                </form>
 
               
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Please Register</h5>

				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">  
				<?php errorMsg('register') ?>
					<form id="form_register" class="row g-3" method="POST" action="../develop-your-project-in-php/controllers/loginController.php" id="register">
						<!-- Hidden input for Post Switch method -->
						<input type="hidden" name="type" value="register">

						<div class="form-group form-group-centered col-md-12">
							<label for="fullname" class="form-label">FullName</label>
							<input id="fullname" class="form-control" type="text" name="adminName" placeholder="your fullname..">
						</div>

						<div class="form-group col-md-12">
							<label class="form-label">UserName</label>
							<input class="form-control" type="text" name="adminUname" placeholder="your username..">
						</div>

						<div class="form-group col-md-12">
							<label class="form-label">Email</label>
							<input class="form-control" type="email" name="adminEmail" placeholder="your email..">
						</div>

						<div class="form-group col-md-12">
							<label class="form-label">City</label>
							<input class="form-control" type="text" name="adminCity" placeholder="your city..">
						</div>

						<div class="form-group col-md-12">
							<label class="form-label">PhoneNumber</label>
							<input class="form-control" type="number" name="adminPhone" placeholder="your phonenumber..">
						</div>
						<div class="form-group col-md-12">
							<label class="form-label">Password</label>
							<input class="form-control" type="password" name="adminPwd" placeholder="your password..">
						</div>

						<div class="form-group col-md-12">
							<label class="form-label">Repeat Password</label>
							<input class="form-control" type="password" name="pwdRepeat" placeholder="repeat password..">
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
          </div>
        </div>
      </div>

      
     
    </div>
  </main>


</body>
</html>

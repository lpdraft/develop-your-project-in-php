<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<!-- Bootstrap JavaScript Libraries -->
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	  </script>
	
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
		integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	  </script>
    <!-- Jquery document ready function -->
</head>
<body>
    
<nav>
    <ul>
      <a class="nav-link active" href="../../index.php" aria-current="page"><li>IndexPage</li></a>
      <?php if(!isset($_SESSION['adminId'])) : ?>
        <a class="nav-link" href="../../index.php"><li>LogIn</li></a>
        <a class="nav-link" href="../../../develop-your-project-in-php/views/login/register.php"><li>Register</li></a>
      <?php else: ?>
      <a class="nav-link" href="../../controllers/loginController.php?end=logout"><li>LogOut</li></a>
      <?php endif; ?>
    </ul>
  </nav>
    

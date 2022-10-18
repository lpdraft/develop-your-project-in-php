<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS v5.2.1 -->
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<!-- Bootstrap JavaScript Libraries -->
	  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
	  </script>
	
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
		integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
	  </script>
</head>
<body>
<nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link link-dark px-2 active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item"><a href="?controller=Client&action=getAllClients" class="nav-link link-dark px-2">Clients Dashboard</a></li>
                    <li class="nav-item"><a href="?controller=Travel&action=getAllTravels" class="nav-link link-dark px-2">Travels Dashboard</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">About</a></li>
                </ul>
                <ul class="nav">
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Login</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
                </ul>
            </div>
</nav>

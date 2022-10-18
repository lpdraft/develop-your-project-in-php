<?php 
session_start();
if(isset($_SESSION['adminId'])){
  $adminId=$_SESSION['adminId'];
} else{
  header('Location: ../../index.php');//Aqui lo redireccionas al lugar que quieras.
  die() ;
}
?>
  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css">
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

    <!-- <link rel="apple-touch-icon" href="../../assets//images/facebook.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico"> -->
</head>
<body>
<nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                  
                    <li class="nav-item"><a href="main.php" class="nav-link link-dark px-2 active" aria-current="page">Home</a>
                    </li>
                    
                    <li class="nav-item"><a href="../../index.php?controller=Client&action=getAllClients" class="nav-link link-dark px-2">Clients Dashboard</a></li>

                    <li class="nav-item"><a href="../../index.php?controller=Travel&action=getAllTravels" class="nav-link link-dark px-2">Travels Dashboard</a></li>
                    
                </ul>

                <ul class="nav">
                  <?php if(!isset($_SESSION['adminId'])) : ?>
                   
                    <?php else: ?>
                        <li  class="nav-item"><a style="font-weight: 900;" class="nav-link link-dark px-2">   
                            <?php if(isset($_SESSION['adminId'])){
                                // split white space and get the name
                                echo explode(" ", $_SESSION['adminName'])[0];
                            }else{
                                echo 'Guest';
                            } 
                        ?> </a></li>
                       <li class="nav-item"><a href="../../controllers/loginController.php?end=logout" class="nav-link link-dark px-2">LogOut</a></li>
                    </ul>
                    <?php endif; ?>
            </div>
</nav>

    <!-- START THE FEATURETTES -->
    <div class="container marketing prueba">
    <div class="row principal-row">
    <div class="principal  p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-2 ">These top destinations are just a click away</h1>
      <p class="lead my-3">Deals from your favorite booking sites.</p>
      <p class="lead mb-8"><a href="http://localhost/develop-your-project-in-php/index.php?controller=Travel&action=getAllTravels" class="text-black">Continue reading...</a></p>
    </div>
  </div>


</div><!-- /.row -->

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h1 class="featurette-heading fw-normal lh-8">Try searching for a city, a specific hotel, or even a landmark! <span class="text-muted">See for yourself.</span></h1>
        <p class="lead">With us you can easily find your ideal hotel and compare prices from different websites. Simply enter where you want to go and your desired travel dates, and let our hotel search engine compare accommodation prices for you. To refine your search results, simply filter by price, distance (e.g. from the beach), star category, facilities and more. From budget hostels to luxury suites, we make it easy to book online. You can search from a large variety of rooms and locations across the USA, like San Francisco and Chicago to popular cities and holiday destinations abroad!.</p>
      </div>
      <div class="col-md-5 order-md-1 chorro">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img"   focusable="false"></svg>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-8"> Search hundreds of flight sites at once. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">The prices shown come from numerous hotels and booking websites. This means that while users decide on us which hotel best suits their needs, the booking process itself is completed through the booking sites (which are linked to our website). By clicking on the “view deal” button, you will be forwarded onto a booking site where you can complete the reservation for the hotel deal found on our agency.</p>
      </div>
      <div class="col-md-5 order-md-1 chorro2">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img"   focusable="false"></svg>


      </div>
    </div>

</div>

<footer>
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="text-muted">&copy; 2022 Lovelace Squad</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/"><img src="../../assets/images/facebook.png" alt="facebook logo" width="24" height="24"></a></li>
      <li class="ms-3"><a class="text-muted" href="https://github.com/lpdraft/develop-your-project-in-php"><img src="../../assets/images/github-logo.png" alt="github logo" width="24" height="24"></a></li>
      <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/"><img src="../../assets/images/instagram.png" alt="instagram logo" width="24" height="24"></a></li>
      
    </ul>
  </footer>
</div>
</footer>
</body>
</html>


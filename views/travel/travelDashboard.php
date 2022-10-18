<<<<<<< HEAD
=======
<?php 
session_start();
if(isset($_SESSION['adminId'])){
  $adminId=$_SESSION['adminId'];
} else{
  header('Location: index.php');//Aqui lo redireccionas al lugar que quieras.
  die() ;
}
?>
  
>>>>>>> main
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<<<<<<< HEAD
</head>

<body>
    <h1>Travel Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Origin</th>
                <th class="tg-0lax">Destination</th>
                <th class="tg-0lax">Entrance</th>
                <th class="tg-0lax">Departure</th>
                <th class="tg-0lax">Price</th>                
=======
    <link href="../../../develop-your-project-in-php/assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/9cf497312c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body id="travelBody">
    <nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap justify-content-between">
    
              <ul class="nav nav-pills flex-column flex-sm-row">
                <li class="nav-item"><a class="flex-sm-fill text-sm-center nav-link link-dark" href="../../../develop-your-project-in-php/views/main/main.php">Home</a></li>
                <li class="nav-item"><a class="flex-sm-fill text-sm-center nav-link link-dark " href="index.php?controller=Client&action=getAllClients">Clients Dashboard</a></li>
                <li class="nav-item"><a class="active bg-secondary flex-sm-fill text-sm-center nav-link link-dark" href="index.php?controller=Travel&action=getAllTravels">Travels Dashboard</a></li>
                
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
                       <li class="nav-item"><a href="controllers/loginController.php?end=logout" class="nav-link link-dark px-2"><i class="fas fa-sign-out-alt" style="color: red;"></i></a></li>
                    </ul>
                    <?php endif; ?>
            </div>
</nav>

    <div style="padding: 80px;">
    <h3 style="vertical-align: inherit; padding: 20px;">Travels</h3>
    <table class="table table-striped table-sm" >
        <thead>
        <tr>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Origin</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Destination</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Departure Date</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Arrival Date</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Price</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actions</font></font></th>

>>>>>>> main
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $travel) {
                echo "<tr>";
<<<<<<< HEAD
                echo "<td class='tg-0lax'>" . $travel["id_dest"] . "</td>";
                echo "<td class='tg-0lax'>" . $travel["origin"] . "</td>";
                echo "<td class='tg-0lax'>" . $travel["destination"] . "</td>";
                echo "<td class='tg-0lax'>" . $travel["entrance"] . "</td>";
                echo "<td class='tg-0lax'>" . $travel["departure"] . "</td>";
                echo "<td class='tg-0lax'>" . $travel["price"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=Travel&action=getTravel&id_dest=" . $travel["id_dest"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=Travel&action=deleteTravel&id_dest=" . $travel["id_dest"] . "'>Delete</a>
=======
                
                echo "<td class='tg-0lax'>" . $travel["origin"] . "</td>";
                echo "<td class='tg-0lax'>" . $travel["destination"] . "</td>";
                echo "<td class='tg-0lax'>" . $travel["departure"] . "</td>";
                echo "<td class='tg-0lax'>" . $travel["arrival"] . "</td>";
                echo "<td class='tg-0lax'>" . $travel["price"] . "</td>";
               
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=Travel&action=getTravel&id_dest=" . $travel["id_dest"] . "'><i class='fas fa-edit'></i></a>
                <a class='btn btn-danger' href='?controller=Travel&action=deleteTravel&id_dest=" . $travel["id_dest"] . "'><i class='fas fa-trash-alt'></i></a>
>>>>>>> main
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=Travel&action=createTravel">Create</a>
<<<<<<< HEAD
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>

</html>
=======
</body>

<div class="container footer-travelDash">
   <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
     <div class="col-md-4 d-flex align-items-center">
       <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
         <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
       </a>
       <span class="text-muted">&copy; 2022 Lovelace Squad</span>
     </div>

     <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
       <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/"><img src="../../develop-your-project-in-php/assets/images/facebook.png" alt="facebook logo" width="24" height="24"></a></li>
       <li class="ms-3"><a class="text-muted" href="https://github.com/lpdraft/develop-your-project-in-php"><img src="../../../develop-your-project-in-php/assets/images/github-logo.png" alt="github logo" width="24" height="24"></a></li>
       <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/"><img src="../../develop-your-project-in-php/assets/images/instagram.png" alt="instagram logo" width="24" height="24"></a></li> 
     </ul>
     </footer>
   </div>

</html>


>>>>>>> main

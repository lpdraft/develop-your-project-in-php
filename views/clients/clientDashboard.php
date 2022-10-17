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
  
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
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
    <h1>Client Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">Id</th>
                <th class="tg-0pky">Name</th>
                <th class="tg-0lax">Surname</th>
                <th class="tg-0lax">Username</th>
                <th class="tg-0lax">Email</th>
                <th class="tg-0lax">City</th>
                <th class="tg-0lax">Phone Number</th>
                <th class="tg-0lax">Actions</th>
            </tr>
=======
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="/assets/js/app.js" defer></script>
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/9cf497312c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
          <nav class="py-2 bg-light border-bottom">
            <div class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                  
                    <li class="nav-item"><a href="../../../develop-your-project-in-php/views/main/main.php" class="nav-link link-dark px-2 active" aria-current="page">Home</a>
                    </li>
                    
                    <li class="nav-item"><a href="index.php?controller=Client&action=getAllClients" class="nav-link link-dark px-2">Clients Dashboard</a></li>
                    <li class="nav-item"><a href="index.php?controller=Travel&action=getAllTravels" class="nav-link link-dark px-2">Travels Dashboard</a></li>
                    
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
                       <li class="nav-item"><a href="controllers/loginController.php?end=logout" class="nav-link link-dark px-2">LogOut</a></li>
                    </ul>
                    <?php endif; ?>
            </div>
</nav>

    <div style="padding: 80px;">
    <h3 style="vertical-align: inherit; padding: 20px;">Clients</h3>

    <table class="table table-striped table-sm" >
        <thead>

            <tr>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Id</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Name</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">UserName</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">City</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phone Number</font></font></th>
              <th scope="col"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actions</font></font></th>

            </tr>

>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $client) {
                echo "<tr>";
<<<<<<< HEAD
                echo "<td class='tg-0lax'>" . $client["id_admin"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["name"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["surname"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["username"] . "</td>";
=======
                echo "<td class='tg-0lax'>" . $client["id_client"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["name"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["surname"] . "</td>";
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
                echo "<td class='tg-0lax'>" . $client["email"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["city"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["phone_number"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
<<<<<<< HEAD
                <a class='btn btn-secondary' href='?controller=Client&action=getClient&id_admin=" . $client["id_admin"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=Client&action=deleteClient&id_admin=" . $client["id_admin"] . "'>Delete</a>
=======
                <a class='btn btn-secondary' href='?controller=Client&action=getClient&id_client=" . $client["id_client"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=Client&action=deleteClient&id_client=" . $client["id_client"] . "'>Delete</a>
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=Client&action=createClient">Create</a>
<<<<<<< HEAD
    <a id="home" class="btn btn-secondary" href="./">Back</a>
=======
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
</body>

</html>
<?php
session_start();
if (isset($_SESSION['adminId'])) {
  $adminId = $_SESSION['adminId'];
} else {
  header('Location: index.php'); //Aqui lo redireccionas al lugar que quieras.
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="../../../develop-your-project-in-php/assets/css/style.css" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/9cf497312c.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body id="clientDashBody">
  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap justify-content-between">

      <ul class="nav nav-pills flex-column flex-sm-row">
        <li class="nav-item"><a class="flex-sm-fill text-sm-center nav-link link-dark" href="../../../develop-your-project-in-php/views/main/main.php">Home</a></li>
        <li class="nav-item"><a class="flex-sm-fill text-sm-center nav-link link-dark bg-secondary active" href="index.php?controller=Client&action=getAllClients">Clients Dashboard</a></li>
        <li class="nav-item"><a class="flex-sm-fill text-sm-center nav-link link-dark" href="index.php?controller=Travel&action=getAllTravels">Travels Dashboard</a></li>

      </ul>



      <ul class="nav">
        <?php if (!isset($_SESSION['adminId'])) : ?>

        <?php else : ?>
          <li class="nav-item"><a style="font-weight: 900;" class="nav-link link-dark px-2">
              <?php if (isset($_SESSION['adminId'])) {
                // split white space and get the name
                echo explode(" ", $_SESSION['adminName'])[0];
              } else {
                echo 'Guest';
              }
              ?> </a></li>
          <li class="nav-item"><a href="controllers/loginController.php?end=logout" class="nav-link link-dark px-2"><i class="fas fa-sign-out-alt" style="color: red;"></i></a></li>
      </ul>
    <?php endif; ?>
    </div>
  </nav>

  <div style="padding: 80px;">
    <h3 style="vertical-align: inherit; padding: 20px;">Clients</h3>

    <table class="table table-striped table-sm">
      <thead>

        <tr>
          <th scope="col">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Id</font>
            </font>
          </th>
          <th scope="col">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Name</font>
            </font>
          </th>
          <th scope="col">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">UserName</font>
            </font>
          </th>
          <th scope="col">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Email</font>
            </font>
          </th>
          <th scope="col">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">City</font>
            </font>
          </th>
          <th scope="col">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Phone Number</font>
            </font>
          </th>
          <th scope="col">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Actions</font>
            </font>
          </th>

        </tr>

      </thead>
      <tbody>
        <?php
        foreach ($this->data as $index => $client) {
          echo "<tr>";
          echo "<td class='tg-0lax'>" . $client["id_client"] . "</td>";
          echo "<td class='tg-0lax'>" . $client["name"] . "</td>";
          echo "<td class='tg-0lax'>" . $client["surname"] . "</td>";
          echo "<td class='tg-0lax'>" . $client["email"] . "</td>";
          echo "<td class='tg-0lax'>" . $client["city"] . "</td>";
          echo "<td class='tg-0lax'>" . $client["phone_number"] . "</td>";
          echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=Client&action=getClient&id_client=" . $client["id_client"] . "'><i class='fas fa-edit'></i></a>

                <a class='btn btn-danger' href='?controller=Client&action=deleteClient&id_client=" . $client["id_client"] . "'><i class='fas fa-trash-alt'></i></a>
                </td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=Client&action=createClient">Create</a>

    <div class="footer-clientDash">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24">
              <use xlink:href="#bootstrap" />
            </svg>
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
</body>

</html>
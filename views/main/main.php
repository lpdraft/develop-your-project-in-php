<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <button><a href="../../Sessionhelper/logout.php">Log Out</a></button>
    <h1>Welcome to Home Page: <?php echo $admin->getAdmin(); ?></h1>

    <div class="list-group">
        <a class="list-group-item list-group-item-action" href="?controller=Client&action=getAllClients">Clients Controller</a>
        <a class="list-group-item list-group-item-action" href="?controller=Travel&action=getAllTravels">Travel Controller</a>
</body>

</html>


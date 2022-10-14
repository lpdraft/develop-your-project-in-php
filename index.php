<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="/assets/js/app.js" defer></script>
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/9cf497312c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
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

    <?php

require_once "config/constants.php";
require_once "config/db.php";
require_once "core/classes/Database.php";
require_once "core/classes/Model.php";
require_once "core/classes/View.php";
require_once "core/classes/Controller.php";

require_once "core/Router.php";

$router = new Router();
?>



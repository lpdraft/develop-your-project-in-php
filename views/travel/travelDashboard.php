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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="../../views/main/main.php" class="nav-link link-dark px-2 active" aria-current="page">Home</a>
            </li>
            <li class="nav-item"><a href="index.php?controller=Client&action=getAllClients" class="nav-link link-dark px-2">Clients Dashboard</a></li>
            <li class="nav-item"><a href="index.php?controller=Travel&action=getAllTravels" class="nav-link link-dark px-2">Travels Dashboard</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">About</a></li>
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="./views/login/login.php" class="nav-link link-dark px-2">Login</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Sign up</a></li>
        </ul>
    </div>
</nav>

<body>

    <div style="padding: 80px;">
        <h3 style="vertical-align: inherit; padding: 20px;">Travels</h3>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Origen</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Destination</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Fecha de entrada</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Fecha de salida</font>
                        </font>
                    </th>
                    <th scope="col">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">precios</font>
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
                foreach ($this->data as $index => $travel) {
                    echo "<tr>";

                    echo "<td class='tg-0lax'>" . $travel["origin"] . "</td>";
                    echo "<td class='tg-0lax'>" . $travel["destination"] . "</td>";
                    echo "<td class='tg-0lax'>" . $travel["entrance"] . "</td>";
                    echo "<td class='tg-0lax'>" . $travel["departure"] . "</td>";
                    echo "<td class='tg-0lax'>" . $travel["price"] . "</td>";

                    echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=Travel&action=getTravel&id_dest=" . $travel["id_dest"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=Travel&action=deleteTravel&id_dest=" . $travel["id_dest"] . "'>Delete</a>
                </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a id="home" class="btn btn-primary" href="?controller=Travel&action=createTravel">Create</a>
        <a id="home" class="btn btn-secondary" href="">Back</a>
</body>

</html>
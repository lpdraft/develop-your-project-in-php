<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <h1>Travel Dashboard page!</h1>
    <style type="text/css">

    </style>
    <table class="table">
        <thead>
            <tr>
                <th class="tg-0pky">ID</th>
                <th class="tg-0pky">Origen</th>
                <th class="tg-0pky">Destination</th>
                <th class="tg-0lax">Entrance</th>
                <th class="tg-0lax">Dep</th>
                <th class="tg-0lax">Price</th>
                <th class="tg-0lax">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $travel) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $travel["id_dest"] . "</td>";
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
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>

</html>


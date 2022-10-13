<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $client) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $client["id_admin"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["name"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["surname"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["username"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["email"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["city"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["phone_number"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=Employee&action=getEmployee&id=" . $client["id_admin"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=Employee&action=deleteEmployee&id=" . $client["id_admin"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=Employee&action=createEmployee">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>

</html>
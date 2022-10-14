<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="/assets/js/app.js" defer></script>
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/9cf497312c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


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

        </thead>
        <tbody>
            <?php
            foreach ($this->data as $index => $client) {
                echo "<tr>";
                echo "<td class='tg-0lax'>" . $client["id_admin"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["name"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["surname"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["email"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["city"] . "</td>";
                echo "<td class='tg-0lax'>" . $client["phone_number"] . "</td>";
                echo "<td colspan='2' class='tg-0lax'>
                <a class='btn btn-secondary' href='?controller=Client&action=getClient&id_admin=" . $client["id_admin"] . "'>Edit</a>
                <a class='btn btn-danger' href='?controller=Client&action=deleteClient&id_admin=" . $client["id_admin"] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a id="home" class="btn btn-primary" href="?controller=Client&action=createClient">Create</a>
    <a id="home" class="btn btn-secondary" href="./">Back</a>
</body>

</html>
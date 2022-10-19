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
    <link href="../../../develop-your-project-in-php/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5fe3336987.js" crossorigin="anonymous"></script>
</head>

<body id="clientBody">
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



    <div class="container">
        <h1 class="h1edits"><?php echo isset($this->data['name']) ? $this->data['name'] . ' ' . $this->data['surname'] : null ?></h1>
        </br>

        <?php
        if ($this->action == "getClient" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
            echo "<p>The client does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
        <form class="mb-5 needs-validation" action="index.php?controller=Client&action=<?php echo isset($this->data['id_client']) ? "updateClient" : "createClient" ?>" method="post">
            <input type="hidden" name="id_client" value="<?php echo isset($this->data['id_client']) ? $this->data['id_client'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" value="<?php echo isset($this->data['name']) ? $this->data['name'] : null ?>" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="name">Last Name</label>
                        <input required type="text" value="<?php echo isset($this->data['surname']) ? $this->data['surname'] : null ?>" class="form-control" id="lastName" name="surname" aria-describedby="lastnameHelp" placeholder="Enter last name">
                    </div>
                </div>
            </div>

            <div class="form-row">

                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input required type="email" value="<?php echo isset($this->data['email']) ? $this->data['email'] : null ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" value="<?php echo isset($this->data['city']) ? $this->data['city'] : null ?>" class="form-control" id="city" name="city" aria-describedby="CityHelp" placeholder="Enter City">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="phoneNumber">PhoneNumber</label>
                        <input type="text" value="<?php echo isset($this->data['phone_number']) ? $this->data['phone_number'] : null ?>" class="form-control" id="phoneNumber" name="phone_number" aria-describedby="phoneNumberHelp" placeholder="Enter phoneNumber">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Client&action=getAllClients"; ?>">Return</a>
        </form>
    </div>
    <div class="container footer-travelDashForm">
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
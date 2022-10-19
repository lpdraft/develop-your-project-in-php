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

<body id="travelBody">
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap justify-content-between">

            <ul class="nav nav-pills flex-column flex-sm-row">
                <li class="nav-item"><a class="flex-sm-fill text-sm-center nav-link link-dark" href="../../../develop-your-project-in-php/views/main/main.php">Home</a></li>
                <li class="nav-item"><a class="flex-sm-fill text-sm-center nav-link link-dark " href="index.php?controller=Client&action=getAllClients">Clients Dashboard</a></li>
                <li class="nav-item"><a class="active bg-secondary flex-sm-fill text-sm-center nav-link link-dark" href="index.php?controller=Travel&action=getAllTravels">Travels Dashboard</a></li>

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
        <h1 class="h1edits"><?php if (isset($this->data)) {
                                // echo `<i class='fa-solid fa-plane'></i>`;
                                echo isset($this->data['origin']) ? $this->data['origin'] : null;
                                echo ' ';
                                echo "<i class='fa-solid fa-plane'></i>";
                                echo ' ';
                            } else {
                                echo ' Where do you want to travel? ';
                            } ?> <?php echo isset($this->data['destination']) ? $this->data['destination'] : null ?></h1>
        </br>

        <?php
        if ($this->action == "getTravel" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
            echo "<p>The travel does not exists!</p>";
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>

        <form class="mb-5 needs-validation" action="index.php?controller=Travel&action=<?php echo isset($this->data['id_dest']) ? "updateTravel" : "createTravel" ?>" method="post">
            <input type="hidden" name="id_dest" value="<?php echo isset($this->data['id_dest']) ? $this->data['id_dest'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="origin">Origin <i class="fa-solid fa-plane-departure"></i></label>
                        <input required type="text" value="<?php echo isset($this->data['origin']) ? $this->data['origin'] : null ?>" class="form-control" id="origin" name="origin" aria-describedby="origin" placeholder="Enter origin">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="destination">Destination <i class="fa-solid fa-plane-arrival"></i></label>
                        <input required type="text" value="<?php echo isset($this->data['destination']) ? $this->data['destination'] : null ?>" class="form-control" id="destination" name="destination" aria-describedby="destination" placeholder="Enter destination">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="departure">Departure</label>
                        <input required type="date" value="<?php echo isset($this->data['departure']) ? $this->data['departure'] : null ?>" class="form-control" id="departure" name="departure" aria-describedby="departure" placeholder="Enter departure">

                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="arrival">Arrival</label>
                        <input required type="date" value="<?php echo isset($this->data['arrival']) ? $this->data['arrival'] : null ?>" class="form-control" id="arrival" name="arrival" aria-describedby="arrival" placeholder="Enter arrival">

                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" value="<?php echo isset($this->data['price']) ? $this->data['price'] : null ?>" class="form-control" id="price" name="price" aria-describedby="price" placeholder="Enter price">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Travel&action=getAllTravels"; ?>">Return</a>
        </form>
    </div>

    <div class="container footer-travelDash">
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
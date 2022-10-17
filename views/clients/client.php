<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Client's page!</h1>
        </br>

        <?php
        if ($this->action == "getClient" && (!isset($this->data) || !$this->data || sizeof($this->data) == 0)) {
<<<<<<< HEAD
            echo "<p>The Client does not exists!</p>";
=======
            echo "<p>The client does not exists!</p>";
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
        } else if (isset($error)) {
            echo "<p>$error</p>";
        }
        ?>
        <form class="mb-5 needs-validation" action="index.php?controller=Client&action=<?php echo isset($this->data['id_admin']) ? "updateClient" : "createClient" ?>" method="post">
            <input type="hidden" name="id_admin" value="<?php echo isset($this->data['id_admin']) ? $this->data['id_admin'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required type="text" value="<?php echo isset($this->data['name']) ? $this->data['name'] : null ?>" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
<<<<<<< HEAD
                        <label for="name">SurName</label>
                        <input required type="text" value="<?php echo isset($this->data['surname']) ? $this->data['surname'] : null ?>" class="form-control" id="surname" name="surname" aria-describedby="surnameHelp" placeholder="Enter surname">
=======
                        <label for="name">Last Name</label>
                        <input required type="text" value="<?php echo isset($this->data['surname']) ? $this->data['surname'] : null ?>" class="form-control" id="lastName" name="surname" aria-describedby="lastnameHelp" placeholder="Enter last name">
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
                    </div>
                </div>
            </div>

            <div class="form-row">
<<<<<<< HEAD
                <div class="col">
                <div class="col">
                    <div class="form-group">
                        <label for="name">UserName</label>
                        <input required type="text" value="<?php echo isset($this->data['username']) ? $this->data['username'] : null ?>" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter username">
                    </div>
                </div>
=======
              
                <div class="col">
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input required type="email" value="<?php echo isset($this->data['email']) ? $this->data['email'] : null ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
<<<<<<< HEAD
                </div>
                
            </div>
                
=======
                </div>                
            </div>
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="city">City</label>
<<<<<<< HEAD
                        <input type="text" value="<?php echo isset($this->data['city']) ? $this->data['city'] : null ?>" class="form-control" id="city" name="city" aria-describedby="cityHelp" placeholder="Enter City">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="phoneNumber">PhoneNumber</label>
                        <input type="text" value="<?php echo isset($this->data['phone_number']) ? $this->data['phone_number'] : null ?>" class="form-control" id="phone_number" name="phone_number" aria-describedby="phoneNumberHelp" placeholder="Enter phoneNumber">
=======
                        <input type="text" value="<?php echo isset($this->data['city']) ? $this->data['city'] : null ?>" class="form-control" id="city" name="city" aria-describedby="CityHelp" placeholder="Enter City">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="phoneNumber">PhoneNumber</label>
                        <input type="text" value="<?php echo isset($this->data['phone_number']) ? $this->data['phone_number'] : null ?>" class="form-control" id="phoneNumber" name="phone_number" aria-describedby="phoneNumberHelp" placeholder="Enter phoneNumber">
>>>>>>> b7a271ccf0ba2c23013237d64d3c53f7a550529f
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Client&action=getAllClients"; ?>">Return</a>
        </form>
    </div>
</body>

</html>
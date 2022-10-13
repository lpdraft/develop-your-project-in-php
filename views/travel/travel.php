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
        <h1>Travel's page!</h1>
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
                        <label for="origin">Origin</label>
                        <input required type="text" value="<?php echo isset($this->data['origin']) ? $this->data['origin'] : null ?>" class="form-control" id="origin" name="origin" aria-describedby="origin" placeholder="Enter origin">
                    </div>

                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="destiantion">Destiantion</label>
                        <input required type="text" value="<?php echo isset($this->data['destination']) ? $this->data['destination'] : null ?>" class="form-control" id="destination" name="destination" aria-describedby="destination" placeholder="Enter destination">
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="entrance">Entrance</label>
                        <input required type="date" value="<?php echo isset($this->data['entrance']) ? $this->data['entrance'] : null ?>" class="form-control" id="entrance" name="entrance" aria-describedby="entrance" placeholder="Enter entrance">
                        
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="departure">Departure</label>
                        <input required type="date" value="<?php echo isset($this->data['departure']) ? $this->data['departure'] : null ?>" class="form-control" id="departure" name="departure" aria-describedby="departure" placeholder="Enter departure">
                        
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
                
            <button type="submit" class="btn btn-primary">Submit</button>
            <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Travel&action=getAllTravels"; ?>">Return</a>
        </form>
    </div>
</body>

</html>
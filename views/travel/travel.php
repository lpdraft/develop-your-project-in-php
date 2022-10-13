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
        <form class="mb-5 needs-validation" action="?controller=Travel&action=<?php echo isset($this->data['id_dest']) ? "updateTravel" : "createTravel" ?>" method="post">
            <input type="hidden" name="id" value="<?php echo isset($this->data['id_dest']) ? $this->data['id_dest'] : null ?>">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Origin</label>
                        <input required type="text" value="<?php echo isset($this->data['origin']) ? $this->data['origin'] : null ?>" class="form-control" id="origin" name="origin" aria-describedby="origin" placeholder="Enter origin">
                    </div>
                    <div class="col">
                    <div class="form-group">
                        <label for="name">Destination</label>
                        <input required type="text" value="<?php echo isset($this->data['destination']) ? $this->data['destination'] : null ?>" class="form-control" id="destination" name="destination" aria-describedby="destination" placeholder="Enter destination">
                    </div>
                    <div class="col">
                    <div class="form-group">
                        <label for="name">Arrival</label>
                        <input required type="text" value="<?php echo isset($this->data['arrarrival']) ? $this->data['arrival'] : null ?>" class="form-control" id="arrival" name="arrival" aria-describedby="arrival" placeholder="Enter arrival">
                    </div>
                    <div class="col">
                    <div class="form-group">
                        <label for="name">Depurate</label>
                        <input required type="text" value="<?php echo isset($this->data['depurate']) ? $this->data['depurate'] : null ?>" class="form-control" id="depurate" name="depurate" aria-describedby="depurate" placeholder="Enter depurate">
                    </div>
                    <div class="col">
                    <div class="form-group">
                        <label for="name">Price</label>
                        <input required type="text" value="<?php echo isset($this->data['price']) ? $this->data['price'] : null ?>" class="form-control" id="price" name="price" aria-describedby="price" placeholder="Enter price">
                    </div>
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a id="return" class="btn btn-secondary" href="<?php echo "?controller=Travel&action=getAllTravels&action=getAllTravels"; ?>">Return</a>
        </form>
    </div>
</body>

</html>
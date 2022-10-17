<?php 
session_start();
?>

<?php include_once ('../../assets/html/header.php'); ?>
    <h3>@Session_Started</h3>
    <h1 id="index-text">Welcome Back,     
        <?php if(isset($_SESSION['adminId'])){
            // split white space and get the name
            echo explode(" ", $_SESSION['adminName'])[0];
        }else{
            echo 'Guest';
        } 
    ?> </h1>
      
<?php include_once ('../../assets/html/footer.php'); ?>

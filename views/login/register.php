<?php 
include_once('../../assets/html/header.php');
include_once('/xampp/htdocs/develop-your-project-in-php/Sessionhelper/session_helper.php')
?>


<h1 class="header">Please Signup</h1>

<?php flash('register') ?>

<form method="post" action="../../controllers/LoginController.php">
	<input type="hidden" name="type" value="register">
	<input type="text" name="usersName" 
	placeholder="Full name...">
	<input type="text" name="usersEmail" 
	placeholder="Email...">
	<input type="text" name="usersUid" 
	placeholder="Username...">
	<input type="password" name="usersPwd" 
	placeholder="Password...">
	<input type="password" name="pwdRepeat" 
	placeholder="Repeat password">
	<button type="submit" name="submit">Sign Up</button>
</form>
    


<?php require_once('/xampp/htdocs/develop-your-project-in-php/assets/html/footer.php');?>
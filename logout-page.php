<!DOCTYPE html>
<head>
    <title>cookdeck - Logout Page</title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
    <link rel="stylesheet" href="css/logout.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
<head>
</html>

<?php
	session_start();
 	session_destroy();
?>

<?php
    include("includes/header.html");
?>

<html>
<body>

<div class="logout">
<img src="images/cdlogo.png">
<p>Thank you for using cookdeck!</p>
<div class="link">
	<a href="home-page.php">Return Home</a>
</div>
</div>

</body>
</html>

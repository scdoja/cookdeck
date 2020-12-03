<!DOCTYPE html>
<head>
    <title>cookdeck - Logout Page</title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
<head>
</html>

<?php
	session_start();
 	session_destroy();
?>

<html>
<p>You have successfully logged out.</p>
	<a href="login-page.php">Login here</a>
</html>

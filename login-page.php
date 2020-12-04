<!DOCTYPE html>
<head>
    <title>cookdeck - Login</title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
    <link rel="stylesheet" href="css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>


<head>
</html>

<?php
    include("includes/header.html");
?>

<!DOCTYPE html>

<div class = "login">
    <h1 id="logintitle">login</h1>
</div>

<body>
    <div class = "form">
    <form action="process-login-page.php" method="POST">
        <p>Username</p> <input type="text" name="username" placeholder="username..." />
        <p>Password</p> <input type="text" name="password" placeholder="password..."/>
        <input type="submit"/>
    </form>

</div>
</body>
</html>

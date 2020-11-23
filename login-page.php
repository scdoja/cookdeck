<!DOCTYPE html>
<head>
    <title>cookdeck - Login</title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
<head>
</html>

<?php
    include("includes/header.html");
?>

<!DOCTYPE html>
<h1>Login</h1>

<body>
    <form action="process-login-page.php" method="POST">
        Username: <input type="text" name="username" />
        Password: <input type="text" name="password" />
        <input type="submit"/>
    </form>
</body>
</html>

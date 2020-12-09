<!DOCTYPE html>
<head>
    <title>cookdeck - Register</title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
    <link rel="stylesheet" href="css/register-page.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
<head>
</html>

<?php
    include("includes/header.html");
?>

<!DOCTYPE html>
<html>
<div class = "register">
    <h1 id="registertitle">register</h1>
</div>

<body>

    <div class = "message">
    <h1 id="message"></h1>
    <a id="link"></a>
    </div>

<div class = "form">

    <form action="process-register-page.php" method="POST">

        <p>First Name</p> <input type="text" name="firstName" id="firstName" placeholder="first name..."/>
        <p>Last Name</p>  <input type="text" name="lastName" id="lastName" placeholder="last name..."/>
        <p>Email Address</p> <input type="text" name="emailAddress" id="emailAddress" placeholder="email address..."/>

        <p>Username</p> <input type="text" name="username" id="username" placeholder="username..."/>
        <p>Password</p> <input type="text" name="password" id="password" placeholder="password..."/>

        <p>Select Your Lifestyle</p> <select id="lifeStyle" name="lifeStyle">
            <option value="student">Student</option>
            <option value="professional">Professional</option>
            <option value="family">Family</option>
        </select>
        <input type="submit" id="submit">

</form>
<script src="js/register.js"></script>
</div>

</body>
</html>

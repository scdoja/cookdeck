<!DOCTYPE html>
<head>
    <title>cookdeck - Home</title>
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
<h1>Register</h1>

<body>
    <form action="process-register-page.php" method="POST">
        First Name: <input type="text" name="firstName"/>
        Last Name:  <input type="text" name="lastName"/>
        Email Address: <input type="text" name="emailAddress"/>
        Username: <input type="text" name="username"/>
        Password: <input type="text" name="password"/>
        Lifestyle:<select id="lifeStyle" name="lifeStyle">
                    <option value="student">Student</option>
                    <option value="professional">Professional</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="family">Family</option>
                    </select>
        Calories:<select id="calories" name="calories">
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                    </select>
        <input type="hidden" id="user" name="user" value="user"/>
        <input type="submit">
    </form>
</body>
</html>

<!DOCTYPE html>
<head>
    <title>cookdeck - Explore</title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
    <link rel="stylesheet" href="css/explore.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
<head>
</html>

<?php
    include("includes/header.html");
    session_start();
    if(isset($_SESSION["personId"]));
?>

<!DOCTYPE html>
<html>
<body>

<div class = "explore">
    <h1 id="exploretitle">explore</h1>
</div>

<div class = "student">
    <img id="stu" src="images/student.png" width="80" height="80">
    <h1 id="studentitle">explore student lifestyle recipes</h1>
        <a href="view-recipe-student.php" class="button">explore here</a>
</div>

<div class = "professional">
    <img id="prof" src="images/prof.png" width="65" height="65">
    <h1 id="proftitle">explore professional lifestyle recipes</h1>
        <a href="view-recipe-professional.php" class="button2">explore here</a>
</div>

<div class = "family">
    <img id="fam" src="images/fam.png" width="75" height="75">
    <h1 id="famtitle">explore family lifestyle recipes</h1>
        <a href="view-recipe-family.php" class="button">explore here</a>
</div>

<div class = "user">
    <img id="user" src="images/user.png" width="75" height="75">
    <h1 id="usertitle">explore user suggested recipes</h1>
        <a href="view-recipe-user.php" class="button2">explore here</a>
</div>


</body>
</html>

<?php
    include("includes/footer.html");
?>

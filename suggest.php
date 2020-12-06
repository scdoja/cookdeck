<!DOCTYPE html>
<head>
    <title>cookdeck - Suggest Recipes</title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
    <link rel="stylesheet" href="css/suggest.css">
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
<div class = "suggest">
    <h1 id="suggesttitle">submit recipe suggestions</h1>
</div>

<body>
    <div class = "message">
    <h1 id="message"></h1>
    <a id="link"></a>
    </div>

<div class="form">

<form method="POST" enctype="multipart/form-data" action="process-suggest-page.php">

    <p>Recipe Name</p> <input type="text" name="recipeName" id="recipeName" placeholder="your recipe name..."/>
    <p>Recipe Ingredients</p>  <input type="text" name="recipeIng" id="recipeIng" placeholder="a few ingredients..."/>
    <p>Your Email</p> <input type="email" name="emailAddress" id="emailAddress" placeholder="email address..." required/>

    <p>Select Recipe Lifestyle</p> <select id="lifeStyle" name="lifeStyle">
                <option value="student">Student</option>
                <option value="professional">Professional</option>
                <option value="family">Family</option>
                </select>
    <input type="submit" id="submit">

</form>
<script src="js/suggest.js"></script>
</div>

<div class = "explore">
<h1 id="exploretitle">start cooking with cookdeck today!</h1>
<a href="explore-page.php" class="button">find your next meal</a>
</div>

</body>
</html>

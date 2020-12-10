<!DOCTYPE html>
<html>
<head>
    <title>cookdeck - Submit Recipes</title>
    <?php
        include("includes/meta.html");
    ?>
    <link rel="stylesheet" href="css/suggest.css">
<head>


<?php
    include("includes/header.html");
    session_start();
    if(isset($_SESSION["personId"]));
?>

<div class = "suggest">
    <h1 id="suggesttitle">submit your recipe</h1>
    <a href="view-recipe-user.php" class="button">Explore User Recipes</a>
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

    <p>Upload Recipe Image</p> <input type="file" name="image" id="image"/>

    <input type="submit" id="submit">

</form>
<script src="js/suggest.js"></script>
</div>

</body>
</html>

<!DOCTYPE html>
<head>
    <title>cookdeck - Family Lifestyle Recipes </title>
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

<?php
    include('includes/db-config.php');

    $stmt = $pdo->prepare("SELECT * FROM `recipes` WHERE `lifeStyle` = 'family'");

    $stmt->execute();

    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){

        echo("<div>");
        echo "<img src='repimages/".$row['image']."'height=350px'/>";
        echo("<h1>");
        echo($row["recipeTitle"]);
        echo("</h1>");

        echo("<p>");
        echo($row["preview"]);
        echo("<p>");

        echo("<h2>");
        echo("recipe ingredients");
        echo("</h2>");

        echo("<p>");
        echo($row["ingredients"]);
        echo("</p>");

        echo "<a href='view-recipe.php?recipeId=".$row['recipeId']."'>View Full Recipe</a>";
        echo("<div>");
}

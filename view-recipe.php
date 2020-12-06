<!DOCTYPE html>
<head>
    <title>cookdeck - recipes</title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
    <link rel="stylesheet" href="css/recipe.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
<head>
</html>

<?php
    include("includes/header.html");
    session_start();
    if(isset($_SESSION["personId"]));
?>

<?php
    $recipeId = $_GET["recipeId"];
    include('includes/db-config.php');


    $stmt = $pdo->prepare("SELECT * FROM `recipes` WHERE `recipes`.`recipeId` = $recipeId;");

    $stmt->execute();

    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){

        echo("<div class='recipe'>");

        echo("<div class='img'>");
        echo "<img src='repimage/".$row['image']."'width=550px'/>";
        echo("</div>");

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

        echo("<h2>");
        echo("cooking steps");
        echo("</h2>");

        echo("<p>");
        echo($row["content"]);
        echo("</p>");

        echo("</div>");
}
?>
<html>
<div class = "explore">
<h1 id="exploretitle">explore more recipes like this one on cookdeck</h1>
<a href="http://localhost/cookdeck/explore-page.php" class="button">explore here</a>
</div>

</body>
</html>

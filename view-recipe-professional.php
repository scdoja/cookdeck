<!DOCTYPE html>
<head>
    <title>cookdeck - Professional Lifestyle Recipes </title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
    <link rel="stylesheet" href="css/prof.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
<head>
</html>

<?php
    include("includes/header.html");
?>

<!DOCTYPE html>
<html>
<body>

<div class = "professional">
    <h1 id="proftitle">professional recipes</h1>
</div>

<?php
    include('includes/db-config.php');

    $stmt = $pdo->prepare("SELECT * FROM `recipes` WHERE `lifeStyle` = 'professional'");

    $stmt->execute();

    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){

        echo("<div class='recipe'>");

        echo("<div class='img'>");
        echo "<img src='repimage/".$row['image']."'height=350px'/>";
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

        echo("<div class='link'>");
        echo "<a href='view-recipe.php?recipeId=".$row['recipeId']."'>View Full Recipe</a>";
        echo("</div>");

        echo("</div>");
}
?>
<div class = "explore">
<h1 id="exploretitle">explore more lifestyle recipes down below...</h1>
</div>

<div class = "student">
<h1 id="studentitle">explore student lifestyle recipes here</h1>
<a href="http://localhost/cookdeck/view-recipe-student.php" class="button">explore here</a>
</div>

<div class = "family">
<h1 id="famtitle">explore family lifestyle recipes here</h1>
<a href="http://localhost/cookdeck/view-recipe-family.php" class="button2">explore here</a>
</div>

</body>
</html>

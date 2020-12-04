<!DOCTYPE html>
<head>
    <title>cookdeck - Student Lifestyle Recipes </title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/student.css">
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
<head>
</html>

<?php
    include("includes/header.html");
?>

<!DOCTYPE html>
<html>
<body>

<div class = "student">
    <h1 id="studenttitle">student recipes</h1>
</div>
</body>
</html>

<?php
    include('includes/db-config.php');

    $stmt = $pdo->prepare("SELECT * FROM `recipes` WHERE `lifeStyle` = 'student'");

    $stmt->execute();

    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){

        echo("<div class='recipe'>");

        echo("<div class='img'>");
        echo "<img src='repimages/".$row['image']."'width=350px'/>";
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

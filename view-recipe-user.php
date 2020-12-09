<!DOCTYPE html>
<head>
    <title>cookdeck - Student Lifestyle Recipes </title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewsuggest.css">
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

<div class = "suggest">
    <h1 id="suggesttitle">user submitted recipes</h1>
    <a href="suggest.php" class="button">Submit Your Recipe</a>
</div>

<?php
    include('includes/db-config.php');

    $stmt = $pdo->prepare("SELECT * FROM `suggest`");

    $stmt->execute();

    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){

        echo("<div class='recipe'>");

        echo("<div class='img'>");
        echo "<img src='uploads/".$row['image']."'height=350px'/>";
        echo("</div>");

        echo("<h1>");
        echo($row["recipeName"]);
        echo("</h1>");

        echo("<h2>");
        echo("ingredients");
        echo("</h2>");

        echo("<p>");
        echo($row["recipeIng"]);
        echo("</p>");

        echo("<h2>");
        echo("recipe creator");
        echo("</h2>");

        echo("<p>");
        echo($row["emailAddress"]);
        echo("</p>");

        echo("<h2>");
        echo("recipe lifestyle");
        echo("</h2>");

        echo("<p>");
        echo($row["lifeStyle"]);
        echo("</p>");

        echo("<div class='link'>");
        echo "<a href='view-user-recipe.php?recipeId=".$row['recipeId']."'>View Full Recipe</a>";
        echo("</div>");

        echo("</div>");
}
?>
<html>
<div class = "explore">
    <h1 id="exploretitle">explore cookdeck's lifestyle recipes here</h1>
        <a href="explore-page.php" class="button2">explore here</a>
</div>

</body>
</html>

<?php
    include("includes/footer.html");
?>

<!DOCTYPE html>
<head>
    <title>cookdeck - recipes</title>
    <meta charset="utf-8">
	<meta name="description" content="cookdeck - Explore Page">
	<meta name="keywords" content="food, recipes, health, cooking">
	<link rel="author" content="Jason Do">
    <link rel="stylesheet" href="css/recipe-page.css">
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


    $stmt = $pdo->prepare("SELECT * FROM `suggest` WHERE `suggest`.`recipeId` = $recipeId;");

    $stmt->execute();

    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){

        echo("<div class='recipe'>");

        echo("<div class='img'>");
        echo "<img src='uploads/".$row['image']."'width=350px'/>";
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

        echo("</div>");
}
?>

<html>
<div class = "tweet">
<a class="twtbutton"
href="https://twitter.com/intent/tweet?url=http%3A%2F%2Flocalhost%2Fcookdeck%2Fhome-page.php&text=I%20just%20found%20a%20recipe%20on%20cookdeck%21%20Find%20your%20next%20meal%20too%21&hashtags=cookdeck%2CIMM2021"
data-size="large"><p id="tweettext">share cookdeck recipe!</p></a>
</div>

<script>"js/tweet.js"</script>

<div class = "explore">
    <h1 id="exploretitle">explore more recipes like this one on cookdeck</h1>
        <a href="explore-page.php" class="button">explore here</a>
    </div>


</body>
</html>

<?php
    include("includes/footer.html");
?>

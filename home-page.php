<!DOCTYPE html>
<html>
<head>
    <title>cookdeck - Home</title>
    <?php
        include("includes/meta.html");
    ?>
    <link rel="stylesheet" href="css/home-page.css">
<head>

<?php
    include("includes/header.html");
    session_start();
    if(isset($_SESSION["personId"]));
?>

<body>

<div class = "home">
    <h1 id="hometitle">cookdeck</h1>
</div>

<div class = "intro">
<h1 id="title">cooking recipes, simplified!</h1>
    <p id="about">explore recipes based on your lifestyle choices. cookdeck
    helps you stay organized, so you can focus on cooking & eating.</p>
        <a href="register-page.php" class="button">Find Your Next Meal!</a>
</div>

<div class = "benefit2">
    <h1 id="title3">why cookdeck?</h1>
    <p id="about3">we focus on your health & well-being, so
        you can enjoy your favourite meals no matter your lifestyle.</p>
            <img id="food" src="images/food.png" width="100" height="100">
</div>

<div class = "benefit">
<h1 id="title2">your lifestyle, your cooking recipes!</h1>
    <p id="about2">busy? lazy? no life? explore cooking recipes based on your lifestyle. cookdeck provides recipes
        for most lifestyles...even yours.</p>
            <img id="cook" src="images/cooking.png" width="100" height="100">
</div>

<div class = "benefit2">
<h1 id="title2">have your own recipe? submit it here on cookdeck!</h1>
    <p id="about2">submit or suggest your recipes to cookdeck! make sure to include your recipe lifestyle! users of cookdeck
    are able to view your recipes!</p>
            <a href="suggest.php" class="button">Submit Recipe Here!</a>
</div>

</body>
</html>

<?php
    include("includes/footer.html");
?>

<head>
    <title>cookdeck - Process Suggest Page</title>
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
</head>

<?php
    $recipeName = $_POST["recipeName"];
    $recipeIng = $_POST["recipeIng"];
    $emailAddress = $_POST["emailAddress"];
    $lifeStyle = $_POST["lifeStyle"];

    include('includes/db-config.php');

    $stmt = $pdo->prepare("INSERT INTO `suggest` (`recipeName`, `recipeIng`, `emailAddress`,`lifeStyle`)
    VALUES ('$recipeName', '$recipeIng', '$emailAddress', '$lifeStyle');");

    $stmt->execute();

?>
    <p>Thank you for suggesting a recipe</p><a href="home-page.php">Back to Homepage</a>

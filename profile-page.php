<!DOCTYPE html>
<head>
    <title>cookdeck - Profile Page</title>
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
<h1>Profile</h1>

<?php
    include('includes/db-config.php');

    $stmt = $pdo->prepare("SELECT * FROM `person`");

    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo("<label>First Name:</label>").$row["firstName"];
    echo("<label>Last Name:</label>").$row["lastName"];
    echo("<label>Username:</label>").$row["username"];
    echo("<label>Lifestyle:</label>").$row["lifeStyle"];
    echo("<label>Calories:</label>").$row["calories"];

?>
<?php
}
?>

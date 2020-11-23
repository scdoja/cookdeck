<head>
    <title>cookdeck - Process Login Page</title>
    <link rel='icon' type="image/png" sizes="32x32" href='favicon/favicon.png'>
</head>

<?php
session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];

	include('includes/db-config.php');

	$stmt = $pdo->prepare("SELECT * FROM `person`
	WHERE `username` = '$username'
	AND `password` = '$password');");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row["user"] == "$user") {
    header('Location: home-page.php');

}else{
    ?><p>User not found! Please register with cookdeck</p>
    <a href="register-page.php">Register</a><?php
}
?>

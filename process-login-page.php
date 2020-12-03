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
	AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
    $SESSION["personId"] = $row["personId"];
    ?><p>Sucessful Login! Welcome Back.</p>
    <a href="explore-page.php">Go to Feed</a><?php
}else{
    ?><p>Incorrect Login Infomation. Please Try Again!</p>
    <a href="login-page.php">Back to Login</a><?php
}
?>

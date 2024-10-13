<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminHome Page</title>
</head>
<body>
<H1>This is Admin Home</H1><?php echo $_SESSION["username"] ?>
<a href="logout.php">Logout</a>
</body>
</html>
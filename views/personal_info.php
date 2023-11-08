<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header("Location: ../login_view.php");
    die();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Personal Info</h1>
</body>
</html>
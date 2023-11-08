<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $email = $_POST["email"];
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    require_once "../config/database.php";

    $mysqli->query("insert into users(email, password_hash) values('$email', '$password_hash')");

    header("Location: ../views/personal_info.php");
}
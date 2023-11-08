<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "../config/database.php";

    
    $res = $mysqli->query("select id, email, password_hash from users where email = '$email'");
    if($res){
        $row = $res->fetch_assoc();
        if($row && password_verify($password, $row["password_hash"])){
            session_start();
            $_SESSION["user_id"] = $row["id"];
            header("Location: ../views/personal_info.php");

        }

    }

}
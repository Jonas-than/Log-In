<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "../config/database.php";

    $stmt = $mysqli->prepare("SELECT id, email, password_hash FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $email, $passwordHash);
        $stmt->fetch();

        if (password_verify($password, $passwordHash)) {
            session_start();
            $_SESSION["user_id"] = $id;
            header("Location: ../views/personal_info.php");
            exit();
        } else {
            echo "Credenciales incorrectas";
            
            

        }
    } else {
        echo "Usuario no encontrado";
    }


    $stmt->close();
    $mysqli->close();
}
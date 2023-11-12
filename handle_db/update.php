<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    $id = $_SESSION["user_id"];

    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $bio = isset($_POST["bio"]) ? $_POST["bio"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? password_hash($_POST["password"], PASSWORD_DEFAULT) : "";

    $tmp_name = isset($_FILES["imagen"]["tmp_name"]) ? $_FILES["imagen"]["tmp_name"] : "";
    $contenido = (!empty($tmp_name)) ? addslashes(file_get_contents($tmp_name)) : "";

    require_once "../config/database.php";

    $updateFields = array();

    if (!empty($contenido)) {
        $updateFields[] = "photo = '$contenido'";
    }

    if (!empty($name)) {
        $updateFields[] = "name = '$name'";
    }

    if (!empty($bio)) {
        $updateFields[] = "bio = '$bio'";
    }

    if (!empty($phone)) {
        $updateFields[] = "phone = '$phone'";
    }

    if (!empty($email)) {
        $updateFields[] = "email = '$email'";
    }

    if (!empty($password)) {
        $updateFields[] = "password_hash = '$password'";
    }

    if (!empty($updateFields)) {
        $updateFieldsStr = implode(", ", $updateFields);

        $query = "UPDATE users SET $updateFieldsStr WHERE id = $id";

        if ($mysqli->query($query)) {
            echo "Actualización exitosa.";
        } else {
            echo "Error al actualizar: " . $mysqli->error;
        }
    } else {
        echo "No se proporcionaron datos para actualizar.";
    }

    $mysqli->close();

    header("Location: ../views/personal_info.php");
}
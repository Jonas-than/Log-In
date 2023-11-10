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
    <link rel="stylesheet" href="/styles.css">
    <title>Dashboard</title>
</head>
<body>
<div class="main">

    <div class="logout"><img src="" alt=""><span> Jonathan </span><button class="btn-logout"><img src="/public/default/arrow-down.svg" alt=""></button></div>
    <div class="title-personal-info">
    <h1>Personal info</h1>
    <h3>Basic info, like your name and photo</h3>
    </div>
          

        <table class="container-table">
        <tr>
            <td class="container-first-profile">
            <div class="container-title-profile"><h2 class="profile">Profile</h2>
            <span class="social-profile">Some info may be visible to other people</span></div>
            <div class="container-btn-edit"><button class="btn-edit" onclick="window.location.href='change_info.php'">Edit</button></div>
            </td>
        </tr>
        <tr>
        <td class="container-profile-data height-container-img">
            <span class="data-span">PHOTO</span>
        </td>
        </tr>
        <tr>
        <td class="container-profile-data height-container-data">
            <span class="data-span">NAME</span>
            <span class="info-data">Jonathan</span>
        </td>
        </tr>
        <tr>
        <td class="container-profile-data height-container-data">
            <span class="data-span">BIO</span>
            <span class="info-data">Soy un developer</span>
        </td>
        </tr>
        <tr>
        <td class="container-profile-data height-container-data">
            <span class="data-span">EMAIL</span>
            <span class="info-data">Admin@admin</span>
        </td>
        </tr>
        <tr>
        <td class="container-last-profile height-container-data">
            <span class="data-span">PASSWORD</span>
            <span class="info-data">*******</span>
        </td>
        
        </tr>
        </table>

</div>
</body>
</html>
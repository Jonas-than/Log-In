<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header("Location: ../login_view.php");
    die();
}
$id = $_SESSION["user_id"];
require_once "../config/database.php";
    $res = $mysqli->query("select * from users where id = $id");
    $usuario = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <script defer src="../main.js"></script>
    <title>Dashboard</title>
</head>
<body>
<div class="main">

    <div class="logout">
    <button class="btn-logout"><?php
                if(isset($usuario["photo"])){
                    $img = base64_encode($usuario["photo"]);
                echo "<img class='photo-logout' src='data:image/*;base64,$img'/>";
                }else{
                    echo "<img class='photo-logout' src='/public/default/default-avatar.jpg'/>";
                }
                ?>
                <span class="account-profile">
            <?php
                if(isset($usuario["name"])){
                    echo $usuario["name"];
                }else{
                    echo "Your name...";
                }
                 ?></span><img src="/public/default/arrow-down.svg" alt=""></button>
    <div class="modal">
        <button class="btn-profile-logout"><img src="/public/default/account_circle_black_18dp.svg" alt="">My Profile</button>
        <button class="btn-profile-logout"><img src="/public/default/group_black_18dp.svg" alt="">Group Chat</button>
        <button class="btn-logout-design"><img src="/public/default/logout_black_18dp.svg" alt=""><a href="../handle_db/logout.php">Logout</a></button>
    </div>
    </div>
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
            <div class="container-photo-personal">
                <span class="data-span">PHOTO</span>
            <div><?php
                if(isset($usuario["photo"])){
                    $img = base64_encode($data["photo"]);
                echo "<img class='photo' src='data:image/*;base64,$img'/>";
                }else{
                    echo "<img class='photo' src='/public/default/default-avatar.jpg'/>";
                }
            ?></div>
            </div>
        </td>
        </tr>
        <tr>
        <td class="container-profile-data height-container-data">
            <span class="data-span">NAME</span>
            <span class="info-data"><?= $usuario["name"] ?></span>
        </td>
        </tr>
        <tr>
        <td class="container-profile-data height-container-data">
            <span class="data-span">BIO</span>
            <span class="info-data"><?= $usuario["bio"] ?></span>
        </td>
        </tr>
        <tr>
        <td class="container-profile-data height-container-data">
            <span class="data-span">EMAIL</span>
            <span class="info-data"><?= $usuario["email"] ?></span>
        </td>
        </tr>
        <tr>
        <td class="container-last-profile height-container-data">
            <span class="data-span">PASSWORD</span>
            <span class="info-data">********</span>
        </td>
        
        </tr>
        </table>

</div>
</body>
</html>
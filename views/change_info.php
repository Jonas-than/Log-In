<?php
    session_start();
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
    <title>Change Information</title>
</head>
<body>
<div>
    <div class="logout">
    <button class="btn-logout"><?php
                if(isset($usuario["photo"])){
                    $img = base64_encode($usuario["photo"]);
                echo "<img class='photo-logout' src='data:image/*;base64,$img'/>";
                }else{
                    echo "<img class='photo-logout' src='/public/default/default-avatar.jpg'/>";
                }
                ?><span class="account-profile"><?php
                if(isset($usuario["name"])){
                    echo $usuario["name"];
                }else{
                    echo "Your name...";
                }
                 ?></span><img src="/public/default/arrow-down.svg"></button>
    <div class="modal">
        <button class="btn-profile-logout"><img src="/public/default/account_circle_black_18dp.svg" alt="">My Profile</button>
        <button class="btn-profile-logout"><img src="/public/default/group_black_18dp.svg" alt="">Group Chat</button>
        <button class="btn-logout-design"><img src="/public/default/logout_black_18dp.svg" alt=""><a href="../handle_db/logout.php">Logout</a></button>
    </div>
    </div>
    <div class="container-change">
        <div class="container-back">
            <button class="btn-back" onclick="window.location.href='./personal_info.php'"><img src="/public/default/arrow_back.svg"></button><a href="./personal_info.php" class="back">Back</a>
        </div>
        <div class="subcontainer-change">
            <h1>Change Info</h1>
            <span class="changes">Changes will be reflected to every services</span>
            <div class="container-form-change">
            <form action="/handle_db/update.php" method="post" enctype="multipart/form-data">
                <div class="container-photo">
                <label for="change_img">
                    <?php
                if(isset($usuario["photo"])){
                    $img = base64_encode($data["photo"]);
                echo "<img class='photo' src='data:image/*;base64,$img'/>";
                }else{
                    echo "<img class='photo' src='/public/default/default-avatar.jpg'/>";
                }
                ?>
                <span>CHANGE PHOTO</span>
                </label>
                <input type="file" accept="image/*" name="imagen" id="change_img" hidden/>
                </div>

            <label>Name</label>
            <input placeholder="Enter your name..." type="text" name="name" value="<?= $usuario["name"] ?>"/>
            <label>Bio</label>
            <textarea placeholder="Enter your bio..." name="bio" <?= $usuario["bio"] ?>></textarea>
            
            <label>Phone</label>
            <input type="text" name="phone" placeholder="Enter your phone..." value="<?= $usuario["phone"] ?>"/>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email..." value="<?= $usuario["email"] ?>"/>
            <label>Password</label>
            <input type="password" placeholder="Enter your password..." name="password"/>
            <button type="submit" class="btn-save">Save</button>
            </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>
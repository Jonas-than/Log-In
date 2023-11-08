<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Kawi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Sign-Up</title>
</head>
<body>
<main>
    <div class="form">
        <div>
            <div class="container-title">
            <div><span class="line-height font-weight-title font-size-title">Join thousands of learners from around the world</span></div>
            <div><span class="line-height font-weight-span font-size-span">Master web development by making real-life projects.
                There are multiple paths for you to choose
            </span></div>
            </div>
            <div class="container-form">
                <form action="./handle_db/signup.php" method="post">
                    <div class="container-input-icon"><span class="material-symbols-outlined">mail</span><input type="email" name="email" placeholder="Email" class="input-login"></div>
                    <div><input type="password" name="password" placeholder="Password" class="input-login"></div>
                    <button type="submit" class="btn-login">Start coding now</button>
                </form>
            </div>
            <div class="container-media">
                <div class="social"><span class="social-profile">or continue with these social profile</span></div>
                <div><img src="./assets/Google.svg" alt="">
                <img src="./assets/Facebook.svg" alt="">
                <img src="./assets/Twitter.svg" alt="">
                <img src="./assets/Gihub.svg" alt=""></div>
                <div class="member"><span class="social-profile">Already a member?<a href="./login_view.php"> Login</a></span></div>
            </div>
        </div>
    </div>
</main>

    
</body>
</html>
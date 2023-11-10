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
    <title>Log-In</title>
</head>
<body>
<main>
    <div class="form-login">
        <div>
            <div class="container-title container-login">
            <div><span class="line-height font-weight-title font-size-title">Login</span></div>
            
            </div>
            <div class="container-form">
                <form action="./handle_db/login.php" method="post">
                    <div class="container-input-icon"><img src="/public/default/email.svg" alt=""><input type="email" name="email" placeholder="Email" class="input-login"></div>
                    <div class="container-input-icon"><img src="/public/default/lock.svg" alt=""><input type="password" name="password" placeholder="Password" class="input-login"></div>
                    <button type="submit" class="btn-login">Login</button>
                </form>
            </div>
            <div class="container-media">
                <div class="social"><span class="social-profile">or continue with these social profile</span></div>
                <div><img src="./assets/Google.svg" alt="Google">
                <img src="./assets/Facebook.svg" alt="Facebook">
                <img src="./assets/Twitter.svg" alt="Twitter">
                <img src="./assets/Gihub.svg" alt="GitHub"></div>
                <div class="member"><span class="social-profile">Don't have an account yet?<a href="./index.php"> Register</a></span></div>
            </div>
        </div>
    </div>
</main>
    
</body>
</html>
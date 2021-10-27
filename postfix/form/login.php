<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Prak KK</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="POST" action="../index.php">
            <div class="txt_field">
                <input type="text" name="username"> 
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password">
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
                <button type="submit">LOGIN</button>
            <div class="signup_link">
                Not a member? <a href="daftar.php">Signup</a>
            </div>
        </form>
    </div>
</body>
</html>
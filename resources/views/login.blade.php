<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <a class="return" href="{{route('welcome')}}">
    return
    </a>
    <div class="center">
        <h1>LOGIN</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot your Password?</div>
            <input type="submit" value="LOGIN">
            <div class="signup_link">
                Haven't registered? <a href="{{route('signup')}}">SIGN UP</a>
            </div>
        </form>
    </div>
    <div class="image">
        <img src="./assets/img/quiz.jpg" alt="avatar" width="550" height="423">
    </div>
    
</body>
</html>
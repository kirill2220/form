<?php
session_start();
require 'auth.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div>
    <?php
    if (!isset($_COOKIE['user'])):
    ?>
<form id="form" method="post" action="auth.php" name="signin-form" >
    <div class="form-element">
        <label>
            <p>login</p>
        <input type="text" name="login" pattern="[a-zA-Z0-9]+" required />
        </label>
    </div>
    <div class="form-element">
        <label>
            <p>Password</p>

        <input type="password" name="password" required />
        </label>
    </div>
    <button class="login-but" type="submit" name="login" value="login" >Log In</button>
    <button  onclick="location.href = 'Register.php'" >Register</button>
    <p class="msg"></p>
</form>
</div>
<?php  else: ?>
    <p>Привет <?= $_COOKIE['user'] ?>,ты на странице входа<a href="exit.php">Выход</a></p>
<?php endif; ?>
<script src="js/jquery-3.6.1.js"></script>
<script src="js/main.js"></script>
</body>
</html>
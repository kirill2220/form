<?php
require 'function.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<form method="post" action="function.php" name="signup-form">
    <div>
        <div class="form-element">
            <label>
                <p>login</p>
                <input type="text" name="login" title="Должно быть не менее 6"   required/>
<?php
    if (isset($_SESSION['errorlogin'])) {
        echo '<p class="msg">'. $_SESSION['errorlogin'] .'</p>';
    }
unset($_SESSION['errorlogin']);
    ?>
            </label>
        </div>
        <div class="form-element">
            <label>
                <p>Email</p>
            <input type="email" name="email" required/>
                <?php
                if (isset($_SESSION['errorEmail'])) {
                    echo '<p class="msg">'. $_SESSION['errorEmail'] .'</p>';
                }
                unset($_SESSION['errorEmail']);
                ?>
            </label>
        </div>
        <div class="form-element">
            <label>
                <p>Password</p>
                <input type="password" name="password" id="password"    required/>
                <?php
                if (isset($_SESSION['errorPassword'])) {
                    echo '<p class="msg">'. $_SESSION['errorPassword'] .'</p>';
                }
                unset($_SESSION['errorPassword']);
                ?>
            </label>

        </div>

        <div class="form-element">
            <label>
                <p>Confirm_password</p>
                <input type="password" name="Confirm_password" id="confirm_password"   o required/>
                <?php
                if (isset($_SESSION['errorConfirmPassword'])) {
                    echo '<p class="msg">'. $_SESSION['errorConfirmPassword'] .'</p>';
                }
                unset($_SESSION['errorConfirmPassword']);
                ?>
            </label>
        </div>
        <div class="form-element">
            <label>
                <p>Name</p>
            <input type="text" name="Name"  required/>
                <?php
                if (isset($_SESSION['errorName'])) {
                    echo '<p class="msg">'. $_SESSION['errorName'] .'</p>';
                }
                unset($_SESSION['errorName']);
                ?>
            </label>
        </div>
        <button type="submit" name="register" id="submit" value="register">Register</button>
        <button onclick="location.href = 'Log.php'">Log in</button>
    </div>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="msg">'. $_SESSION['message'] .'</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>
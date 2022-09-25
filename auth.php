<?php
session_start();
if(isset($_POST['login'])) {
    $i = 0;
    $salt = 'kirill';
    $json = file_get_contents("myBD.json");
    $obj = json_decode($json, true);
    $login = $_POST['login'];
    $password = md5($_POST['password'] . $salt);
    foreach ($obj as $msg) {
        if ($login == $msg['login'] && $password == $msg['password']) {
            $user = $msg;
            setcookie('user', $user['Name'], time() + 10, "/");
            //header('Location: /Log.php');
            $i++;
            echo 'ok';
        }
    }
    if ($i == 0) {
        // $_SESSION['errorLog']='Неверный логин или пароль';
        //header('Location: /Log.php');
        echo 'ytdthysq';
    }
}
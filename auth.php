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
            $_SESSION['user'] = [
                "name" => $user['Name']
            ];
            setcookie('user', $user['Name'], time() + 10, "/");
            $response =[
                "status"=> true
            ];
            $i++;
            echo json_encode($response);
        }
    }
    if ($i == 0) {
        $response =[
            "status"=> false,
            "message"=>'неверный логин или пароль'
        ];
        echo json_encode($response);
    }
}
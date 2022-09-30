<?php
session_start();
if(isset($_POST['login'])) {
    $i = 0;
    $salt = 'kirill';
    $json = file_get_contents("bd/myBD.json");
    $obj = json_decode($json, true);
    $login = preg_replace('/\s+/', '', $_POST['login']);
    $password=preg_replace('/\s+/', '', $_POST['password']);
    $error_fields=[];
    if($password===''){
        $error_fields[]='password';
    }
    if($login===''){
        $error_fields[]='login';
    }
if(!empty($error_fields)){
    $response=[
        "status"=>false,
        "type"=>1,
        "message"=>"Заполните все поля",
         "fields"=>$error_fields
    ];
    echo json_encode($response);
    die();
}
    $password = md5($password . $salt);
    foreach ($obj as $msg) {
        if ($login == $msg['login'] && $password == $msg['password']) {
            $user = $msg;
            $_SESSION['user'] = [
                "name" => $user['name']
            ];
            setcookie('user', $user['name'], time() + 10, "/");
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
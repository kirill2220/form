<?php
session_start();
if(isset($_POST['Login'])) {
    $i =0;
    $salt='kirill';
    $json = file_get_contents("myBD.json");
    $obj = json_decode($json, true);
    $_POST['password']=md5($_POST['password'].$salt);
    foreach ($obj as $msg) {
        if ($_POST['login'] == $msg['Login'] && $_POST['password'] == $msg['password'] ) {
            $user=$msg;
setcookie('user',$user['Name'],time()+10,"/");
            header('Location: /Log.php');
            $i++;
        }
    }
    if($i==0){
        $_SESSION['errorLog']='Неверный логин или пароль';
        header('Location: /Log.php');
    }

}


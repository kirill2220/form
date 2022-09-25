<?php
//Сессии переделать все ошибки через них!!!
session_start();
$i=0;
if(isset($_POST['register'])) {
    $salt='kirill';
    $file = "myBD.json";
    $data=file_get_contents($file);
    if (empty($data)) {
        $json = [];
    } else {
        $json = json_decode($data, $assoc = TRUE);
    }
    foreach ($json as $pas){
        if($pas['login']==$_POST['login']){
     $_SESSION['errorlogin']='Такой логин уже существует!';
           $i++;
        }
        if($pas['email']==$_POST['email']){
            $_SESSION['errorEmail']='Такой email уже существует!';
            $i++;
        }
    }

    $login=$_POST['login'];
    $password=$_POST['password'];
    $confirm_password=$_POST['Confirm_password'];
    $Name=$_POST['Name'];
if (strlen( $login)>=6){}
else{
    $_SESSION['errorlogin']='Длина логина должна быть не менее 6 символов';
    $i++;
}
if (strlen( $password)>=6  && preg_match('/[0-9]/',$password) && preg_match('/[A-Za-z]/',$password) ){}
else{
    $_SESSION['errorPassword']='Длина пароля должна быть не менее 6 символов и сотоять из цифр и букв латинского алфавита';
    $i++;
}
if(strlen( $Name) ==2 && preg_match('/[A-Za-z]/',$Name) ){}
else{
    $_SESSION['errorName']='Длина имени должна равнться двум и состоять из букв латинского алфавита';
    $i++;
}
    if($confirm_password!=$password ){
        $_SESSION['errorConfirmPassword']='Пароли не совпадают';
        $i++;
    }



    if($i==0){
        $_SESSION['message']='Пользователь успешно зарегистрирован';
        $arr = array(
            'login'     => $_POST['login'],
            'email'    => $_POST['email'],
            'password'     => $_POST['password'],
            'Name'    => $_POST['Name']
        );

$arr['password']=md5($arr['password'].$salt);
        array_push($json, $arr);
        $json_string = json_encode($json);
        file_put_contents($file, $json_string);
        header('Location: /Register.php');
    }
    header('Location: /Register.php');
}
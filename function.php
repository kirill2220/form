<?php

session_start();
$i=0;
if(isset($_POST['login'])) {
    $login=preg_replace('/\s+/', '', $_POST['login']);
    $password=preg_replace('/\s+/', '', $_POST['password']);
    $Confirm_password=preg_replace('/\s+/', '', $_POST['Confirm_password']);
    $name=preg_replace('/\s+/', '', $_POST['name']);
    $email=preg_replace('/\s+/', '', $_POST['email']);
    $salt='kirill';
    $file = "myBD.json";
    $data=file_get_contents($file);
    if (empty($data)) {
        $json = [];
    } else {
        $json = json_decode($data, TRUE);
    }
    $error_fields=[];
    if($password===''){
        $error_fields[]='password';
    }
    if($login===''){
        $error_fields[]='login';
    }
    if($Confirm_password===''){
        $error_fields[]='Confirm_password';
    }
    if($name===''){
        $error_fields[]='name';
    }
    if($email===''){
        $error_fields[]='email';
    }
    if(!empty($error_fields)){
        $response=[
            "status"=>false,
            "type"=>1,
            "message"=>"Заполните все поля",
            "fields"=>$error_fields
        ];
        echo json_encode($response);

    }


   /* foreach ($json as $pas){
        if($pas['Login']==$login){
            $response=[
                "status"=>false,
                "type"=>2,
                "message"=>"Такой login уже существует!",
            ];
            echo json_encode($response);
        }
        if($pas['email']==$email){
            $_SESSION['errorEmail']='Такой email уже существует!';
            $i++;
        }
    }

    if (strlen( $login)>=6){}
    else{
        $_SESSION['errorLogin']='Длина логина должна быть не менее 6 символов';
        $i++;
    }
    if (strlen( $password)>=6  && preg_match('/[0-9]/',$password) && preg_match('/[A-Za-z]/',$password) ){}
    else{
        $_SESSION['errorPassword']='Длина пароля должна быть не менее 6 символов и сотоять из цифр и букв латинского алфавита';
        $i++;
    }
    if(strlen( $name) >=1 && strlen( $name) <=3 && preg_match('/[A-Za-z]/',$name) ){}
    else{
        $_SESSION['errorname']='Длина имени должна быть от одного до трех символов и состоять из букв латинского алфавита';
        $i++;
    }
    if($Confirm_password!=$password ){
        $_SESSION['errorConfirmPassword']='Пароли не совпадают';
        $i++;
    }
    if(preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)){}
    else{
        $_SESSION['errorEmail']='Неверный формат email';
        $i++;
    }



    if($i==0){
        $_SESSION['message']='Пользователь успешно зарегистрирован';
        $arr = array(
            'Login'     => $_POST['Login'],
            'email'    => $_POST['email'],
            'password'     => $_POST['password'],
            'name'    => $_POST['name']
        );

        $arr['password']=md5($arr['password'].$salt);
        array_push($json, $arr);
        $json_string = json_encode($json);
        file_put_contents($file, $json_string);
        header('Location: /Register.php');
    }
    header('Location: /Register.php');*/
}

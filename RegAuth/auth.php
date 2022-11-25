<?php
include $_SERVER['DOCUMENT_ROOT'].'/connect.php';
session_start();
if(isset($_POST['login'])) {
    $i = 0;

    $query = 'exec ListUsersPasswordLogin';
    $result = odbc_exec($conn, $query) ;
    $json=[];
    $my_array=[];

    while(odbc_fetch_row($result)){

        $passworddb=odbc_result($result,'password');
        $logindb=odbc_result($result,'login');
        $namedb=odbc_result($result,'name');
        $my_array=array(
            'passworddb'=> $passworddb,
            'logindb'=>$logindb,
            'namedb'=>$namedb
        );
        array_push($json,$my_array);
    }
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

    foreach ($json as $msg) {
        if ($login == $msg['logindb'] && $password == $msg['passworddb']) {
            $user = $msg;
            $_SESSION['user'] = [
                "name" => $user['namedb']
            ];

            setcookie('user', $user['namedb'], time() + 10, "/");
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
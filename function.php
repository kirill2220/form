<?php
require 'connect.php ';
session_start();
$i=0;
if(isset($_POST['login'])) {
    $login=preg_replace('/\s+/', '', $_POST['login']);
    $password=preg_replace('/\s+/', '', $_POST['password']);
    $Confirm_password=preg_replace('/\s+/', '', $_POST['Confirm_password']);
    $name=preg_replace('/\s+/', '', $_POST['name']);
    $email=preg_replace('/\s+/', '', $_POST['email']);
    $salt='Kirill';

    $query = 'exec ListUsersEmailLogin';
    $result = odbc_exec($conn, $query) or die("Couldn't execute query!");
    $json=[];
    $my_array=[];
//$json=dbc_result($result);
    while(odbc_fetch_row($result)){

        $emaildb=odbc_result($result,'email');
        $logindb=odbc_result($result,'login');
        $my_array=array(
            'email'=> $emaildb,
            'login'=>$logindb
        );
        array_push($json,$my_array);
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
die();
        $i++;
    }


   foreach ($json as $pas){
        if($pas["login"]==$login){

            $response=[
                "status"=>false,
                "type"=>2,
                "message"=>"Такой login уже существует!",
            ];
            echo json_encode($response);
            die();
            $i++;
        }

        if($pas["email"]==$email){

            $i++;
            $response=[
                "status"=>false,
                "type"=>3,
                "message"=>"Такой email уже существует!",
            ];
            echo json_encode($response);
            die();
        }
    }

       if (strlen( $login)>=6){}
       else{
           $response=[
               "status"=>false,
               "type"=>2,
               "message"=>"линна логи не менее 6 символов",
           ];
           $i++;
           echo json_encode($response);
           die();
       }
       if (strlen( $password)>=6  && preg_match('/[0-9]/',$password) && preg_match('/[A-Za-z]/',$password) ){}
       else{
           $response=[
               "status"=>false,
               "type"=>4,
               "message"=>"Длинна пароля должна быть не менее 6 символов и включать в себя цифры и буквы латинского алфаввита",
           ];
           $i++;
           echo json_encode($response);
           die();
       }
       if(strlen( $name) >=1 && strlen( $name) <=3 && preg_match('/[A-Za-z]/',$name) ){}
       else{
           $response=[
               "status"=>false,
               "type"=>6,
               "message"=>"Длинна имени должна быть не менее 3 и не более 1  символа и включает в себя буквы латинского алфаввита",
           ];
           $i++;
           echo json_encode($response);
           die();
       }
       if($Confirm_password!=$password ){
           $response=[
               "status"=>false,
               "type"=>5,
               "message"=>"Не совпадают пароли",
           ];
           $i++;
           echo json_encode($response);
           die();
       }
       if(preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)){}
       else{
           $response=[
               "status"=>false,
               "type"=>3,
               "message"=>"Неверный формат email",
           ];
           $i++;
           echo json_encode($response);
           die();
       }



          if($i==0){
              $arr = array(
                  'login'     => $login,
                  'email'    => $email,
                  'password'     => $password,
                  'name'    => $name
              );

              $query = "exec InsertUsers".' '.$arr['login']." , ".$arr['password'];

              $result=odbc_exec($conn, $query) ;
              $query = "exec InsertData".' '.$arr['login']." , ".$arr['password'].' , '.$arr['name'].' , '.' " '. $arr['email'].' "';
$_SESSION['ema']=$query;
              $result=odbc_exec($conn, $query) ;
              $response=[
                  "status"=>true,
                  "message"=>"Пользователь успешно зарегистрирован",
              ];
              echo json_encode($response);
          }

}

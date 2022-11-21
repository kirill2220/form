<?php
require 'connect.php ';
$query = 'exec ListUsersEmailLogin';
$result = odbc_exec($conn, $query) or die("Couldn't execute query!");
$json=[];
$my_array=[];
//$json=dbc_result($result);
 while(odbc_fetch_row($result)){

     $email=odbc_result($result,'email');
     $login=odbc_result($result,'login');
     $json=array(
        'email'=> $email,
         'login'=>$login
     );
     array_push($my_array,$json);
 }

$email1='gleb@mail.r';
foreach ($my_array as $pas){
    if($pas["email"]==$email1){
        var_dump($pas["email"]);
    }

}


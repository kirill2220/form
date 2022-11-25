<?php
require 'connect.php ';
$query = 'exec ListUsersEmailLogin';
$result = odbc_exec($conn, $query) or die("Couldn't execute query!");
$json=[];
$my_array=[];

while(odbc_fetch_row($result)){

    $emaildb=odbc_result($result,'email');
    $logindb=odbc_result($result,'login');
    $my_array=array(
        'emaildb'=> $emaildb,
        'logindb'=>$logindb
    );
    array_push($json,$my_array);
}
foreach ($json as $pas){
    if($pas["logindb"]=='kirill123'){
var_dump($pas["logindb"]);
        $response=[
            "status"=>false,
            "type"=>2,
            "message"=>"Такой login уже существует!",
        ];
        echo json_encode($response);
        die();
        $i++;
    }


    if($pas["emaildb"]=='kirill@mail.ru'){



        $response=[
            "status"=>false,
            "type"=>3,
            "message"=>"Такой email уже существует!",
        ];
        echo json_encode($response);
        die();
        $i++;
    }
}


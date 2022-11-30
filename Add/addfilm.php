<?php
require$_SERVER['DOCUMENT_ROOT'].'/connect.php ';
session_start();
$i=0;
if(isset($_POST['name'])) {
    $name = preg_replace('/\s+/', '', $_POST['name']);
    $year = preg_replace('/\s+/', '', $_POST['year']);
    $duration = preg_replace('/\s+/', '', $_POST['duration']);
    $age = preg_replace('/\s+/', '', $_POST['age']);
    $trailer = preg_replace('/\s+/', '', $_POST['trailer']);
    $date_of_start = preg_replace('/\s+/', '', $_POST['date_of_start']);
    $date_of_end = preg_replace('/\s+/', '', $_POST['date_of_end']);
    $genre = preg_replace('/\s+/', '', $_POST['genre']);
    $poster = preg_replace('/\s+/', '', $_POST['poster']);
    $description = preg_replace('/\s+/', '', $_POST['description']);
$_SESSION['a1']=$genre;
    $_SESSION['a2']=$poster;
    $_SESSION['a3']=$trailer;
    $salt = 'Kirill';

    $query = 'exec ListUsersEmailLogin';
    $result = odbc_exec($conn, $query) or die("Couldn't execute query!");
    $json = [];
    $my_array = [];

    while (odbc_fetch_row($result)) {

        $emaildb = odbc_result($result, 'email');
        $logindb = odbc_result($result, 'login');
        $my_array = array(
            'emaildb' => $emaildb,
            'logindb' => $logindb
        );
        array_push($json, $my_array);
    }




    $error_fields=[];
    if($name===''){
        $error_fields[]='password';
    }
    if($year===''){
        $error_fields[]='login';
    }
    if($duration===''){
        $error_fields[]='duration';
    }
    if($age===''){
        $error_fields[]='age';
    }
    if($date_of_start===''){
        $error_fields[]='email';
    }
    if($date_of_end===''){
        $error_fields[]='password';
    }
    if($genre===''){
        $error_fields[]='login';
    }
    if($description===''){
        $error_fields[]='duration';
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
if ($year<=1895 ){

    $response=[
        "status"=>false,
        "type"=>2,
        "message"=>"Кино изобрели в 1895 году",
    ];
    echo json_encode($response);
    die();
    $i++;
}








}
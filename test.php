
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="test.php" method="post">
    <div class="col-sm-4">
        <p>Постер фильма</p>
        <div class="input-group mb-3">
            <div class="custom-file">
                <label class="custom-file-label" for="poster">Choose file</label>
                <input type="file" name="poster"  class="custom-file-input" accept="image/*,image/jpeg" id="poster">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <p>Трейлер фильма</p>
        <div class="input-group mb-3">
            <div class="custom-file">
                <label class="custom-file-label" for="trailer">Choose file</label>
                <input type="file" name="trailer" class="custom-file-input" multiple accept="video/*" id="trailer">
            </div>
        </div>
    </div>
    <button class="btn btn-outline-danger btn-lg btn-block" type="submit">Отправить</button>

</form>
</body>
</html>
<?php
require 'connect.php ';
var_dump($_POST);
$trailer = preg_replace('/\s+/', '', $_POST['trailer']);
$poster = preg_replace('/\s+/', '', $_POST['poster']);
//var_dump($trailer.'</br>');
//var_dump($_FILES['poster']['tmp_name'].'</br>');
if(isset($_POST['trailer'])) {
    $img = addslashes(file_get_contents("C:\Users\Kirill\Downloads\Screenshot_12.jpg"));
    $img1 = addslashes(file_get_contents("C:\Users\Kirill\Downloads\Video\imagine-dragons-x-jid-enemy_409720.mp4"));
    //var_dump($img);

    $query = "insert into ing(img) values('$poster')";
    $result = odbc_exec($conn, $query) or die("Couldn't execute query!");


}






var_dump('--------------------------------------------------</br>');
var_dump($img);
























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
?>
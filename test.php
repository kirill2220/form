<?php
session_start();
?>
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
<?=$_SESSION['a'];?>
<form action="test.php" enctype="multipart/form-data" method="post">
    <p>Загрузите ваши фотографии на сервер</p>
    <p><input type="file" name="photo" multiple accept="image/*,image/jpeg">
        <input type="submit" value="Отправить"></p>
    <pre>
</form
<?php
require 'connect.php ';


//$poster =$_POST['poster'];

/*if(isset($_FILES['photo']['tmp_name'])) {
var_dump($_FILES['photo']);
    $sql = "INSERT INTO ing(img) VALUES (?)";
    $img = file_get_contents($_FILES['photo']['tmp_name']);
    $params = array($img);

    $stmt = sqlsrv_query( $conn, $sql, $params);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    $sql = "select * from ing";
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        $show_img=base64_encode($row['img']);
        var_dump($show_img);*/?><!--
        <img src="data:image/jpeg;base64, <?/*=$show_img */?>" alt="">
        --><?php
/*    }*/
    /*  foreach ($json as $msg) {
         var_dump(base64_encode($msg['img']));
      }*/


 } ?>



</pre>
</body>
</html>



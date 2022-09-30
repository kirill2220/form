<?php

$conn = odbc_connect( "Driver={SQL Server};Server=KIR\SQLEXPRESS;Database=kurs;", 'KiR', 'Barabull17' );

if( $conn ) {
    echo "Соединение установлено.<br />";
    //$exec = odbc_exec($conn, "exec ListUsers");
    $query = 'select * from Users;';
    $result = odbc_exec($conn, $query) or die("Couldn't execute query!");
while(odbc_fetch_row($result)){
    $Id=odbc_result($result,'ID');
    $name=odbc_result($result,'name');
    $IDPost=odbc_result($result,'IDPost');
}
    var_dump($name);
}else{
    echo "Соединение не установлено.<br />";

}



<?php
$dbn="mysql:host=localhost;dbname=chat";
$user="root";
$pass="";
$op=array(
    PDO::MYSQL_ATTR_INIT_COMMAND =>"set names utf8",
);
try {
    $connect = new PDO($dbn, $user, $pass, $op);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "connect fail".$e->getMessage();
}
?>
<?php
session_start();
include "classes.php";
if(isset($_POST['chattext']) && strlen(trim($_POST['chattext']," "))!=1 ){
    $chat=new chat();
    $chat->setchatuserid($_SESSION['userid']);
    $chat->setchattext($_POST['chattext']);
    $chat->insertchatmasseg();
}
?>
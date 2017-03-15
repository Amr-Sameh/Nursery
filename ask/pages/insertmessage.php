<?php
session_start();
include "classes.php";
if(isset($_POST['chattext'])){
    $chat=new chat();
    $chat->setchatuserid($_SESSION['userid']);
    $chat->setchattext($_POST['chattext']);
    $chat->insertchatmasseg();
}
?>
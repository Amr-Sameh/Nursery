<?php
include "classes.php";
$user = new user();
if(isset($_POST['username']) && isset($_POST['useremail']) &&isset($_POST['userpassword'])){
    $user->setusername($_POST['username']);
    $user->setuseremail($_POST['useremail']);
    $user->setuserpassword($_POST['userpassword']);
    $user->insertuser();
    header("Location: ../index.php?success=1");
}
?>
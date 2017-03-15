<?php
session_start();
include "classes.php";
if(isset($_POST['useremaillogin'])&&isset($_POST['userpasswordlogin'])){
    $user=new user();
    $user->setuseremail($_POST['useremaillogin']);
    $user->setuserpassword($_POST['userpasswordlogin']);
    $user->userlogin();
if($user->userlogin()==true){
    $_SESSION['userid']=$user->getuserid();
    $_SESSION['username']=$user->getusername();
    $_SESSION['email']=$user->getuseremail();
    $_SESSION['password']=$user->getuserpassword();
}
}
?>
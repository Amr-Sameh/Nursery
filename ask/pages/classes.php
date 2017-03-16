<?php
class user{
    private $userid,$username,$useremail,$userpassword;

    public function getuserid(){
        return $this->userid;
    }
    public function setuserid($userid){
       $this->userid=$userid;
    }
    public function getusername(){
        return $this->username;
    }
    public function setusername($username){
        $this->username=$username;
    }
    public function getuseremail(){
    return $this->useremail;
    }
    public function setuseremail($useremail){
        $this->useremail=$useremail;
    }
    public function getuserpassword(){
    return $this->userpassword;
    }
    public function setuserpassword($userpassword){
        $this->userpassword=$userpassword;
    }
    public function insertuser()
    {
       include 'conn.php';
        $req = $connect->prepare("INSERT INTO users(username,email,password) VALUES (:username,:email,:password) ");
        $req->execute(array(
            'username'=>$this->getusername(),
            'email'=>$this->getuseremail(),
            'password'=>$this->getuserpassword()
        ));

    }
    public function userlogin()
    {
        include 'conn.php';
        $req = $connect->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
        $req->execute(array(
            'email'=>$this->getuseremail(),
            'password'=>$this->getuserpassword()
        ));
        if ($req->rowCount()==0){
            header("Location: ../index.php?error=1");
        }else{
            while ($data=$req->fetch()){
               $this->setuserid($data['userid']);
                $this->setusername($data['username']);
                $this->setuseremail($data['email']);
                $this->setuserpassword($data['password']);
                header("Location: home.php");
                return true;
            }
        }

    }
}
class chat{
    private $chatid,$chatuserid,$chattext;

    public function getchatid(){
        return $this->chatid;
    }
    public function setchatid($chatid){
        $this->chatid=$chatid;
    }
    public function getchatuserid(){
        return $this->chatuserid;
    }
    public function setchatuserid($chatuserid){
        $this->chatuserid=$chatuserid;
    }
    public function getchattext(){
        return $this->chattext;
    }
    public function setchattext($chattext){
        $this->chattext=$chattext;
    }

    public function insertchatmasseg()
    {
        include 'conn.php';
        $req = $connect->prepare("INSERT INTO chats(chatuserid,chattext) VALUES (:chatuserid,:chattext) ");
        $req->execute(array(
            'chatuserid'=>$this->getchatuserid(),
            'chattext'=>$this->getchattext()

        ));

    }
    public function displaymessage(){
        include "conn.php";
        $req = $connect->prepare("SELECT * FROM chats ORDER BY chatid DESC");
        $req->execute();
        while ($chat = $req->fetch()){
            $userchat=$connect->prepare("SELECT * FROM users WHERE userid=:userid");
            $userchat->execute(array(
                'userid'=>$chat['chatuserid']
            ));
            $datauser=$userchat->fetch();
            echo "<br>"."<span style=' color: red;'>".$datauser['username']." :"."</span>"."<br>".$chat['chattext'];
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
    <title>ASK</title>
    <style>
        *{
            margin: 10px;

        }
    </style>
</head>
<body>
<form method="post" action="pages/userlogin.php">
    <h1>Log in</h1>
    <label>Email</label>
    <input type="email" name="useremaillogin">
    <br>
    <label>Password</label>
    <input type="password" name="userpasswordlogin">
    <br>
    <input type="submit" name="login" value="Login">
    <br>
    <?php
    if(isset($_GET['error'])) {

        ?>
        <label>user not found</label>
        <?php
    }
    ?>
</form>
<br>  <br>
<form method="post" action="pages/insertuser.php">
    <h1>Sine up</h1>
    <label>username</label>
    <input type="text" name="username">
    <br>
    <label>Email</label>
    <input type="email" name="useremail">
    <br>
    <label>Password</label>
    <input type="password" name="userpassword">
    <br>
    <input type="submit" name="sineup" value="Sine up">
    <br>
    <?php
    if(isset($_GET['success'])) {

        ?>
        <label>user inserted</label>
        <?php
    }
    ?>

</form>
</body>
</html>
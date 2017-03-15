
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="../style/style.css">
    <script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
    <title>home</title>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#chattext").keyup(function (e) {
                var chattext=$("#chattext").val();
                if(e.keyCode==13){
                   $.ajax({
                       type:"POST",
                       url:"insertmessage.php",
                       data:{chattext:chattext},
                    success:function () {
                        $("#chatmessage").load("displaymessage.php");
                        $("#chattext").val("");
                    }

                   });
                }
            });
            setInterval(function () {
                $("#chatmessage").load("displaymessage.php");
            },1500);
           // $("#chatmessage").load("displaymessage.php");
        });
    </script>
</head>
<body>

<h1>Welcome <?php echo $_SESSION['username']?></h1>

<div id="chatbig">
    <div id="chatmessage"></div>
    <textarea id="chattext" name="chattext"></textarea>
</div>

</body>
</html>
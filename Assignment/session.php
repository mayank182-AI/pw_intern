<!DOCTYPE html>
<html lan="en">
    <head>
        <title>Session</title>
</head>
</body>
<form method="post" action="">
    <input type="text" name="user" placeholder="enter your name" />
    <br/>
    <br/>
    <button name="submit" val="set">Set Session</button>
    <br/>
    <br/>
    <button name="submit" val="get">Get Session</button>
    <br/>
    <br/>
    <button name="submit" val="delete">Delete Session</button>
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    if($_POST['submit']=="set"){
        $val=$_POST['user'];
        $_SESSION['user']=$val;
    }
    if($_POST['submit']=="get"){
        echo $_SESSION['user'];
    }
    if ($_POST['submit']=="delete"){
        session_destroy()
    }
}
?>
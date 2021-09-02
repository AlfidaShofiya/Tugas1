<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="alfidasofiya" AND $password=="comebacktoyou")
    {
        $_SESSION["username"]=$username;
        header("location:homeadmind.php");
    }else{
        header("location:formlogin.php?login_error");
    }
?>
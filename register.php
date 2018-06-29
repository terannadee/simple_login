<?php
if (isset($_POST['submit']))
{
    include("config.php");

//    session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];
    $passc= md5($password);

//    $_SESSION['login_user']=$username;

    $query = mysqli_query($con,"INSERT INTO login (username,password)VALUES ('$username','$passc')");

    mysqli_close($con);

    echo "<script language='javascript' type='text/javascript'> location.href='login.html' </script>";

}

?>



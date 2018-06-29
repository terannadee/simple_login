<?php
include("config.php");
session_start();
$username=$_SESSION['login_user'];

$password = $_POST['password'];
$newpassword = $_POST['newpassword'];
$confirmnewpassword = $_POST['confirmnewpassword'];

$query = mysqli_query($con,"SELECT password FROM login WHERE username='$username'");
$row = mysqli_fetch_assoc($query);
//var_dump($row['password'],md5($password));
if($row['password']==md5($password)){


if($newpassword==$confirmnewpassword){
    $newpassword = md5($newpassword);
    $sql=mysqli_query($con,"UPDATE login SET password='$newpassword' where username='$username'");
if($sql)
{
//    echo "Congratulations You have successfully changed your password";
    echo "<script type='text/javascript'>alert('Congratulations You have successfully changed your password'); location.href='home.php'</script>";
}
}
else
{
//    echo "The new password and confirm new password fields must be the same";
    echo "<script type='text/javascript'>alert('The new password and confirm new password fields must be the same'); location.href='home.php'</script>";


}}
else{
    echo "<script type='text/javascript'>alert('The existing password is incorrect'); location.href='home.php'</script>";

}
?>
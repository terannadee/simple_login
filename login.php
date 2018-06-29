<?php
if (isset($_POST['submit']))
	{	  
include("config.php");

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$passc= md5($password);

$_SESSION['login_user']=$username;
 
$query = mysqli_query($con,"SELECT username FROM login WHERE username='$username' and password='$passc'");

 if (mysqli_num_rows($query) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";	
  }

  else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!'); location.href='login.html'</script>";
}

}
?>

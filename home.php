<?php
session_start();
$login_session=$_SESSION['login_user'];
if($login_session == null){
 echo "<script type='text/javascript'>alert('Access Denied!'); location.href='login.html'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home Page</title>
</head>

<body>
<h1>Welcome to Home</h1>
<form method="POST" action="pass_change.php">
 <table>
  <tr>
   <td>Enter your existing password:</td>
   <td><input type="password" size="10" name="password"></td>
  </tr>
  <tr>
   <td>Enter your new password:</td>
   <td><input type="password" size="10" name="newpassword"></td>
  </tr>
  <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
  </tr>
 </table>
 <p><input type="submit" value="Update Password">
</form>
<a href="logout.php"> Logout </a>
</body>
</html>

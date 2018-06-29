<?php
$hostname='localhost';
$user = 'root';
$password = null;
$mysql_database = 'user';
$con = mysqli_connect($hostname, $user, $password,$mysql_database);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_select_db($con,"user");
?>

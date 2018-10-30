<?php
$servername="localhost";
$username="t_pro";
$password="tpro@123";
$dbname="t_pro";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("Connection failed because".mysqli_connect_error());
}
?>

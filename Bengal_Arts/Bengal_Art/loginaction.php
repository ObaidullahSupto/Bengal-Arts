<?php
session_start();
include_once('db.php');
$email=$_POST['email'];
$pass=md5($_POST['pass']);
$query=mysqli_query($con,"SELECT * FROM admin where email='$email' AND pass='$pass' limit 1");
$row=mysqli_fetch_array($query);
$_SESSION['id']=$row['aid'];
$_SESSION['username']=$row['username'];
$_SESSION['email']=$row['email'];
$_SESSION['designation']=$row['designation'];

$_SESSION['Permission']=$row['user_permission_status'];

$sess=md5(date('Y-m-d').'+'.$row['aid'].'+'.$row['username']);
if(mysqli_num_rows($query)==1)
{
echo "<script>location.href='home.php?sk=$sess'</script>";
}
else
{
echo "<script>location.href='index.php?sk=invalid'</script>";
}
?>
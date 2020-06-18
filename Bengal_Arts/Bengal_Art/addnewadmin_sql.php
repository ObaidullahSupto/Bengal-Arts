<?php
include('db.php');
if(isset($_POST['save'])){
$username=$_POST['username'];
$email=$_POST['email'];
$pass=md5($_POST['pass']);
$designation=$_POST['designation'];
$permissionL=$_POST['permissionL'];

$query=mysql_query("insert into admin(username,email,pass,designation,user_permission_status)VALUES('$username','$email','$pass','$designation','$permissionL')");
$id=mysql_insert_id();

if($query)
{

echo "<script>location.href='content.php?sk=dashboard'</script>";
}
}

?>
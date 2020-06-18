


<?php
include('db.php');
$id=$_GET['id'];
$catagories=$_POST['catagories'];
$editor=$_POST['editor'];

if(empty($filename)|| empty($filetype)){
$up=mysqli_query($con,"UPDATE About SET catagories = '$catagories',catagories_details='$editor' where id='$id'");
if($up){
	
	echo "<script>alert('Information Successfully update')</script>";
	echo "<script>location.href='content.php?sk=About'</script>";
	}
}

?>

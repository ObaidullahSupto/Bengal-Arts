


<?php
include('db.php');
$id=$_GET['id'];
$a_name=$_POST['a_name'];
$date=$_POST['date'];
$a_details=$_POST['a_details'];
$image=$_POST['image'];
$images_caption=$_POST['images_caption'];
$artist_name=$_POST['artist_name'];
$v_link=$_POST['v_link'];

if(empty($filename)|| empty($filetype)){
$up=mysqli_query($con,"UPDATE apply SET a_name = '$a_name',date = '$date',a_details = '$a_details',
image = '$image',images_caption = '$images_caption',artist_name = '$artist_name',v_link = '$v_link' where id='$id'");
if($up){
	
	echo "<script>alert('Information Successfully update')</script>";
	echo "<script>location.href='content.php?sk=apply'</script>";
	}
}

?>

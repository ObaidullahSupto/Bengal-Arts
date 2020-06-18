
<?php
include('db.php');
$id=$_GET['id'];
$fileName = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
 $image = $id.'.'.$explode[1];

if($fileName!=""):
move_uploaded_file($_FILES["image"]["tmp_name"],"v_Image/".$image);
endif;

$details=$_POST['details'];


if(empty($filename)|| empty($filetype)){
$up=mysqli_query($con,"UPDATE venue SET details='$details' where id='$id'");
if($up){
	echo "<script>alert('Venue Successfully update')</script>";
	echo "<script>location.href='content.php?sk=Venues'</script>";
	
	
	}
}



?>

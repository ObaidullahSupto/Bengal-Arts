
<?php
include('db.php');
$id=$_GET['id'];
$image=$_GET['image'];
$fileName = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
 $image = $id.'.'.$explode[1];

if($fileName!=""):
move_uploaded_file($_FILES["image"]["tmp_name"],"People_image/".$image);
endif;

$name=$_POST['People_Name'];
$details=$_POST['details'];


if(empty($filename)|| empty($filetype)){
$up=mysqli_query($con,"UPDATE people SET name='$name',about='$details' where id='$id'");
if($up){
	echo "<script>alert('people Successfully update')</script>";
	echo "<script>location.href='content.php?sk=people'</script>";
	
	
	}
}



?>

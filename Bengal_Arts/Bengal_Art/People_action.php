<?php
include('db.php');
if(isset($_POST['save'])){


	
$People_Name=$_POST['People_Name'];
$People_details=$_POST['People_details'];
$query=mysqli_query($con,"insert into people (name,about,picture)VALUES('$People_Name','$People_details','$newFileName')");



$id=mysqli_insert_id($con);
$fileName = $_FILES['People_Image']['name'];
$fileType = $_FILES['People_Image']['type'];
$explode = explode('.',$fileName);
$newFileName = $id.'.'.$explode[1];
move_uploaded_file($_FILES["People_Image"]["tmp_name"],"People_image/".$newFileName);
mysqli_query($con,"UPDATE  people SET picture='$newFileName' WHERE id='$id' LIMIT 1");


if($query)
{
echo "<script>alert('Save data Successfully')</script>";
echo "<script>location.href='content.php?sk=People'</script>";
}
   }

?>

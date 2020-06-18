<?php
include('db.php');
if(isset($_POST['save'])){


	

$details=$_POST['details'];

$query=mysqli_query($con,"insert into venue (details,image)VALUES('$details','$newFileName')");

$id=mysqli_insert_id($con);
$fileName = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
$newFileName = $id.'.'.$explode[1];
move_uploaded_file($_FILES["image"]["tmp_name"],"v_Image/".$newFileName);
mysqli_query($con,"UPDATE  venue SET image='$newFileName' WHERE id='$id' LIMIT 1");




if($query)
{
echo "<script>alert('Save data Successfully')</script>";
echo "<script>location.href='content.php?sk=venues'</script>";
}
   }

?>

<?php
include('db.php');
if(isset($_POST['save'])){
$workshop_name=$_POST['workshop_name'];
$conducted_name=$_POST['conducted_name'];
$short_dip=$_POST['short_dip'];
$v_link=$_POST['v_link'];
$workshop_details=$_POST['workshop_details'];
$catagories=$_POST['catagories'];
$query=mysqli_query($con,"insert into workshop(workshop_name,conducted_name,images,short_dip,v_link,workshop_details,catagories)VALUES('$workshop_name','$conducted_name','$images','$short_dip','$v_link','$workshop_details','$catagories')");

$id=mysqli_insert_id($con);
$fileName = $_FILES['images']['name'];
$fileType = $_FILES['images']['type'];
$explode = explode('.',$fileName);
$images = $id.'.'.$explode[1];
move_uploaded_file($_FILES["images"]["tmp_name"],"w_images/".$images);
mysqli_query($con,"UPDATE  workshop SET images='$images' WHERE id='$id' LIMIT 1");

if($query)
{
echo "<script>alert('Save data Successfully')</script>";
echo "<script>location.href='content.php?sk=workshop'</script>";
}
   }

?>



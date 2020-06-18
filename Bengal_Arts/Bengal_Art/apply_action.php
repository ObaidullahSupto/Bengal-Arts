<?php
include('db.php');
if(isset($_POST['save'])){
$app_name=$_POST['a_name'];
$art_name=$_POST['artist_name'];
$date=$_POST['date'];
$images_caption=$_POST['images_caption'];
$vedio_link=$_POST['v_link'];
$apply_details=$_POST['editor'];
$query=mysqli_query($con,"insert into apply(a_name,artist_name,date,image,l_image,images_caption,v_link,a_details)VALUES('$app_name','$art_name','$date','$image','$l_image','$images_caption','$vedio_link','$apply_details')");

$id=mysqli_insert_id($con);
$fileName = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
$image = $id.'.'.$explode[1];
$l_image= $id.'.'.$explode[1];
move_uploaded_file($_FILES["image"]["tmp_name"],"apply_images/".$image);
move_uploaded_file($_FILES["l_image"]["tmp_name"],"apply_images/largest_image/".$l_image);
mysqli_query($con,"UPDATE  apply SET image='$image',l_image='$l_image' WHERE id='$id' LIMIT 1");



if($query)
{
echo "<script>alert('Save data Successfully')</script>";
echo "<script>location.href='content.php?sk=apply'</script>";
}
   }

?>



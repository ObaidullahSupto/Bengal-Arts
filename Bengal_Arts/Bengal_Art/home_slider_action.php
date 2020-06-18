<?php
include('db.php');
if(isset($_POST['save'])){
$heading=$_POST['heading'];
$title=$_POST['title'];
$img_cap=$_POST['img_cap'];
$s_text=$_POST['s_text'];
$date=$_POST['date'];

$query=mysqli_query($con,"insert into home_slider (heading,title,img_cap,s_text,date,image)VALUES('$heading','$title','$img_cap','$s_text','$date','$image')");

$id=mysqli_insert_id($con);
$fileName = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
$image = $id.'.'.$explode[1];
move_uploaded_file($_FILES["image"]["tmp_name"],"slider_images/".$image);
mysqli_query($con,"UPDATE home_slider SET image='$image' WHERE id='$id' LIMIT 1");

if($query)
{
echo "<script>alert('Save data Successfully')</script>";
echo "<script>location.href='content.php?sk=home_slider'</script>";
}
   }

?>



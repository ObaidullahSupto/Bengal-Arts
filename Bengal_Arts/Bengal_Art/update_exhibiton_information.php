<?php

include('db.php');
$id=$_GET['id'];
$image=$_POST['image'];


$fileName = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
$image = $id.'.'.$explode[1];

if($fileName!=""):
move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/exibutions/".$image);
endif;

$title=$_POST['title'];
$discription=$_POST['discription'];
$date=$_POST['date'];


if(empty($filename)|| empty($filetype)){
$up=mysqli_query($con,"UPDATE exibiution SET title = '$title',discription ='$discription',image_='$image',exi_date= '$date' where id='$id'");
if($up){
	
	echo "<script>alert('Information Successfully update')</script>";
	echo "<script>location.href='content.php?sk=edit_exhibution'</script>";
	}
}

?>
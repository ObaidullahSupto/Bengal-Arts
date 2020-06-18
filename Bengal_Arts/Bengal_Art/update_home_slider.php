


<?php
include('db.php');
$id=$_GET['id'];

$fileName = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
$image = $id.'.'.$explode[1];

if($fileName!=""):
move_uploaded_file($_FILES["image"]["tmp_name"],"slider_images/".$image);
endif;

$heading=$_POST['heading'];
$title=$_POST['title'];
$img_cap=$_POST['img_cap'];
$s_text=$_POST['s_text'];
$date=$_POST['date'];


if(empty($filename)|| empty($filetype)){
$up=mysqli_query($con,"UPDATE home_slider SET heading = '$heading',title = '$title',img_cap = '$img_cap',s_text = '$s_text',date = '$date' where id='$id'");
if($up){
	
	echo "<script>alert('Information Successfully update')</script>";
	echo "<script>location.href='content.php?sk=home_slider'</script>";
	}
}

?>

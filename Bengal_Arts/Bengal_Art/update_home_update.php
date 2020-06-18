


<?php
include('db.php');
$id=$_GET['id'];

$fileName = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
 $image = $id.'.'.$explode[1];

if($fileName!=""):
move_uploaded_file($_FILES["image"]["tmp_name"],"update_image/".$image);
endif;

$img_cap=$_POST['img_cap'];

if(empty($filename)|| empty($filetype)){
$up=mysql_query("UPDATE home_update SET img_cap = '$img_cap' where id='$id'");
if($up){
	
	echo "<script>alert('Information Successfully update')</script>";
	echo "<script>location.href='content.php?sk=home_update'</script>";
	}
}

?>

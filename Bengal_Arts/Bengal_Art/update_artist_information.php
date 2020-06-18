<?php
include('db.php');
$id=$_GET['id'];

$fileName = $_FILES['images']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
 $image = $id.'.'.$explode[1];

if($fileName!=""):
move_uploaded_file($_FILES["images"]["tmp_name"],"../uploads/art_artist/artist/".$image);
endif;

$name=$_POST['artists_name'];
$title=$_POST['title'];
$video=$_POST['video'];
$birth_date=$_POST['birth_date'];
$about=$_POST['about'];
$text=$_POST['text'];

if(empty($filename)|| empty($filetype)){
$up=mysqli_query($con,"UPDATE artists SET artists_name = '$name',title = '$title',video = '$video',birth_date = '$birth_date',about = '$about',text = '$text' where id='$id'");
if($up){
	
	echo "<script>alert('Information Successfully update')</script>";
	echo "<script>location.href='content.php?sk=edit_artist_information'</script>";
	}
}

?>





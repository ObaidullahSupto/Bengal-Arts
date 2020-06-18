


<?php
include('db.php');
$id=$_GET['id'];

$fileName = $_FILES['images']['name'];
$fileType = $_FILES['image']['type'];
$explode = explode('.',$fileName);
 $image = $id.'.'.$explode[1];

if($fileName!=""):
move_uploaded_file($_FILES["images"]["tmp_name"],"w_images/".$image);
endif;

$workshop_name=$_POST['workshop_name'];
$workshop_details=$_POST['workshop_details'];
$short_dip=$_POST['short_dip'];
$conducted_name=$_POST['conducted_name'];
$v_link=$_POST['v_link'];
$catagories=$_POST['catagories'];

if(empty($filename)|| empty($filetype)){
$up=mysqli_query($con,"UPDATE workshop SET workshop_name = '$workshop_name',workshop_details = '$workshop_details',short_dip = '$short_dip',conducted_name = '$conducted_name',v_link = '$v_link',catagories = '$catagories' where id='$id'");
if($up){
	
	echo "<script>alert('Information Successfully update')</script>";
	echo "<script>location.href='content.php?sk=workshop'</script>";
	}
}

?>

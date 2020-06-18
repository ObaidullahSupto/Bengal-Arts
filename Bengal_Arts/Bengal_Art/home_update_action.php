<?php
include('db.php');
if(isset($_POST['save'])){
	$id=$_POST['id'];
	$query=mysqli_query($con,"SELECT * FROM artists");
	while($row=mysqli_fetch_array($query))
	{
		if($id==$row['id']){
		$name=$row['artists_name'];
		$image=$row['image_'];
		}
	}
	// $name=$_POST['name'];
	// $image=$_POST['image'];
	// $image_pic=$_POST['image_pic'];
	// echo $id;?> <br/> <?php
	// echo $name;?> <br/> <?php
	// echo $image;?> <br/> <?php
	// echo $image_pic;
	
	// ?> <br/> <?php
	

// $img_cap=$_POST['img_cap'];
// $image=$_POST['image'];




$query=mysqli_query($con,"insert into home_update (id,image,img_cap)VALUES('$id','$image','$name')");
$query2=mysqli_query($con,"update artists set slider='yes' where id=$id");

// $id=mysqli_insert_id($con);
// $fileName = $_FILES['image']['name'];
// $fileType = $_FILES['image']['type'];
// $explode = explode('.',$fileName);
// $image = $id.'.'.$explode[1];
// move_uploaded_file($_FILES["image"]["tmp_name"],"update_image/".$image);

// mysqli_query($con,"UPDATE home_update SET image ='$image' WHERE id='$id' LIMIT 1");*/

if($query)
{
echo "<script>alert('Save data Successfully')</script>";
echo "<script>location.href='content.php?sk=home_update'</script>";
}
   }

?>



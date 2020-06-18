<?php
include('db.php');
$id_data=$_POST['id_data'];
$action=$_POST['action'];


if($id_data == 0){
				echo "<script>alert('please select your item!')</script>";
				echo "<script>location.href='content.php?sk=dashboard'</script>";
				
			}
			
			
			


if($id_data!= ""){
	if ($action=='office_info'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE FROM about WHERE id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=About'</script>";
	}
	if ($action=='venue'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE FROM venue WHERE id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=venues'</script>";
	}
	if ($action=='apply'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE FROM apply WHERE id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=apply_view'</script>";
	}
	
	if ($action=='workshop'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE FROM workshop WHERE id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=workshop_view'</script>";
	}
	
	if ($action=='home_update'){
		foreach ($id_data as $id):
		$query=mysqli_query($con,"update artists SET slider='no' where id='$id'");
		$queryDelete=mysqli_query($con,"DELETE FROM home_update WHERE id='$id'");		
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=home_update'</script>";
	}
	
		if ($action=='home_slider'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE FROM home_slider WHERE id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=home_slider'</script>";
	}
	
		if ($action=='home_artartist'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE FROM artist_gallery_home WHERE id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=home_artartist'</script>";
	}
	
		if ($action=='new_exhibution'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE a.*, b.* FROM exibiution a LEFT OUTER JOIN exibiution_details b ON a.id=b.exibitution_id WHERE a.id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=new_exhibution'</script>";
	}
	
	
	if ($action=='people'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE FROM people WHERE id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=People'</script>";
	}
	
	if ($action=='edit_artist_details'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE a.*, b.* FROM artists a LEFT OUTER JOIN art b ON a.id = b.artists_id WHERE a.id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=edit_artist_details'</script>";
	}
	if ($action=='artist_slider'){
		foreach ($id_data as $id):
		$queryDelete=mysqli_query($con,"DELETE FROM art WHERE id='$id'");
		$result=$queryDelete;
		endforeach;
		if ($result) echo "<script>location.href='content.php?sk=edit_artist_slider'</script>";
	}
	
}
?>
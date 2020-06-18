<?php
include('db.php');
if(isset($_POST['save'])){
$catagories=$_POST['catagories'];
$catagories_details=$_POST['editor'];
$query=mysqli_query($con,"insert into about(catagories,catagories_details)VALUES('$catagories','$catagories_details')");

if($query)
{
echo "<script>alert('Save data Successfully')</script>";
echo "<script>location.href='content.php?sk=About'</script>";
}
   }

?>

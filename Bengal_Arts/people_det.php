<?php include('Bengal_Art/db.php'); ?>

<?php  
if(isset($_GET['records_per_page']) && isset($_GET['start'])){  
 $jsonData=Array();
 $records_per_page = $_GET['records_per_page'];
 $start = $_GET['start'];
 $sql = "SELECT * FROM people LIMIT $start,$records_per_page";
 $result = mysqli_query($con, $sql);
 while($rows=mysqli_fetch_assoc($result)){
	$jsonData[]=$rows;
 }
 echo json_encode($jsonData);
}
 ?> 
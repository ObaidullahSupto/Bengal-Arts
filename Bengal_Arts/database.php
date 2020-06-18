<?php  
if(isset($_GET['records_per_page']) && isset($_GET['start'])){

 $con = mysqli_connect("localhost", "wwwbijoy_bengal", "ckk(F)K@L!]u", "new_bijoy_bangla"); 
 //$query = "SELECT * FROM people ORDER BY id DESC";  
 //$result = mysqli_query($connect, $page_query);  
 
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
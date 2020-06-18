 <?php include("Bengal_Art/db.php"); ?>
 <?php include("header.php");
 
  include 'connection_class.php';
	$dbs = new Database();
	if(!$dbs->connect()){
		print_r($dbs->getResult()) ;
		exit(0);
	}
 
 ?>  
   

	<?php 
	
	$sql="select * from artists";
	
	$result=mysqli_query($con,$sql);

?>


<div class="container">
    <div class="custom_container">

    <!-- art & artists -->  
		<div class="row">
		<div class="col-md-12">
			<div id="content-7" class="content">      
					<ul id="bottom-slider">	
						 <?php
									while($row=mysqli_fetch_array($result)){
										?> 
									
						<li>
							<div class="slider-item">
								<div class="slider-img-wrapper">
									 
									 <?php
							
									
									$id=$row['id'];
									
									echo "<img src='uploads/art_artist/artist/{$row['image_']}' alt='{$row['artists_name']}' style='width:200px;' />";
									?>
									
									</div>
									<?php
								echo "<p><a href='artist_profile.php?GetId=$id'>".$row['artists_name']."</a></p>";
								?>
							</div>
						</li>
				
									<?php }?>
					</ul>
			</div>
			
			
		</div>
		</div>
				
<!-- //art & artists --> 

    

    
    
    
    <div class="row">
        <div class="col-md-8">
            <div class="search_heading">
            <h3>List of Artists</h3>
            </div>
        </div>
        <div class="col-md-4">
             <form method="post" action="resources.php?go" id="searchform">
                        <div class="form-group">
                            <input class="form-control" id="inputdefault" type="text"  name="name" placeholder="search"style="border: 1px solid #ccc;">
							<input type="hidden" name="submit" value="Search">
                        </div>
						
            </form>
        </div>
    </div>
    
    
		<div class="row">
                    <div class="col-md-12">
                        <div class="latter">
			<span>
									 <a href="?by=A">a</a>
									 <a href="?by=B">b</a>
									 <a href="?by=C">c</a>
									 <a href="?by=D">d</a>
									 <a href="?by=E">e</a>
									 <a href="?by=F">f</a>
									 <a href="?by=G">g</a>
									 <a href="?by=H">h</a>
									 <a href="?by=I">i</a>
									 <a href="?by=J">j</a>
									 <a href="?by=K">k</a>
									 <a href="?by=L">l</a>
									 <a href="?by=M">m</a>
									 <a href="?by=N">n</a>
									 <a href="?by=O">o</a>
									 <a href="?by=P">p</a>
									 <a href="?by=Q">q</a>
									 <a href="?by=R">r</a>
									 <a href="?by=S">s</a>
									 <a href="?by=T">t</a>
									 <a href="?by=U">u</a>
									 <a href="?by=V">v</a>
									 <a href="?by=W">w</a>
									 <a href="?by=X">x</a>
									 <a href="?by=Y">y</a>
									 <a href="?by=Z">z</a>
		 </span>

                        </div>
							
							
							 
							 
					</div>
					   
			</div>
			
	<!-- Artists Search PHP code -->		


<?php

		if(isset($_POST['submit'])){
		if(isset($_GET['go'])){
		if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
		$name=$_POST['name'];

		//connect to the database
		$db=@mysqli_connect ("localhost", "wwwbijoy_bengal", "ckk(F)K@L!]u") or die ('I cannot connect to the database because: ' . mysql_error()); 

		//-select the database to use
		$mydb=mysqli_select_db($db,"new_bijoy_bangla");

		//-query the database table
		$sql="SELECT id, artists_name FROM artists WHERE artists_name LIKE '" . $name . "%'";

		//-run the query against the mysql query function
		$result=mysqli_query($db,$sql);

		//-count results

		$numrows=mysqli_num_rows($result);

		echo "<p>" .$numrows . " results found for " . stripslashes($name) . "</p>"; 

		//-create while loop and loop through result set
		while($row=mysqli_fetch_array($result)){

			$FirstName =$row['artists_name'];
			//$LastName=$row['title'];
			$ID=$row['id'];
				
		//-display the result of the array

		echo "<ul>\n"; 
		 //echo "<li>" . "<a href=\"artist_profile.php?GetId=$ID\">"  .$FirstName . " " . $LastName . "</a></li></br>\n";
		echo "<li>" . "<a href=\"artist_profile.php?GetId=$ID\">"  .$FirstName ."</a></li></br>\n";
		echo "</ul>";
		}
		}
		else{
		echo "<p>Please enter a search query</p>";
		}
		}
		}

		if(isset($_GET['by'])){
		$letter=$_GET['by'];

		//connect to the database
		$db=@mysqli_connect ("localhost", "wwwbijoy_bengal", "ckk(F)K@L!]u") or die ('I cannot connect to the database because: ' . mysqli_error()); 

		//-select the database to use
		$mydb=mysqli_select_db($db,'new_bijoy_bangla');

		//-query the database table
		$sql="SELECT id, artists_name FROM artists WHERE artists_name LIKE '" . $letter . "%'";


		//-run the query against the mysql query function
		$result=mysqli_query($db,$sql); 

		//-count results
		$numrows=mysqli_num_rows($result);

		echo "<p>" .$numrows . " results found for " . $letter . "</p>"; 

		//-create while loop and loop through result set
		while($row=mysqli_fetch_array($result)){

			$FirstName =$row['artists_name'];
			//$LastName=$row['title'];
			$ID=$row['id'];
			
		//-display the result of the array

		echo "<ul>\n"; 
		echo "<li>" . "<a href=\"artist_profile.php?GetId=$ID\">" .$FirstName. "</a></li><br/>\n";
		//echo "<li>" . "<a href=\"artist_profile.php?GetId=$ID\">" .$FirstName. " " .$Title. "</a></li><br/>\n";
		echo "</ul>";
		}
	}


?>	
<!-- END Artists Search PHP code -->	





    <div class="row">
	
	<?php
         $dbs->sql("SELECT * FROM `artists`");
         $resData=$dbs->getResult();
             $il=0;
             if($resData):
             foreach ($resData as $row):
                  if($il==3){
                     $il=0;
                    }
            $il++;
    ?>
	
	
        <div class="col-md-3 artist_name">
            <ul>
               <li><a href="artist_profile.php?GetId=<?php echo $row['id'];?>"><?php echo $row['artists_name'];?></a></li>
            </ul>
        </div>
		
		<?php
                endforeach;
                endif;
             ?>
    </div>
	
	<div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4 text-right">
            <ul class="pagination">
 
  </ul>
        </div>
    </div>
    

<div class="row"style="margin-top:50px;">
        <div class="col-md-12">
         <p style="text-align:justify;font-family: HelveticaNeueLight;font-size: 12px; color: #929292;">This page presents edited resources on artists,artworks and topics relevant to the practice of the arts in Bangladesh.
Its organisation and the resulting chronology in the contents will frequently change to shift focus and foster new understandings.</p>
        </div>
    </div>

</div>
</div>










 <?php include("footer.php");?>
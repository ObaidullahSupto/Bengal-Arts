 <?php include("Bengal_Art/db.php");?> 
 <?php include("header.php");?> 


<div class="container">
<div class="custom_container">
  <div class="row">
      <div class="workshop_heading"style="margin-bottom:25px;">
          <!--<h2>Workshop</h2>-->
          <h2>Grant & Award</h2>
      </div>
    <section id="pinBoot">
	
								<?php 


								if(!isset($_GET['page'])){
								$page = 1;
								} else {
								$page = $_GET['page'];
								}

								// Define the number of results per page
								$max_results = 8;

								// Figure out the limit for the query based
								// on the current page number.
								$from = (($page * $max_results) - $max_results);

								$nr=1;
					
								$total_results = mysqli_num_rows(mysqli_query($con,"SELECT * FROM workshop where catagories = 'Grant & Award'"));

			
								$total_pages = ceil($total_results / $max_results);
								$query=mysqli_query($con,"SELECT * FROM workshop where catagories = 'Grant & Award' order by id DESC LIMIT $from,$max_results");
								while($row=mysqli_fetch_array($query))
								{


							?>

        <article class="white-panel">
            <a href="programmes_det.php?id=<?php echo $row['id'];?>"><img src="Bengal_Art/w_images/<?php echo $row['images'];?>" alt=""></a>
            <div class="picture_panel1">
                <div class="picture_heading">
        <h4><?php echo $row['workshop_name'];?></h4>
        
        <a href="#"><?php echo $row['conducted_name'];?></a>
                </div>
        <p><?php echo $row['short_dip'];?></p>
            </div>
        </article>
		
		<?php 
								$nr++;}
		?>

        

 


     

    </section>
	<div class="col-md-12 text-right">
				
				<div class="pagination">
				
	<?php 
  
			
			  
			

			
			

			
			if($page > 1){
			$prev = ($page - 1);
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$prev&&letter=$letter&sk=grant_&_award\">&laquo;</a>";
			}

			for($i = 1; $i <= $total_pages; $i++){
			if(($page) == $i){
			echo '<a class="active">'.$i.'</a>';
			} else {
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$i &letter=$letter&sk=grant_&_award\">$i</a> ";
			}
			}

			
			if($page < $total_pages){
			$next = ($page + 1);
			echo "<a href=\"".$_SERVER['php_SELF']."?page=$next&sk=grant_&_award\">&raquo;</a>";
			}
			

			mysqli_close($con);
			  
			?>
			</div>
			</div>
  </div>
  </div>
</div>

<?php include("footer.php");?>

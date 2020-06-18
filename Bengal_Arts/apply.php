 <?php include("Bengal_Art/db.php");?> 
 <?php include("header.php");?>

<div class="container align_justiphy">
<div class="custom_container">
    <div class="row">
 
                           
		<?php 
		
		
		
		
		
		$result_per_page=4;
	
		$sql="SELECT * FROM apply order by id DESC";
	
		$result=mysqli_query($con,$sql);
		$number_of_result=mysqli_num_rows($result);
		
		
				
				$number_of_pages=ceil($number_of_result/$result_per_page);
				if(!isset($_GET['page']))
				{
					$page=1;
				}else
				{
					$page=$_GET['page'];
				}
				$this_page_first_result=($page-1)*$result_per_page;
				$sql="SELECT * FROM apply order by id DESC LIMIT ".$this_page_first_result.','.$result_per_page;
				$result=mysqli_query($con,$sql);
				
				while($row=mysqli_fetch_array($result))
								{


							?>
							
                              <!--col-md-4-->
				  <div class="col-md-4">
			
                                      <a href="apply_det.php?id=<?php echo $row['id'];?>"><img src="Bengal_Art/apply_images/<?php echo $row['image'];?>"  alt="" width="390px"height="201px"></a>
			
				  </div>
				  <!--/col-md-4-->
				  <!--col-md-4-->
				  <div class="col-md-8 apply_text">
                                      <h3><a href="apply_det.php?id=<?php echo $row['id'];?>"><?php echo $row['a_name']?></a><span> | <?php echo $row['date']?></span> </h3>
                           
			  <p>
				<?php
				echo substr($row['a_details'],0,650);
				?>...
                       <a  href="apply_det.php?id=<?php echo $row['id'];?>" class="collapsed">see more</a>  
                          </p>
			
                            </div>
							
				<?php } ?>
				
				
				
				
				<div class="col-md-12 text-right">
				
				<div class="pagination">
				<?php
				if($page>1){
				?>
				
				<a href="?page=<?php echo ($page-1); ?>">&laquo;</a>
				<?php } ?>
				  <?php
				
				
				for($i=1;$i<=$number_of_pages;$i++)
				{
					if($i==$page)
					{
						echo '<a class="active">'.$i.'</a>';
					}
					else
					{
					echo '<a href="apply.php?page='.$i.'">'.$i.'</a>';
					}
				}
				
				?>
				<?php
				if($page < $number_of_pages)
				{
				?>
				<a href="?page=<?php echo ($page+1); ?>">&raquo;</a>
				<?php } ?>
				  
				</div>
				
				</div>
				
								 
							
							
							

    </div>
  

</div>
</div>


<?php include("footer.php");?>

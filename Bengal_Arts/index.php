

<?php include("header.php");
	include 'Bengal_Art/connection_class.php';
    $dbs = new Database();
    if(!$dbs->connect()){
        print_r($dbs->getResult()) ;
        exit(0);
	}
	
?>     



<!-- Begin Main -->
<div role="main" class="main">
	
	<!-- Begin Main Slide -->
	
	<?php include("slaider2.php");?>   
	<!-- End Main Slide -->
</div>
              <div class="container">
                   <div class="custom_container">
                    <section class="picture_section" style="margin-top:50px;">
                    <!--<h4>Updates</h4>-->
                    <div class="row" style="margin-bottom:42px;">
                     <?php
                                   $dbs->sql("SELECT * FROM `artist_gallery_home` ORDER BY id DESC LIMIT 1");
                                   $resData=$dbs->getResult();
                                   $il=0;
                                   if($resData):
                                       foreach ($resData as $row):
                                           $il++;
            ?>
                    
                       <div class="col-md-6">
                         
                                   <article class="post post-large">
                                        <div class="post-image imagesover">
                                            
                                            <a href="residency.php">
                                                <img class="img-responsive new_imgage image2" src="uploads/art_artist_home/<?php echo $row['img1'];?>" alt="Blog">
                                                 <div class="text">
									                    Residency 
                  
									                </div>
                                                <div class="overlay">
									               
							                    </div>
							                </a>   
							                
                                       </div>
                                                               
                                                             
                                   </article>
                            
                      </div>
                       <div class="col-md-6">
                           <div class="row"style="margin-bottom:28px; ">
						   
						   
                               <div class="col-md-6 col-sm-6 art_artist imagesover2">
                                  <a href="workshop.php">
                                   <img class="img-responsive new_imgage2 image2" src="uploads/art_artist_home/<?php echo $row['img2'];?>" alt="" style="height:216px;width:216px">
                                   <div class="text2">
									       <p>Learning</p>
									      </div>
								   <div class="overlay3">
							       </div>
							      </a>
                               </div>
                               <div class="col-md-6 col-sm-6 imagesover2">
                                   <a href="event.php">
                                   <img class="img-responsive new_imgage2 image2" src="uploads/art_artist_home/<?php echo $row['img3'];?>" alt="" style="height:216px;width:216px">
                                   
                                   <div class="text2">
									       <p>Public</p>
									       <p>Event</p>
									   </div>
                                   <div class="overlay3">
							       </div>
							      </a>
                               </div>
                           </div>
                            <div class="row">
                               <div class="col-md-6 col-sm-6 art_artist imagesover2">
                                   <a href="grant_&_award.php">
                                   <img class="img-responsive new_imgage2 image2" src="uploads/art_artist_home/<?php echo $row['img4'];?>" alt="" style="height:216px;width:216px">
                                   <div class="text2">
									       <p>Grant & </p>
									       <p>Award</p>
									   </div>
                                   <div class="overlay3">
							       </div>
							      </a>
                               </div>
                               
                                <div class="col-md-6 col-sm-6 art_artist imagesover2">
                                   <!-- <a href="practice_studio.php"> -->
								   <a href="https://bengalarts.tumblr.com/"target="_blank">
                                   <img class="img-responsive new_imgage2 image2" src="uploads/art_artist_home/<?php echo $row['img5'];?>" alt="" style="height:216px;width:216px">
                                   <div class="text2">
									       <p>Notes</p>
									   </div>
                                   <div class="overlay3">
							       </div>
							      </a>
                               </div>
                                
                                
                            </div>
                            </div>
                           </div>
                    <?php
                        endforeach;
                        endif;
                    ?>    
                            
                       </div>
                    </section>
                    </div>
        



<?php 
	
		$sql="select * from home_update";
	
		$result=mysqli_query($con,$sql);

	?>
<!-- art & artists -->  
<div class="container">
	<div class="custom_container">
		<div class="row" id="demo" style="padding-left: 0px;padding-right: 0px;"> 			
			<section id="examples" class="picture_section" style="margin-top: 70px;">
		
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
									
									echo "<img src='uploads/art_artist/artist/{$row['image']}' alt='{$row['img_cap']}' style='width:200px;' />";
									?>
									
									</div>
									<?php
								echo "<p><a href='artist_profile.php?GetId=$id'>".$row['img_cap']."</a></p>";
								?>
							</div>
						</li>
				
									<?php }?>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>		
<!-- //art & artists --> 

<?php include("footer.php");?>

<?php include("Bengal_Art/db.php");?> 
  



<div class="container">
     <div class="custom_container">
<section class="main-slide picture_section"style="margin-bottom: 20px">

				
				
				   <!--  Demos -->

          <div class="owl-carousel owl-theme">
              
              <?php 


								$nr=1;
					
								
								$query="SELECT * FROM home_slider order by id DESC";
								$result=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($result))
								{


							?>
              
            <div class="item" id="item1"><a href="current_event.php?&id=<?php echo $row['id'];?>"><img src="Bengal_Art/slider_images/<?php echo $row['image'];?>"  alt=""   class="img-responsive"></a>
						<div class="item-caption">
							
								<div class="property-info">
									<div class="property-thumb-info-content">
                                                                           <p>
                                                                                   <?php echo $row['heading']?>
                                                                                    <br>
                                        <?php echo $row['img_cap']?>
                                        <br>                                   <?php echo $row['date']?>
										 
										</p>
                                                                                
									</div>
								</div>
							
						</div>
					</div>
        
        <?php

				$nr++;}
				
		
				?>
            
          </div>
 
          <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                items: 1,
                autoHeight: true,
				loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: false
              });
            })
          </script>
      

				
				
				
				
				
				
			</section>
            
</div>
</div>

 <script src="js/highlight.js"></script>
    <script src="js/app.js"></script>
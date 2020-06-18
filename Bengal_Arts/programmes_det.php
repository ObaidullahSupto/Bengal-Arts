 <?php
include_once("Bengal_Art/db.php");

$id=urldecode($_GET['id']);
$query=mysqli_query($con,"SELECT * FROM workshop WHERE id='$id' LIMIT 1");
$row=mysqli_fetch_array($query);
?>

 
 
 
 <?php include("header.php");?>  

 <!-- Begin Main Slidev

                <div role="main" class="main"style="margin-top: 50px;">
			
            
			
             <?php include("apply_slider.php");?>  
					
			 
			
			 
					
				
	
                </div>
				-->
<div class="container">
<div class="custom_container">
     <div class="row">
		<div class="col-md-12">
			<div class="item" id="item1"><a href="#"><img src="Bengal_Art/w_images/<?php echo $row['images'];?>" alt="Photo" class="img-responsive" style="width:1140px;height:600px;"></a>
						<div class="item-caption">
							
								
                                                                            <div class="apply_caption">
                                                                          <h3><?php echo $row['workshop_name']?></h3>
                                                                            <p>
                                                                                 
                                                                                   
                                                                                <?php echo $row['conducted_name']?>
										 
										</p>
                                                                            </div>
									
							
						</div>
					</div>
		
			<div class="tabbable-panel" style="margin-top: 50px;">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab">
							About </a>
						</li>
                                                <li style="padding-left: 20px;">
							<a href="#tab_default_2" data-toggle="tab">
							Video </a>
						</li>
						
					</ul>
					<div class="tab-content align_justiphy">
						<div class="tab-pane active" id="tab_default_1">
							<?php echo $row['workshop_details']?>
							
						</div>
						<div class="tab-pane" id="tab_default_2">
							
							<a href="<?php echo $row['v_link']?>" target="_blank"><?php echo $row['v_link']?></a>
						</div>
						
					</div>
				</div>
			</div>
		
        
                </div>
            
</div>
</div>
</div>





 <?php include("footer.php");?>
 <?php include("Bengal_Art/db.php");?> 
 <?php include("header.php");?> 
 
 
 <head>
		<script src="js/pagination.js"/>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
		<script  src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  	
</head>	

<?php  

 $connect = mysqli_connect("localhost", "wwwbijoy_bengal", "ckk(F)K@L!]u", "new_bijoy_bangla"); 
 $page_query = "SELECT * FROM people ORDER BY id DESC";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);
 
 ?> 	   
 
 
 
<div class="container">
<div class="custom_container">

    
     <div class="row">
		<div class="col-md-12">
			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#Vision" data-toggle="tab">
							Vision </a>
						</li>
                                                <li style="padding-left: 20px;">
							<a href="#History" data-toggle="tab">
							History </a>
						</li>
                                                   <li style="padding-left: 20px;">
							<a href="#People" data-toggle="tab">
							People </a>
						</li>
                                                   <li style="padding-left: 20px;">
							<a href="#Reach" data-toggle="tab">
							Reach us </a>
						</li>
						
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="Vision">
							<?php 
                				$query=mysqli_query($con,"SELECT * FROM about where catagories ='Vision'");
                				while($row=mysqli_fetch_array($query))
                				{
                			?>
                			
                				<div class="align_justiphy">
                										
                					<p><?php echo $row['catagories_details']?></p>
                				</div>
                			<?php } ?>
							
						</div>
						
						<div class="tab-pane" id="History">
							<?php 
                				$query=mysqli_query($con,"SELECT * FROM about where catagories ='History'");
                				while($row=mysqli_fetch_array($query))
                				{
                			?>
                				<div class="align_justiphy">
                												
                						<p><?php echo $row['catagories_details']?></p>
                				</div>
                			<?php } ?>
							
						</div>
						
                        <div class="tab-pane" id="People"style="margin-top:50px;">
						
							<div id="position"> </div>
							
						
							<div id="display_data">  
							
							</div> 
							<div class="row">
			<div class="col-md-12 text-right">
							<div class="display"> </div>
							</div>
							</div>
							<script type="text/javascript">
	$(document).ready(function(){
		$data = {};
		$data['pagination'] = ".display";
		$data['pagination_data'] = "#display_data";
		$data['pagination_position'] = "#position";
		$data['total_records'] = "<?php echo $total_records; ?>";
		$data['records_per_page'] = 4;
		pagination($data);
		
	});
 
 
 </script>
   						
								

						
						</div>
						
						
			
                                            

						<div class="tab-pane" id="Reach"style="margin-top:50px;">	
							<div>
                                    
                            <?php include("vane_slider.php");?>
                            
                                </div>
						</div>
						
					</div>
				</div>
			</div>
		
        
                </div>
            
</div>
    
    
    
    
    
    </div>
    </div>



  <?php include("footer.php");?>
  

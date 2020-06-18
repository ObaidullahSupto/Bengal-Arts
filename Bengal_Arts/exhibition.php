<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" />
<script src="js/jquery.fancybox.min.js"></script>
<?php include("header.php");
include 'Bengal_Art/connection_class.php';
$dbs = new Database();
if(!$dbs->connect()){
    print_r($dbs->getResult()) ;
    exit(0);
}

if(isset($_GET['GetId'])){
if(!empty($_GET['GetId'])){

    $dbs->sql("SELECT * FROM `exibiution_details` WHERE `exibitution_id`='".$dbs->escapeString($_GET['GetId'])."'");
    $result=$dbs->getResult();
    if($dbs->numRows()==0) {
        echo '<script>window.location="exhibitions.php";</script>';
    }




}else{
    echo '<script>window.location="exhibitions.php";</script>';
}
}else{
    echo '<script>window.location="exhibitions.php";</script>';
}

?>


	
	<?php 
	{
	$Id=$_GET['GetId'];	

	}
	?>
	
	<?php $con=mysqli_connect('localhost','wwwbijoy_bengal','ckk(F)K@L!]u');	
	if(!$con)
	{
		echo "not connected to server";
	}
	
	if(!mysqli_select_db($con,'new_bijoy_bangla'))
	{
		echo "database not found";
	}
	
	$sqli="select * from exibiution_details where exibitution_id=$Id";
	
	
	$result_art=mysqli_query($con,$sqli);

?>

<div class="container">
     <div class="custom_container">
    <div class="row">
	
        <div class="slider_heading">
            <?php
            $dbs->sql("SELECT `title`,`discription` FROM `exibiution` WHERE id='".$_GET['GetId']."'");
            $ManContent=$dbs->getResult();
            ?>

            <h3><?php echo $ManContent[0]['title'];?></h3>
            <p><?php echo $ManContent[0]['discription'];?></p>

        </div>
		<div class="col-md-12">
          <?php //tajul vai ?>
         <div class="item">

				<div id="content-7" class="content">      
					<ul id="bottom-slider">	
						<?php
        $img=json_decode($result[0]['images_array']);
        if($img):
        ?>
						<?php
                foreach ($img as $imgName):
                ?>			
						
							<div class="slider-item">
								<div class="slider-img-wrapper">
									 
									 <li>
										<a data-fancybox="gallery" href='uploads/exibutions/<?php echo $imgName;?>'><img src="uploads/exibutions/<?php echo $imgName;?>" width="370px;" height="228px;"style="margin-bottom:60px;"/ ></a>
									</li>
									 <?php																	
									//echo "<a href='uploads/exibutions/$imgName'><img src='uploads/exibutions/$imgName style='width:200px;' /></a> ";
									//echo "<img src='images/artist_work/{$row['work']}' id='myImg' ;style='width:200px;' />";
									?>
									
									</div>
									
							</div>
						
						
						<?php
                endforeach;
                ?>
				
									<?php
        endif;
        ?>
					</ul>
				</div>


            
        	 


			
        
        </div> <?php //tajul vai ?>
    </div>
    </div>
    
    <div class="row">
		<div class="col-md-12">
			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#About" data-toggle="tab">
							About </a>
						</li>
                                                <li style="padding-left: 20px;">
							<a href="#Related" data-toggle="tab">
							Related </a>
						</li>
                                                                
						
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="About">
							<p>
							<?php echo $result[0]['about_'];?>
                            </p>
							
						</div>
					

						<div class="tab-pane" id="Related">	
							<style>
								
							</style>
							<a href="<?php echo $result[0]['link'];?>"><?php echo $result[0]['link'];?></a>
							
						</div>
						
					</div>
				</div>
			</div>
		
        
                </div>
            
</div>
    
    
    
</div>

</div>




  




<?php include("footer.php");?>

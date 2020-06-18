
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" />
<script src="js/jquery.fancybox.min.js"></script>

<?php include("header.php");

include 'connection_class.php';
$dbs = new Database();
if(!$dbs->connect()){
    print_r($dbs->getResult()) ;
    exit(0);
}

if(isset($_GET['GetId'])){
if(!empty($_GET['GetId'])){

    $dbs->sql("SELECT * FROM `art` WHERE `artists_id`='".$dbs->escapeString($_GET['GetId'])."'");
    $result=$dbs->getResult();
    
	
	 $dbs->sql("SELECT * FROM `artists` WHERE `id`='".$dbs->escapeString($_GET['GetId'])."'");
    $resultart=$dbs->getResult();
    if($dbs->numRows()==0) {
        echo '<script>window.location="resources.php";</script>';
    }




}else{
    echo '<script>window.location="resources.php";</script>';
}
}else{
    echo '<script>window.location="resources.php";</script>';
}

?>




    <style>
    	ul{
			list-style: none outside none;
		    padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 30px;
        }
		.content-slider li{
		   
		    text-align: center;
		    color: #FFF;
		}
		.content-slider h3 {
		    margin: 0;
		  
		}
                .gallery
                {
                    display: inline-block;
                    margin-top: 20px;
                }
		
		 
        .modal-dialog {width:600px;}
		.thumbnail {margin-bottom:6px;}
		
		
		        .content {
    overflow: auto;
			position: relative;
    height: 324px;
    position: relative;
    padding: 0px 17px 0px 17px;
    margin: 0px auto;
    width: 100%;
}
		.content li{ margin: 0 4px; }
		.content li a{
			display: block;
			border: 7px solid rgba(255,255,255,.1);
			font-size: 11.7pt;
            font-family: HelveticaNeueLight;
		}	
	
		.content.light, .content.light .mTSButton{ background-color: #c2beb2; }
		.content.light li a{ border: 7px solid rgba(255,255,255,.4); }
		#content-1, #content-2{
			width: auto;
			height: 600px;
		}
		#content-1 ul li:first-child{ margin-top: 20px; }
		#content-1 ul li:last-child{ margin-bottom: 20px; }
		#content-2{ padding: 55px 10px; }
		#content-3 .mTSButton{ background-color: #333; }
		#content-5{ background-color: #444; }
		#content-6{ background-color: transparent; }
		#content-6 .mTSButton{
			background-color: rgba(0,0,0,.7);
			-moz-border-radius: 48px; -webkit-border-radius: 48px; border-radius: 48px;
		}
		#content-6 .mTSButtonLeft{ left: 5px;}
		#content-6 .mTSButtonRight{ right: 5px;}
		

    	ul{
	list-style: none outside none;
        padding-left: 0;
            margin: 0;
		}
        .demo .item{
            margin-bottom: 100px;
            
        }
		.content-slider li{
		   
		    text-align: center;
		    color: #FFF;
                    
		}
		.content-slider h3 {
		    margin: 0;
		  
		}
		
 
 		div#content-7 {
		    padding: 0;
		    overflow: hidden;
		    height: 260px;
		}
		.slider-img-wrapper img {
		    height: 225px;
		    width: auto !important;
		}
			#content-7 .lSAction>a {
		    font-size: 15px;
		    line-height: 35px;
		    color: #ffffff;
		    
		    border-radius: 50%;
		    height: 32px;
		    width: 32px;
		    text-align: center;
		    opacity: 0.8;
		    top:55%;
		}

		ul#bottom-slider p>a {
		    color: #000000;
		    text-decoration: none;
		    text-align: center;
		}
	
	
    </style>
	
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
	
	$sqli="select * from art where artists_id=$Id";
	
	
	$result_art=mysqli_query($con,$sqli);

?>

<div class="container">
    <div class="custom_container">
    <div class="row" id="demo">
         <div class="slider_heading">
            <h3><?php echo $resultart[0]['artists_name'];?></h3>
       </div>
       
      <div class="col-md-12 demo">
  
            <div class="item"style="margin-bottom:35px;">

				<div id="content-7" class="content">      
					<ul id="bottom-slider">	
						<?php
									while($row_art=mysqli_fetch_array($result_art)){
										
										?> 
									
						<li>
							<div class="slider-item">
								<div class="slider-img-wrapper">
									 
									 <?php																	
									echo "<a data-fancybox='gallery' data-caption='{$row_art['artwork_short_dis']}' href='uploads/art_artist/artwork/{$row_art['photo']}'><img src='uploads/art_artist/artwork/{$row_art['photo']}' style='width:200px;' /></a> ";
									//echo "<img src='images/artist_work/{$row['work']}' id='myImg' ;style='width:200px;' />";
									?>
									
									</div>
									<?php
								
								?>
							</div>
						</li>
				
									<?php }?>
					</ul>
				</div>


            
        	</div>
        </div>
        
        
        
        
    </div>
   <div class="row">
		<div class="col-md-12">
			<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#About1" data-toggle="tab">
							About </a>
						</li>
                                                <li style="padding-left: 20px;">
							<a href="#Text" data-toggle="tab">
							Read </a>
						</li>
                                            
                                                 <li style="padding-left: 20px;">
							<a href="#Video1" data-toggle="tab">
							Watch </a>
						</li>
                                                
						
					</ul>
					<div class="tab-content align_justiphy">
						<div class="tab-pane active" id="About1">
							<p>            
								<?php echo @$resultart[0]['about'];?>
							</p>
						</div>
						<div class="tab-pane" id="Read">
                                                   
							  <div class="row">

							  <?php 
											 $dbs->sql("SELECT id,`images_array`,`vedio_array`  FROM `art` WHERE `artists_id`='".$dbs->escapeString($_GET['GetId'])."' ORDER BY `id` DESC");
											$aPhoto=$dbs->getResult();
											if(@$aPhoto):
											foreach($aPhoto as $photo):
											$arrayPhoto=json_decode($photo['images_array']);
											foreach($arrayPhoto as $photoArray):
												
											?>
											
											 <div class="col-lg-3 col-sm-4 col-xs-6"><img class="thumbnail img-responsive" src="uploads/art_artist/cap_photo/<?php echo $photoArray;?>"></a></div>
											
											<?php 
												endforeach;
											endforeach;
											endif;?>
							 
									
								
								
							 
							  </div>

								<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
								  <div class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header">
										<button class="close" type="button" data-dismiss="modal">×</button>
									
									</div>
									<div class="modal-body">
										
									</div>
									<div class="modal-footer">
										<button class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								   </div>
								  </div>
								</div>


								<script type="text/javascript">
								$(document).ready(function() {
								$('.thumbnail').click(function(){
									  $('.modal-body').empty();
									var title = $(this).parent('a').attr("title");
									$('.modal-title').html(title);
									$($(this).parents('div').html()).appendTo('.modal-body');
									$('#myModal').modal({show:true});
								});
								});
								</script>
						</div>
						
                                             <div class="tab-pane" id="Video1">
											
											
												
													
													
														<p><?php echo @$resultart[0]['video'];?></p>
													
										
							
						</div>
						
						
                                            <div class="tab-pane" id="Audio">
											<?php foreach($artistPhoto as $audio): ?>
											
											<?php if ($audio['audio'] == !NULL) { ?>
													<div class="col-md-5 michael">
														<p><?php echo @$audio['audio'];?></p>
													</div>
											<?php } ?>
											<?php 
												endforeach;
											?>
						</div>
					
						<div class="tab-pane" id="Watch">
                                                <div class="row">
												
												<?php 
													if(@$artistPhoto):
													foreach($artistPhoto as $photoss):
													
													?>
													<?php if ($photoss['photo'] == !NULL) { ?>
													 <div class="col-md-5 michael">
                                                     <a href="art_artist.php?id=<?php echo $photoss['id'];?>"> <img src="uploads/art_artist/artwork/<?php echo $photoss['photo'];?>"alt=""height="228px;"></a>
                                                    <p><?php echo $photoss['artwork_title'];?></p>
													</div>
													<?php } ?>
													
													<?php 
													endforeach;
													endif;?>
												
												
                                               
												
												
                                                

                                                </div>	
                                                
						</div>
						
                        <div class="tab-pane" id="Text">
							<p>            
								<?php echo @$resultart[0]['text'];?>
							</p>
						</div>
						
					</div>
				</div>
			</div>
		
        
                </div>
            
</div>
    
    
</div>




<?php include("footer.php");?>
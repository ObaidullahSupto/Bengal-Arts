<?php include("header.php");

include_once("Bengal_Art/db.php");

$id=urldecode($_GET['id']);
$query=mysqli_query($con,"SELECT * FROM home_slider WHERE id='$id' LIMIT 1");
$row=mysqli_fetch_array($query);

?>    

<div class="container"style="margin-bottom: 130px;">
 <div class="custom_container">
    <div class="row">
        <div class="col-md-12 current-event">
            <h3>Current Events</h3>
                        <article class="post post-large">
				<div class="post-image">
								   <img src="Bengal_Art/slider_images/<?php echo $row['image'];?>"  alt="" style="width:942px;height:495.78px;"  class="img-responsive">
                               </div>
                            
			</article>
            <div class="event align_justiphy">
                <h2><?php echo $row['title']?></h2>
                <div class="event_heading">
                    <h4><?php echo $row['img_cap']?></h4>
                </div>
                 <p style="margin-top:27px">
                    <?php echo $row['s_text']?>  
				 </p>
           
            </div>
                 
           
        </div>
    </div>
</div>
</div>







<?php include("footer.php");?>

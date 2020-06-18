 
<?php include("header.php");

include 'connection_class.php';
$dbs = new Database();
if(!$dbs->connect()){
    print_r($dbs->getResult()) ;
    exit(0);
}

if(isset($_GET['id'])){
if(!empty($_GET['id'])){

    $dbs->sql("SELECT
    `art`.`id`
    , `art`.`artists_id`
    , `artists`.`artists_name`
	, `artists`.`about`
    , `artists`.`title`
    , `art`.`photo`
    , `art`.`vedio_array`
    , `art`.`audio`
    , `art`.`artwork_title`
    , `art`.`artwork_short_dis`
    , `art`.`images_array` FROM .`art` INNER JOIN `artists`   ON (`art`.`artists_id` = `artists`.`id`) WHERE `art`.`id`='".$dbs->escapeString($_GET['id'])."'");
    $result=$dbs->getResult();
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
body {
    margin-top:50px;
    font-family: 'Montserrat',sans-serif;
}


.panel-heading:hover {
    cursor:pointer;
}
.panel-heading {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;    
}
strong{color:green;}
.side-tab:hover {
        cursor: pointer;
    }
    .panel.panel-default {
        border: none;
        box-shadow: none !important;
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
        
    }
    .panel-heading {
        border: none;
        padding: 0px 5px;
    
    }
  
    .p_style {
        font-size: 6pt;
       
    }
    
    .artist_h {
        font-size: 11pt;
        margin-left: 20px;
    }
	.panel-body{ padding: 0px 5px;}


</style>

<div class="container"style="margin-top: 155px;margin-bottom: 234px;">
    <div class="custom_container">
           

       
    <div class="row">
        <h3 class="artist_h"><?php echo $result[0]['artists_name'];?></h3>
		
		<?php
								$dbs->sql("SELECT * FROM `art` WHERE `artists_id`='".$dbs->escapeString($result[0]['artists_id'])."' ORDER BY `id` DESC");
								$artistPhoto=$dbs->getResult();
						
								if(@$artistPhoto):
								foreach($artistPhoto as $photoss):
														?>
							
		
		
        <div class="col-md-2">
            <!-- begin panel group -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                
                <!-- panel 1 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#<?php echo $photoss['id'];?>" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="heading<?php echo $photoss['id'];?>"data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $photoss['id'];?>" aria-expanded="true" aria-controls="collapse<?php echo $photoss['id'];?>">
                           <img src="uploads/art_artist/artwork/<?php echo $photoss['photo'];?>" alt=""/>
                        </div>
                    </span>
                    
                    <div id="collapse<?php echo $photoss['id'];?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $photoss['id'];?>">
                        <div class="panel-body">
                           
                            <p class="p_style align_justiphy"><?php echo $photoss['artwork_short_dis'];?></p>
                        	
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
               
                
               
                      
               
            </div> <!-- / panel-group -->
             
        </div> <!-- /col-md-4 -->
        
        <div class="col-md-10">
            <!-- begin macbook pro mockup -->
            <div class="md-macbook-pro md-glare">
                <div class="md-lid">
                    <div class="md-screen">
                    <!-- content goes here -->                
                        <div class="tab-featured-image">
                            <div class="tab-content">
                                <div class="tab-pane  in active" id="<?php echo $photoss['id'];?>">
									<img src="uploads/art_artist/artwork/<?php echo $photoss['photo'];?>" alt=""/>
                                      <div class="align_justiphy">
										<?php echo $photoss['artwork_short_dis'];?>
									  </div>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 



        </div>
		<?php 
									endforeach;
									endif;?>
		
    </div> 
 

    <!-- End Carousel -->
 
</div>	
		
	</div>






<?php include("footer.php");?>

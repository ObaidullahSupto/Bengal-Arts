<?php include("header.php");
include 'Bengal_Art/connection_class.php';
$dbs = new Database();
if(!$dbs->connect()){
    print_r($dbs->getResult()) ;
    exit(0);
}
?>  

<div class="container">
    <div class="custom_container"style="margin-top:50px">
	<div class="row">
		<div class="col-md-12">		
			<!-- tabs left -->
			<div class="tabbable tabs-left row" style="margin-left:0px">
                         
				<ul class="nav nav-tabs col-md-1 col-sm-12 col-xs-12 year" id="style-3">
                                    
					<?php
                    $dbs->sql("SELECT  DISTINCT YEAR(`exi_date`) AS 'year' FROM `exibiution` ORDER BY YEAR(`exi_date`) DESC ");
                    $result=$dbs->getResult();
                    $i=17;
                    if($result){
                        foreach ($result as $res):
                            $i++;
                            ?>
                            <li <?php if($i==18){echo 'class="active"';}?>><a href="#<?php echo $res['year']?>" data-toggle="tab"><?php echo $res['year']?></a></li>
                            <?php
                            endforeach;
                    }
                    ?>
                                        
				</ul>
			
				<div class="tab-content col-md-11 col-sm-12 col-xs-12 content_margin" style="padding-right:0px;">
                       <?php
                            $i=17;
                        if($result){
                            foreach ($result as $res):
                                $i++;
                       ?> 
				<div class="tab-pane <?php if($i==18){echo 'active';}?> paginationJqueyr" id="<?php echo $res['year']?>">					   
                    
                  <div class="col-md-3"></div>
				     <?php
                                    $dbs->sql("SELECT * FROM `exibiution` WHERE YEAR(`exi_date`)='". $res['year']."' ORDER BY id DESC");
                                    $resData=$dbs->getResult();
                                    $il=0;
                                    if($resData):
                                        foreach ($resData as $row):
                                                if($il==3){
                                                echo '<div class="col-md-3"></div>';
                                                $il=0;
                                                }
                                            $il++;
                     ?>
             		<div class="col-md-3 col-sm-4"style="z-index:1;">
                    
                      <div class="dropdown"style="width: 180px;">		
                            <div class="photo_margin">
							<a href="exhibition.php?GetId=<?php echo $row['id'];?>" class="dropbtn list-group-item "style="border-radius: 0px;">
							<img src="uploads/exibutions/<?php echo $row['image_'];?>"class="img-responsive" style="width: 250px; height: 150px;"> 
							</a>
							</div>
					<div class="dropdown-content"style="width: 180px;height:150px;">
                                            
                                            
                                            <div class="tab_heading">
                                                 <a href="exhibition.php?GetId=<?php echo $row['id'];?>">
                                                                    <h4><?php echo $row['title'];?></h4>
                                                                    <p><?php echo $row['discription'];?></p>
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
                             <?php
                            endforeach;
                        }
                        ?>
                  
				</div>
			</div>
			<!-- /tabs -->
		</div>
		
	</div><!-- /row -->
            <div class="row"style="margin-top: 30px; padding:0px;">
        
        <div class="col-md-12 text-right" style="padding:0px;">
            <p class="paragraph_text">Contextualising art from the region in curated exhibitions,giving access to international art to the local public has been central to the Arts programme's endeavour since its inception in 2000. The programme has over the years organised an important number of exhibitions of different size and scope. A selection of significant art shows we have held over the years is available on this page, from surveys of contemporary Bangladeshi creation to retrospectives of regional Modern art. Some of these exhibitions were organised as part of the programming of the Bengal Gallery of Fine Arts and Bengal Art Lounge, two commercial galleries that operated until 2016. </p>
        </div>
    </div>
</div>
</div>




 <?php include("footer.php");?>
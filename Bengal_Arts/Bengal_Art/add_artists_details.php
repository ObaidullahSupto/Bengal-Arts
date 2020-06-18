<?php
@session_start();
require_once ('connection_class.php');
$db = new Database();
if(!$db->connect()){
    print_r($db->getResult()) ;
    exit(0);
}
$message="";
$idimg= time().rand().'_'.session_id();
if(isset($_POST['submit'])){

    $db->sql("SELECT * FROM `art` WHERE `artists_id`='".$db->escapeString($_POST['artists_id'])."'");
   // if($db->numRows()==0) {
        $file_name = $_FILES['images']['name'];
        $file_size = $_FILES['images']['size'];
        $file_tmp = $_FILES['images']['tmp_name'];


//    PDF
        $photo_name = $_FILES['photo']['name'];
        $PDF_size = $_FILES['photo']['size'];
        $PDF_tmp = $_FILES['photo']['tmp_name'];

       

           
            $artphoto = '';
           
                $PDF_ext = strtolower(end(explode(".", $photo_name)));
				$ext_photo = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($PDF_ext, $ext_photo)) {
                    $newImageName = $idimg . '.' . $PDF_ext;
                    $artphoto = $newImageName;
                    $newIFleName = "../uploads/art_artist/artwork/" . $newImageName;
                    @move_uploaded_file($PDF_tmp, $newIFleName);
                }
            
            $db->insert("art", array(
                "artists_id" => $db->escapeString($_POST['artists_id']),
                "vedio_array" => $db->escapeString($_POST['vedio_array']),
                "audio" => $db->escapeString($_POST['audio']),
                "artwork_title" => $db->escapeString($_POST['artwork_title']),
				"photo" => $db->escapeString($artphoto),
                "artwork" => $db->escapeString($_POST['artwork']),
				"artwork_short_dis" => $db->escapeString($_POST['artwork_short_dis']),
				"images_array" => $db->escapeString(json_encode($imageDbName))
				
                
                
            ));
            $message = "Data Insert Successfully...";
     //   }
   
}

?>
<script src="ckeditor/ckeditor.js"></script>
<!-- page content -->

            <div class="page-title">
              <div class="title_left">
                <h3>Art & Artist of Bangal Foundation</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Art & Artist <small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>
					<h1><?php echo $message;?></h1>
                    <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">

					<div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artists_id">Artists Name<span class=""></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control"  name="artists_id">
								<option value="">Select Artist</option>
								<?php
								$db->sql("SELECT id, CONCAT(artists_name,'  { ',`title`,' }') AS 'artists_name' FROM `artists` ORDER BY id DESC");
								$res=$db->getResult();
								if($res){
									foreach ($res as $rowss):
										echo '<option value="'.$rowss['id'].'">'.$rowss['artists_name'].'</option>';
										endforeach;
								}
								?>
								?>
							</select>
                        </div>
                      </div>
					  
					  
					  
					  
					  
					  
					  
					   
					 
					
					  
					 <!-- <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artwork_title">Artwork Title <span class=""></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="artwork_title" name="artwork_title"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->
					  
					   
					
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="photo">Artwork Images<span class=""></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="photo" name="photo"   class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					   
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artwork_short_dis">Artwork Short Description <span class=""></span>
                        </label>
                        
						<div class="col-md-10 col-sm-6 col-xs-12">
							<textarea id="artwork_short_dis" rows="5" name="artwork_short_dis" class="resizable_textarea form-control ckeditor" placeholder="write down artists information.."></textarea>
						</div>
                      </div>
					  
					 <!--  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artwork">Artwork Description <span class=""></span>
                        </label>
                        
						<div class="col-md-10 col-sm-6 col-xs-12">
							<textarea id="artwork" rows="5" name="artwork" class="resizable_textarea form-control ckeditor" placeholder="write down artists information.."></textarea>
						</div>
                      </div> -->
					  
					
					  
					
                      
                      <div class="ln_solid"></div>
					  
					  
					  
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                          <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
                        </div>
                      </div>

                    </form>
					</div>
                </div>
              </div>
            </div>
			

			
  
	



			  
	

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

    $db->sql("SELECT * FROM `exibiution_details` WHERE `exibitution_id`='".$db->escapeString($_POST['exibitution_id'])."'");
    if($db->numRows()==0) {
        $file_name = $_FILES['images']['name'];
        $file_size = $_FILES['images']['size'];
        $file_tmp = $_FILES['images']['tmp_name'];


//    PDF
      

        $imageDbName = array();
        if (count($file_name) > 0) {
            $il = 0;
            foreach ($file_name as $k => $FileNameC) {
                $il++;
                $file_ext = strtolower(end(explode(".", $file_name[$k])));
                $ext_boleh = array("jpg", "jpeg", "png", "gif", "bmp");
                if (in_array($file_ext, $ext_boleh)) {
                    $imageDbName[$il] = $idimg . $il . '.' . $file_ext;
                    $sumber = $file_tmp[$k];
                    $tujuan = "../uploads/exibutions/" . $imageDbName[$il];
                    move_uploaded_file($sumber, $tujuan);
                }
            }
            
            $db->insert("exibiution_details", array(
                "about_" => $db->escapeString($_POST['about_']),
                "exibitution_id" => $db->escapeString($_POST['exibitution_id']),
                "vedio_array" => $db->escapeString($_POST['vedio_array']),
                "text_dis" => $db->escapeString($_POST['text_dis']),
				"link" => $db->escapeString($_POST['text_link']),
                
                "images_array" => $db->escapeString(json_encode($imageDbName))
            ));
            $message = "Data Insert Successfully...";
        } else {
            $message = "Image Null not alow!";
        }
    }else{
        $message = "Data already existed";
    }
}
?>
<script src="ckeditor/ckeditor.js"></script>
<!-- page content -->

            <div class="page-title">
              <div class="title_left">
                <h3>Exhibition of Bangal Foundation</h3>
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
                    <h2>Exhibition <small> </small></h2>
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
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="Exhibition">Exhibition  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" required name="exibitution_id">
								<option value="">Select Exhibution</option>
								<?php
								$db->sql("SELECT id, CONCAT(title,'  { ',`exi_date`,' }') AS 'title' FROM `exibiution` ORDER BY id DESC");
								$res=$db->getResult();
								if($res){
									foreach ($res as $rowss):
										echo '<option value="'.$rowss['id'].'">'.$rowss['title'].'</option>';
										endforeach;
								}
								?>
							</select>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="about">About <span class="required">*</span>
                        </label>
                        
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="about" rows="5" name="about_" class="resizable_textarea form-control ckeditor" placeholder="write down exhibition information.."" required="required"></textarea>
						</div>
                      </div>
					  
					  <!-- <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="v_link">Video</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="v_link" name="vedio_array" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->
					  
						  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="text">Text 
                        </label>
                        
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="text" rows="5" name="text_dis" class="resizable_textarea form-control ckeditor" placeholder="write down exhibition text information.."></textarea>
						</div>
                      </div>
					  
					 
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="text">Related 
                        </label>
                        
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="text" rows="5" name="text_link"  class=" form-control " placeholder="write down exhibition link.."></textarea>
						</div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="image">Gallery Images  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="image" name="images[]" multiple required="" class="form-control col-md-7 col-xs-12">
<span style="color:red;">Images Dimensions: 370 * 228px</span>
                        </div>
                      </div>
					  
					
                      
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
			

			
  
	



			  
	

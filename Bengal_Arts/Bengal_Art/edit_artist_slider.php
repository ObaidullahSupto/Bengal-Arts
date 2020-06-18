<?php
@session_start();
require_once ('connection_class.php');
$db = new Database();
if(!$db->connect()){
    print_r($db->getResult()) ;
    exit(0);
}
$message="";


?>
<script src="ckeditor/ckeditor.js"></script>
<!-- page content -->

            <div class="page-title">
              <div class="title_left">
                <h3>Artist of Bangal Foundation</h3>
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
                    <h2>Artist Slider<small> </small></h2>
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
                    <form class="form-horizontal form-label-left" action="content.php?sk=artist_slider" method="post">

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
								
							</select>
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
			

			
  
	



			  
	

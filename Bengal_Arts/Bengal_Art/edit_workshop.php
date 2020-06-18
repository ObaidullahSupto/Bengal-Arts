<?php include('db.php');
$id=$_GET['id'];
$query=mysqli_query($con,"select * FROM workshop where id='$id' LIMIT 1");
$row=mysqli_fetch_array($query);
?>
<script src="ckeditor/ckeditor.js"></script>
		<div class="page-title">
              <div class="title_left">
                <h3>Bangal Foundation Information Edit</h3>
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
                    <h2>Workshop<small> Vision / History / Trust</small></h2>
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
                    <br />
                    <form class="form-horizontal form-label-left" action="content.php?sk=update_workshop&id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
						
						<div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="Catagories">Catagories  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="Catagories" class="form-control" name="catagories" required="required">
							 <option value="">Choose option</option>
						     <option value="Workshop" <?php if($row['catagories']=='Workshop') echo "Selected";?>>Workshop</option>
						     <option value="Practice Studio" <?php if($row['catagories']=='Practice Studio') echo "Selected";?>>Practice Studio</option>
						     <option value="Event" <?php if($row['catagories']=='Event') echo "Selected";?>>Event</option>
						     <option value="Grant & Award" <?php if($row['catagories']=='Grant & Award') echo "Selected";?>>Grant & Award</option>
						     <option value="Residency" <?php if($row['catagories']=='Residency') echo "Selected";?>>Residency</option>
						     <option value="Partnership Project" <?php if($row['catagories']=='Partnership Project') echo "Selected";?>>Partnership Project</option>
						
                          </select>
                        </div>
                      </div>
						
						
						
						
						
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="workshop_name">Workshop Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="workshop_name" name="workshop_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['workshop_name'];?>">
                        </div>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="images">Images
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="images" name="images" class="form-control col-md-7 col-xs-12" value="<?php echo $row['images'];?>">
                        </div>
                        </div>
                      </div>
					  
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="short_dip"> Short discription<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="short_dip" name="short_dip" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['short_dip'];?>">
                        </div>
                        </div>
                      </div>
					  
					  
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="conducted_name">Conducted Name  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="conducted_name" name="conducted_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['conducted_name'];?>">
                        </div>
                        </div>
                      </div>
					  
					  
						<div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="v_link">Video link <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="v_link" name="v_link" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['v_link'];?>">
                        </div>
                        </div>
                      </div>
					  
						<div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="workshop_details"> Workshop Details<span class="required">*</span>
                        </label>
						<div class="col-md-10 col-sm-10 col-xs-12">
							<textarea id="workshop_details" rows="10" name="workshop_details" class="resizable_textarea form-control ckeditor" placeholder="write down your Company information & must be followed categories.." required="required">
							<?php echo $row['workshop_details'];?>
							
							</textarea>
						</div>
                      </div>
					  
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
						  <input type="submit" class="btn btn-success" name="update" value="UPDATE" />
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
			



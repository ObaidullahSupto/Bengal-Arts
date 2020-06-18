<?php include('db.php');
$id=$_GET['id'];
$query=mysqli_query($con,"select * FROM artists where id='$id' LIMIT 1");
$row=mysqli_fetch_array($query);
?>
<script src="ckeditor/ckeditor.js"></script>
		<div class="page-title">
              <div class="title_left">
                <h3>Bangal Foundation Artist Information Edit</h3>
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
                    
					
					 <form class="form-horizontal form-label-left" action="content.php?sk=update_artist_information&id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
					 
					
					
						  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artists_name">Artists Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="artists_name" name="artists_name" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['artists_name'];?>" >
                        </div>
                      </div>
					  
					 <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Designation <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['title'];?>" >
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artists_name">Video<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="video" rows="10" name="video" class="form-control col-md-7 col-xs-12"  required="required" ><?php echo $row['video']; ?> </textarea>
                        </div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="about">Artists About <span class="required">*</span>
                        </label>
                        
						<div class="col-md-6 col-sm-6 col-xs-12">
						
							<textarea id="about" rows="10" name="about" class="resizable_textarea form-control ckeditor"  required="required" ><?php echo $row['about']; ?> </textarea>
						</div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="text">Artists Read<span class="required">*</span>
                        </label>
                        
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="text" rows="5" name="text" class="resizable_textarea form-control ckeditor"  required="required" ><?php echo $row['text'];?></textarea>
						</div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="birth_date">Birth Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="birth_date" name="birth_date" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['birth_date'];?>">
                        </div>
                      </div>
					  
					  
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="images">Images
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="images" name="images" class="form-control col-md-7 col-xs-12" value="<?php echo $row['image_'];?>">
						  <span style="color:red;">Images Dimensions: 200 * 255px <?php echo $row['image_']; ?></span>
                        </div>
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
			



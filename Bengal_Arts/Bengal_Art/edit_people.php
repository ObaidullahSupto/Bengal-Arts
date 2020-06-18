<?php include('db.php');
$id=$_GET['id'];
$query=mysqli_query($con,"select * FROM people where id='$id' LIMIT 1");
$row=mysqli_fetch_array($query);
?>
<script src="ckeditor/ckeditor.js"></script>
		<div class="page-title">
              <div class="title_left">
                <h3>people Edit</h3>
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
                    <h2>About <small> Vision / History / people</small></h2>
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
                    <form class="form-horizontal form-label-left" action="content.php?sk=update_people&id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="people_Images">people Images<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="people_Images" name="image" class="form-control col-md-7 col-xs-12">
						  
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="People_Name">People Name<span class="required">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="People_Name" name="People_Name" class="form-control col-md-7 col-xs-12" required="required"><?php echo $row['name'];?></textarea>
						</div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="People_Details">people Details<span class="required">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="People_Details" rows="5" name="details" class="resizable_textarea form-control" required="required"><?php echo $row['about'];?></textarea>
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
			



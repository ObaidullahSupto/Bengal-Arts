<?php include('db.php');
$id=$_GET['id'];
$query=mysqli_query($con,"select * FROM exibiution where id='$id' LIMIT 1");
$row=mysqli_fetch_array($query);
?>
<script src="ckeditor/ckeditor.js"></script>
		<div class="page-title">
              <div class="title_left">
                <h3>Bangal Foundation Exhibition Information Edit</h3>
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
                    
					
					 <form class="form-horizontal form-label-left" action="content.php?sk=update_exhibiton_information&id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
					 
					 <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['title']; ?>">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="description">Description <span class="required">*</span>
                        </label>
                        
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="discription" rows="5" name="discription" class="resizable_textarea form-control ckeditor"  value="<?php echo $row['discription']; ?>"></textarea>
						</div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="date"> Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['exi_date']; ?>">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="image">Gallery Images  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="image" name="image"  class="form-control col-md-7 col-xs-12" value="../uploads/exibutions/<?php echo $row['image_'];?>">
<span style="color:red;">Images Dimensions: 180 * 150px</span>
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
			



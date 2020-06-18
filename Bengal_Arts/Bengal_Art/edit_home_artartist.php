<?php include('db.php');
$id=$_GET['id'];
$query=mysqli_query($con,"select * FROM artist_gallery_home where id='$id' LIMIT 1");
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
                    <h2>Home artist <small> Vision / History / Trust</small></h2>
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
                    <form class="form-horizontal form-label-left" action="content.php?sk=update_home_artartist&id=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">

					  
					  <!-- <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artist_link"> Images Link<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="artist_link" name="artist_link" required="required" class="form-control col-md-7 col-xs-12" value="<?php //echo $row['artist_link'];?>">
                        </div>
                        </div>
                      </div> -->
					  
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img1">Images One<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img1" name="img1"  class="form-control col-md-7 col-xs-12" value="../uploads/art_artist_home/<?php echo $row['img1'];?>">
						  
                        </div>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img2">Images Two<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img2" name="img2"  class="form-control col-md-7 col-xs-12" value="<?php echo $row['img2'];?>">
                        </div>
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img3">Images Three<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img3" name="img3"  class="form-control col-md-7 col-xs-12" value="<?php echo $row['img3'];?>">
                        </div>
                        </div>
                      </div>
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img3">Images Four<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img4" name="img4"  class="form-control col-md-7 col-xs-12" value="<?php echo $row['img4'];?>">
                        </div>
                        </div>
                      </div>
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="img3">Images Five<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="img5" name="img5"  class="form-control col-md-7 col-xs-12" value="<?php echo $row['img5'];?>">
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
			



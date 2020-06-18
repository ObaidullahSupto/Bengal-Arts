<?php
	include('db.php');
	if(isset($_POST['submit'])){
	$artists_name=$_POST['artists_name'];
	$title=$_POST['title'];
	$video = $_POST['video'];
	$birth_date=$_POST['birth_date'];
	$about=$_POST['about'];
	$text=$_POST['text'];
	$query=mysqli_query($con,"insert into artists(artists_name,title,video,birth_date,about,text,slider)VALUES('$artists_name','$title','$video','$birth_date','$about','$text','no')");
	
	
	
	$id=mysqli_insert_id($con);
	$fileName = $_FILES['images']['name'];
	$fileType = $_FILES['images']['type'];
	$explode = explode('.',$fileName);
	$images = $id.'.'.$explode[1];
	move_uploaded_file($_FILES["images"]["tmp_name"],"../uploads/art_artist/artist/".$images);
	mysqli_query($con,"UPDATE  artists SET image_='$images' WHERE id='$id' LIMIT 1");

	if($query)
	{
	$message="Data insert Successfully..";
             }else{
                 $message="Please try agin with valide data..";
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
                    <h2>Art & Artist<small> </small></h2>
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
					<h1><?php echo $message;?></h1>
     <form class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">
					 
					 <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artists_name">Artists Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="artists_name" name="artists_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  
					  
					 <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="title">Designation <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="artists_name">Video<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="video" name="video" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="about">Artists About <span class="required">*</span>
                        </label>
                        
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="about" rows="5" name="about" class="resizable_textarea form-control ckeditor" placeholder="write down artists information.."" required="required"></textarea>
						</div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="text">Artists Read<span class="required">*</span>
                        </label>
                        
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="text" rows="5" name="text" class="resizable_textarea form-control ckeditor" placeholder="write down artists text information.."" required="required"></textarea>
						</div>
                      </div>
					  
					    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="birth_date">Birth Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="birth_date" name="birth_date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  
					  
					  	<div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="image">Images<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="images" name="images" required="required" class="form-control col-md-7 col-xs-12">
<span style="color:red;">Images Dimensions: 200 * 255px</span>
                        </div>
                      </div>
					  
					
					
					  

					  
					
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                          <input style="font-size:17px;" class="btn btn-success submit" type="submit" name="submit" value="Submit"/>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
			

			
  
	



			  
	

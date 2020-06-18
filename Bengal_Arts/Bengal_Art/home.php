<?php
@session_start();
if(!isset($_SESSION['id']))
{
echo "<script>window.location='index.php?sk=invalid'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bengal Foundation</title>
	
  	<!-- Favicon icon link -->
  	<link rel="shortcut icon" type="image/x-icon" href="../images//favicon.ico">

   <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

     <!-- Custom Theme Style -->
    <link href="build/css/custom.css" rel="stylesheet">
 

    	<script type="text/javascript">
    	$(document).ready(function(){
    		$(".tabs > ul").tabs();
    	});
    	</script>
    	<title>Administration</title>
    	<script type="text/javascript"> 
        function show1(){
        if (!document.all&&!document.getElementById)
        return
        thelement=document.getElementById? document.getElementById("digital-clock"): document.all.digital-clock
        var Digital=new Date()
        var hours=Digital.getHours()
        var minutes=Digital.getMinutes()
        var seconds=Digital.getSeconds()
        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12
        if (minutes<=9)
        minutes="0"+minutes
        if (seconds<=9)
        seconds="0"+seconds
        var ctime=hours+":"+minutes+":"+seconds+" "+dn
        thelement.innerHTML=""+ctime+""
        setTimeout("show1()",1000)
        }
        window.onload=show1
    </script>
</head>

<body>


<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="content.php?sk=dashboard" class="site_title"> <span>Bengal Foundation</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['username'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br/>

		<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>MENU LIST</h3>
                <ul class="nav side-menu">
				<li><a href="content.php?sk=dashboard"><i class="fa fa-tachometer"></i> Dashboard </a></li>
				<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="content.php?sk=home_slider">Sliders</a></li>
                      <li><a href="content.php?sk=home_artartist">Home Programmes</a></li>
                      <li><a href="content.php?sk=home_update">Home Resources</a></li>
                    </ul>
                </li>
				<li><a><i class="fa fa-pencil-square-o"></i> Resources <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="content.php?sk=new_artist_add">Add New Artist</a></li>
                      <li><a href="content.php?sk=add_artists_details">Add Artists Details</a></li>
					  <li><a href="content.php?sk=edit_artist_details">Edit Artists Details</a></li>
					  <li><a href="content.php?sk=edit_artist_slider">Edit (Artwork Images)</a></li>
                     
                      
                    </ul>
                </li>
				<li><a><i class="fa fa-bar-chart-o"></i> Exhibition <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="content.php?sk=new_exhibution">New Exhibition</a></li>
                      <li><a href="content.php?sk=new_exhibutionDetails">New Exhibition Details</a></li>
                      
                    </ul>
                </li>
				<li><a><i class="fa fa-tasks"></i> Programmes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="content.php?sk=workshop">Add New/Edit</a></li>
                      <!--<li><a href="content.php?sk=workshop_view">Practice Studio</a></li>
                      <li><a href="">Event</a></li>
                      <li><a href="">Grant $ Award</a></li>
                      <li><a href="">Residency</a></li>
                      <li><a href="">Partnership Project</a></li> -->
                    </ul>
                </li>
				<li><a><i class="fa fa-smile-o"></i> Apply <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="content.php?sk=apply">Add</a></li>
                      <li><a href="content.php?sk=apply_view">View</a></li>
                    </ul>
                </li>
				
				<?php if($_SESSION['Permission']=="Admin"):?>
                  <li><a><i class="fa fa-table"></i> About <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="content.php?sk=About">Vision</a></li>
                      <li><a href="content.php?sk=About">History</a></li>
                      <li><a href="content.php?sk=People">People</a></li>
                      <li><a href="content.php?sk=venues">Venues</a></li>
                    </ul>
                  </li>
				  <?php endif;?>
                
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
			
			<!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
			
			</div>
        </div>
			
			<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
			   
			  <div class="nav toggle">
				<strong id="digital-clock"></strong>
			  </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/logo.png" alt=""><?php echo $_SESSION['username'];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="content.php?sk=user"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <h3><strong id="digital-clock"></strong><span style="font-size:12px;">Today, <?php echo date('d M, Y')?></span></h3>
				  
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
		
        <!-- page content -->
        <div class="right_col" role="main">
		
		 <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
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
                    <h2>Dashboard</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      Add content to the page ...
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            © 2017 Bengal Foundation. All Rights Reserved | Develop by <a href="https://bijoyekushe.net">Ananda Computers</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

	</body>
</html>

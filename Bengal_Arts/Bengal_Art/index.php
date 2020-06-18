<!--         <?php
//print_r($_GET);
$sk=$_GET['sk'];
?> -->

<?php
$sk = isset($_GET['sk']) ? $_GET['sk'] : '';
?>
<!DOCTYPE html>
<html lang="en">
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
    <link href="assets/login/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/login/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/login/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/login/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/login/custom.min.css" rel="stylesheet">

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
		      <section class="login_content">
    				<div>
    					<img src="../images//favicon.ico">
              <h2> Bengal Foundation Arts programme</h2>
            </div>
		 
            <form action="loginaction.php" method="post">
              <h1>Login Form</h1>

			   <blink style="color:#000000;"><?php if($sk=='invalid'){echo 'Wrong Email or Password';}else if($sk=='logout'){echo 'You Successfully Logout!';}?></blink>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="" />
              </div>
              <div>
				<input class="btn btn-default submit" type="submit" name="submit" value="Login"/>
				
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
				
                  <p>©2017 All Rights <a href="http://bijoyekushe.net/" target="_blink">Ananda Computers.</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
				<div>
					<img src="../images//favicon.ico">
                  <h2> Bengal Foundation Arts programme</h2>
                </div>
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="javascript:void(0)">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2017 All Rights <a href="http://bijoyekushe.net/" target="_blink">Ananda Computers.</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

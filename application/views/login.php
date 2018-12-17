<!-- link index page -->
<?php
$actual_link = "http://localhost/bigpro/";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/bootstrap.min.css"/>

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/style.css"/>

    <!--===============================================================================================-->
    	<link rel="icon" type="image/png" href="<?php echo $actual_link ?>login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/css/util.css">
    	<link rel="stylesheet" type="text/css" href="<?php echo $actual_link ?>login/css/main.css">
    <!--===============================================================================================-->
  </head>
  <body>
    <header id="header">
      <!-- nav -->
      <div id="nav">
        <!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">

						<!-- logo -->
						<div class="nav-logo">
							<a href="<?php echo site_url('Welcome/index')?>" class="logo"><img src="<?php echo $actual_link ?>webmag/img/SIAPSIAGA.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li class="cat-2"><a href="category.html">Login</a></li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->

					</div>
				</div>
				<!-- /Main Nav -->
      </div>
      <!-- /nav -->
    </header>
    <div class="limiter">
  		<div class="container-login100">
  			<div class="wrap-login100">
  				<form class="login100-form validate-form" method="post" action="<?php echo site_url('Login/verifikasi') ?>">
  					<span class="login100-form-title p-b-43">
  						Login to continue
  					</span>
            <style>
              .form-group>input.form-control{
                border-radius: 11px;
                display: block;
                line-height: all 0.4s;
                padding: 36px;
                font-family: Montserrat-Regular;
                font-size:18px;
                color: #555555;
                background-color: transparent;
              }
            </style>

            <div class="form-group">
                <input type="text" name="username" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>

  					<!-- <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

  						<span class="focus-input100"></span>
  						<span class="label-input100">Username</span>
              <input class="input100" type="text" name="username" value="tessss">
  					</div> -->


  					<!-- <div class="wrap-input100 validate-input" data-validate="Password is required">
  						<input class="input100" type="password" name="password">
  						<span class="focus-input100"></span>
  						<span class="label-input100">Password</span>
  					</div> -->

  					<div class="flex-sb-m w-full p-t-3 p-b-32">
  						<div class="contact100-form-checkbox">
  							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
  							<label class="label-checkbox100" for="ckb1">
  								Remember me
  							</label>
  						</div>

  						<div>
  							<a href="#" class="txt1">
  								Forgot Password?
  							</a>
  						</div>
  					</div>


  					<div class="container-login100-form-btn">
  						<button class="login100-form-btn">
  							Login
  						</button>
  					</div>

  					<div class="text-center p-t-46 p-b-20">
  						<span class="txt2">
  							or sign up using
  						</span>
  					</div>

  					<div class="login100-form-social flex-c-m">
  						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
  							<i class="fa fa-facebook-f" aria-hidden="true"></i>
  						</a>

  						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
  							<i class="fa fa-twitter" aria-hidden="true"></i>
  						</a>
  					</div>
  				</form>

  				<div class="login100-more" style="background-image: url('<?php echo $actual_link ?>login/images/bg.jpg');">
  				</div>
  			</div>
  		</div>
  	</div>

    <!-- jQuery Plugins -->
    <script src="<?php echo $actual_link ?>login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo $actual_link ?>login/vendor/animsition/js/animsition.min.js"></script>
    <script src="<?php echo $actual_link ?>login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo $actual_link ?>login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $actual_link ?>login/vendor/select2/select2.min.js"></script>
    <script src="<?php echo $actual_link ?>login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo $actual_link ?>login/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo $actual_link ?>login/vendor/countdowntime/countdowntime.js"></script>
		<script src="<?php echo $actual_link ?>webmag/js/jquery.min.js"></script>
		<script src="<?php echo $actual_link ?>webmag/js/bootstrap.min.js"></script>
		<script src="<?php echo $actual_link ?>webmag/js/main.js"></script>
  </body>
</html>

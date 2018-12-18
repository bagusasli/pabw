<!-- link index page -->
<?php
$actual_link = "http://10.0.0.2/";
$b=$data->row_array();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Beranda</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/style.css"/>
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
							<a href="#" class="logo"><img src="<?php echo $actual_link ?>webmag/img/SIAPSIAGA.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
            <ul class="nav-menu nav navbar-nav">
							<li><a href="<?php echo site_url('Welcome/index') ?>">Home</a></li>
							<li class="cat-2"><a href="<?php echo site_url('Content/index') ?>">Content</a></li>
							<li><a href="<?php echo site_url('Welcome/login') ?>">Login</a></li>
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

      <!-- Page Header -->
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url('<?php echo $actual_link?>/images/<?php echo $b['media']; ?>')"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<a class="post-category cat-2" href="category.html"><?php echo $b['kategori'];?></a>
								<span class="post-date"><?php echo $b['tanggal'];?></span>
							</div>
							<h1><?php echo $b['judul'];?></h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
    </header>
    <!-- /header -->

    <!-- section -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- post content -->
          <div class="col-md-8">
            <div class="section-row sticky-container">
              <div class="main-post">
								<?php echo $b['isi_artikel'];?>
              </div>
              <div class="post-shares sticky-shares">
								<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
            </div>
          </div>
          <!-- /post content -->
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /section -->

    <!-- footer -->
    <footer id="footer">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-7">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="index.html" class="logo"><img src="<?php echo $actual_link ?>webmag/img/SIAPSIAGA.png" alt=""></a>
              </div>
              <ul class="footer-nav">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Advertisement</a></li>
              </ul>
              <div class="footer-copyright">
                <span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
              </div>
            </div>
          </div>

          <div class="col-md-2">
              <div class="col-md-8">
                <div class="footer-widget">
                  <h3 class="footer-title">About Us</h3>
                  <ul class="footer-links">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Join Us</a></li>
                    <li><a href="contact.html">Contacts</a></li>
                  </ul>
                </div>
              </div>
          </div>

          <div class="col-md-3">
            <div class="footer-widget">
              <h3 class="footer-title">Join our Newsletter</h3>
              <div class="footer-newsletter">
                <form>
                  <input class="input" type="email" name="newsletter" placeholder="Enter your email">
                  <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                </form>
              </div>
              <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </footer>
    <!-- /footer -->

    <!-- jQuery Plugins -->
		<script src="webmag/js/jquery.min.js"></script>
		<script src="webmag/js/bootstrap.min.js"></script>
		<script src="webmag/js/main.js"></script>
  </body>
</html>

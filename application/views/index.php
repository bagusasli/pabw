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
		<title>Beranda</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/style.css"/>
	</head>
	<body>
		<header id="header">
			<!-- Nav -->
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
							<li class="cat-2"><a href="<?php echo site_url('Welcome/index') ?>">Home</a></li>
							<li><a href="<?php echo site_url('Content/index') ?>">Content</a></li>
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
			<!-- /Nav -->
		</header>

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
								<div class="col-md-12">
									<div class="post post-thumb">
										<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/post-bali.jpg" alt=""></a>
										<div class="post-body">
											<div class="post-meta">
												<a class="post-category cat-5" href="category.html">Breaking News</a>
												<span class="post-date">March 27, 2018</span>
											</div>
											<h3 class="post-title"><a href="blog-post.html">Bali : Gempa Susulan 5,5 SR </a></h3>
										</div>
									</div>
								</div>
							<!-- /post -->
						</div>
					</div>
					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/widget-1.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Akibat Gempa dan Tsunami, 17 Ribu Rumah Rusak di Donggala</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/widget-2.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Sukses di Lombok, UI Tambah Alat Deteksi Gempa di Donggala</a></h3>
								</div>
							</div>

							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/widget-3.jpg" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">Gempa Membuat Pulau-Pulau di Selandia Baru Semakin Berdekatan</a></h3>
								</div>
							</div>

						</div>
						<!-- /post widget -->
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Featured Posts</h2>
						</div>
					</div>

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/post-bali.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-5" href="category.html">Breaking News</a>
									<span class="post-date">November 30, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Bali : Gempa Susulan 5,5 SR</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/post-bandara.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">News</a>
									<span class="post-date">November 29, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Bandara Soekarno-Hatta Adakan Simulasi Penanganan Gempa</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/post-5.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="category.html">Tips</a>
									<span class="post-date">November 28, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Gempa Dadakan? Ini Tips Agar Kamu Tetap Selamat !</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

				</div>
				<!-- /row -->


			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- section -->
		<div class="section">
				<!-- container -->
				<div class="container">
						<!-- row -->
						<div class="row">
							<div class="col-md-8">
								<div class="row">
									<div class="col-md-12">
										<div class="section-title">
											<h2>Most Read</h2>
										</div>
									</div>
									<!-- post -->
									<div class="col-md-12">
										<div class="post post-row">
											<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/post-donggala.jpg" alt=""></a>
											<div class="post-body">
												<div class="post-meta">
													<a class="post-category cat-2" href="category.html">News</a>
													<span class="post-date">November 30, 2018</span>
												</div>
												<h3 class="post-title"><a href="blog-post.html">Akibat Gempa dan Tsunami, +17.000 Rumah Rusak di Donggala</a></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
											</div>
										</div>
									</div>
									<!-- /post -->

									<!-- post -->
									<div class="col-md-12">
										<div class="post post-row">
											<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/post-deteksi.jpg" alt=""></a>
											<div class="post-body">
												<div class="post-meta">
													<a class="post-category cat-2" href="category.html">News</a>
													<span class="post-date">November 27, 2018</span>
												</div>
												<h3 class="post-title"><a href="blog-post.html">Sukses di Lombok, UI Tambah Alat Deteksi Gempa di Donggala</a></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
											</div>
										</div>
									</div>
									<!-- /post -->

									<!-- post -->
									<div class="col-md-12">
										<div class="post post-row">
											<a class="post-img" href="blog-post.html"><img src="<?php echo $actual_link ?>webmag/img/post-selandiabaru.jpg" alt=""></a>
											<div class="post-body">
												<div class="post-meta">
													<a class="post-category cat-1" href="category.html">Internasional</a>
													<span class="post-date">November 27, 2018</span>
												</div>
												<h3 class="post-title"><a href="blog-post.html">Gempa Membuat Pulau-Pulau di Selandia Baru Semakin Berdekatan</a></h3>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
											</div>
										</div>
									</div>
									<!-- /post -->

									<!-- button -->
									<div class="col-md-12">
										<div class="section-row">
											<button class="primary-button center-block">Load More</button>
										</div>
									</div>
									<!-- /button -->

								</div>
							</div>
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
		<script src="<?php echo $actual_link ?>webmag/js/jquery.min.js"></script>
		<script src="<?php echo $actual_link ?>webmag/js/bootstrap.min.js"></script>
		<script src="<?php echo $actual_link ?>webmag/js/main.js"></script>
	</body>
</html>

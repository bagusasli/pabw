<!-- link index page -->
<?php
$actual_link = "http://localhost/bigpro/";
 ?>
<!DOCTYPE html>

<!-- =========================
INI PAKAI TEMPLATE INDEX2
========================= -->

<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

  <!-- Bootstrap -->
  <!-- <link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/bootstrap.min.css"/> -->
    <link href="<?php echo $actual_link ?>dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/font-awesome.min.css">
  <link href="<?php echo $actual_link ?>dashboard/css/font-face.css" rel="stylesheet" media="all">
  <link href="<?php echo $actual_link ?>dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="<?php echo $actual_link ?>dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="<?php echo $actual_link ?>dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="<?php echo $actual_link ?>dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="<?php echo $actual_link ?>dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="<?php echo $actual_link ?>dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="<?php echo $actual_link ?>dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="<?php echo $actual_link ?>dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="<?php echo $actual_link ?>dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="<?php echo $actual_link ?>dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Custom stlylesheet -->
  <!-- <link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/style.css"/> -->

  <!-- Main CSS-->
  <link href="<?php echo $actual_link ?>dashboard/css/theme.css" rel="stylesheet" media="all">
</head>
	<body>
    <div class="page-wrapper row">
      <div class="col-lg-3">
      <!-- menu sidebar -->
      <aside class="menu-sidebar2">
        <div class="logo">
          <a href="#">
              <img src="<?php echo $actual_link ?>dashboard/images/icon/SIAPSIAGA.png" alt="SIAPSIAGA" />
          </a>
        </div>
        <div class="menu-sidebar2__content">
          <div class="account2">
              <div class="image img-cir img-120">
                  <img src="<?php echo $actual_link ?>dashboard/images/icon/avatar-big-01.jpg" alt="John Doe" />
              </div>
              <h4 class="name">john doe</h4>
              <a href="#">Sign Out</a>
          </div>
          <nav class="navbar-sidebar2">
              <ul class="list-unstyled navbar__list">
                <li>
                    <a href="<?php echo site_url('Dashboard/c_view') ?>">
                        <i class="fas fa-chart-bar"></i>Daftar Data</a>
                </li>
                  <li>
                      <a href="<?php echo site_url('Dashboard/c_input') ?>">
                          <i class="fas fa-chart-bar"></i>Tambah Data</a>
                  </li>
              </ul>
          </nav>
        </div>
      </aside>
    </div>
      <!-- /menu sidebar -->

    <div class="container-form col-lg-9">
<div class="col-lg-9">

                  <strong>Form Input</strong> Artikel <br>
                  <hr>

              <div class="card-body card-block">
                  <form action="<?php echo site_url('Dashboard/insert')?> " method="post" enctype="multipart/form-data" class="form-horizontal">
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Judul Artikel</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="judul" placeholder="Judul" class="form-control">
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="textarea-input" class=" form-control-label">Isi Artikel</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <textarea id="ckeditor textarea" name="isiartikel" rows="12" placeholder="Content..." class="form-control"></textarea>
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Tanggal Artikel</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="date" id="date" name="tanggal" placeholder="Tanggal" class="form-control">
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="selectLg" class=" form-control-label">Pilih Lokasi</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <select name="lokasi" id="selectLg" class="form-control-lg form-control">
                                  <option value="0">---</option>
                                  <option value="Internasional">Internasional</option>
                                  <option value="Lokal">Lokal</option>
                              </select>
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="selectLg" class=" form-control-label">Pilih Kategori</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <select name="kategori" id="selectLg" class="form-control-lg form-control">
                                  <option value="---">---</option>
                                  <option value="News">News</option>
                                  <option value="Tips & Trik">Tips & Trik</option>
                              </select>
                          </div>
                      </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="file-input" class=" form-control-label">Pilih Gambar</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="file" id="file_input" name="media" class="form-control-file">
                          </div>
                      </div>
                      <hr>
                      <input type="submit" name="simpan" value="simpan" class="btn btn-primary btn-sm"><a href="<?php echo site_url('Dashboard/c_input') ?>"></a>
                  </form>
              </div>
    </div>
  </div>
    </div>

		<!-- CKeditor Script -->
		<script type="text/javascript" src="<?php echo $actual_link ?>ckeditor/ckeditor.js"></script>
		<script type="text/javascript">
			var ckeditor = CKEDITOR.replace('isiartikel',{
				height: '600px'
			});
			CKEDITOR.disableAutoInline=true;
			CKEDITOR.inline('editable');
		</script>
    <!-- jQuery Plugins -->
		<script src="<?php echo $actual_link ?>webmag/js/jquery.min.js"></script>
		<script src="<?php echo $actual_link ?>webmag/js/bootstrap.min.js"></script>
		<script src="<?php echo $actual_link ?>webmag/js/main.js"></script>
    <!-- Jquery JS-->
    <script src="<?php echo $actual_link ?>dashboard/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo $actual_link ?>dashboard/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo $actual_link ?>dashboard/vendor/slick/slick.min.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/wow/wow.min.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/select2/select2.min.js">
    </script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo $actual_link ?>dashboard/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="<?php echo $actual_link ?>js/main.js"></script>

	</body>
</html>

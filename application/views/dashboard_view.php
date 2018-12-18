<!-- link index page -->
<?php
$actual_link = "http://10.0.0.2/";
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
		<link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/bootstrap.min.css"/>
      <link href="<?php echo $actual_link ?>dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet" media="all">
      <link href="<?php echo $actual_link ?>datatables/css/dataTables.bootstrap4.css" rel="stylesheet" media="all">
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
		<link type="text/css" rel="stylesheet" href="<?php echo $actual_link ?>webmag/css/style.css"/>

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
              <a href="<?php echo site_url('Login/logout') ?>">Sign Out</a>
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
                  <div class="row">
                      <div class="col-lg-12">
                          <h2 class="title-1 m-b-25">Data Artikel</h2>
                          <div class="table-responsive table--no-card m-b-40">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <tr>
              <th>Judul</th>
              <th>Lokasi</th>
              <th>Kategori</th>
              <th>Tanggal</th>
              <th>Opsi</th>
          </tr>
      </thead>
      <tbody>
          <?php
          if( !empty($article) ) {
          foreach($article as $a){ ?>
          <tr>
            <td><?php echo $a->judul ?></td>
            <td><?php echo $a->lokasi ?></td>
            <td><?php echo $a->kategori ?></td>
            <td><?php echo $a->tanggal ?></td>
            <td>
              <a class="btn btn-primary" href="<?php echo site_url('Dashboard/c_edit/'.$a->id) ?>">Edit</a></button>
  					  <a class="btn btn-danger"href="<?php echo site_url('Dashboard/c_hapus/'.$a->id) ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a></button>
          </td>
          </tr>
        <?php } ?>
        <?php } ?>
      </tbody>
  </table>
                          </div>
                      </div>
                  </div>

      </div>
    </div>
    </div>

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
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="<?php echo $actual_link ?>datatables/js/jquery.dataTables.js"></script>
    <script src="<?php echo $actual_link ?>datatables/js/dataTables.bootstrap4.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#example').DataTable();
      } );
    </script>
	</body>
</html>

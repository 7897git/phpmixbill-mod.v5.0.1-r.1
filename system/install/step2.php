<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHPMixBill v5.0 Installer</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav layout-navbar-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a class="navbar-brand">
        <img src="img/favicon.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PHPMixBill v5.0</span>
      </a>
	</div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a>Installer<small> - step-2</small></a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container">
		<!--  contents area start  -->
		<div class="row">

			<div class="col-md-6" style="margin:auto;">
				<div class="card card-warning card-outline shadow-lg">
					<div class="card-header">
							<h4 class="card-title">PHPMixBill v5.0 Installer </h4>
					</div>
				<div class="card-body">
			<?php
			$passed = '';
			$ltext = '';
			if (version_compare(PHP_VERSION, '5.2.0') >= 0) {
				$ltext .= 'To Run PHPMixBill v5.0 You need at least PHP version 5.2.0, Your PHP Version is: ' . PHP_VERSION . " Tested <font color='#28a745'><i class='fa fa-check'></i> <strong>---PASSED---</strong></font><br/>";
				$passed .= '1';

			} else {
				$ltext .= 'To Run PHPMixBill v5.0 You need at least PHP version 5.2.0, Your PHP Version is: ' . PHP_VERSION . " Tested <font color='#dc3545'><i class='fa fa-times'></i> <strong>---FAILED---</strong></font><br/>";
				$passed .= '0';

			}

			if (extension_loaded('PDO')) {
				$ltext .= 'PDO is installed on your server: ' . "Tested <font color='#28a745'><i class='fa fa-check'></i> <strong>---PASSED---</strong></font><br/>";
				$passed .= '1';
			} else {
				$ltext = 'PDO is installed on your server: ' . "Tested <font color='#dc3545'><i class='fa fa-times'></i> <strong>---FAILED---</strong></font><br/>";
				$passed .= '0';
			}

			if (extension_loaded('pdo_mysql')) {
				$ltext .= 'PDO MySQL driver is enabled on your server: ' . "Tested <font color='#28a745'><i class='fa fa-check'></i> <strong>---PASSED---</strong></font><br/>";
				$passed .= '1';
			} else {
				$ltext .= 'PDO MySQL driver is not enabled on your server: ' . "Tested <font color='#dc3545'><i class='fa fa-times'></i> <strong>---FAILED---</strong></font><br/>";
				$passed .= '0';
			}
			
			if ($passed == '111') {
				echo("<br/> $ltext <br/> 
			<div class='card-body p-0 shadow-md'><div class='callout callout-success'>Great! System Test Completed. You can run PHPMixBill on your server. Click Continue For Next Step.</div></div>
				<br>
				<a href=\"step3.php\" class=\"btn btn-primary btn-sm\">Continue</a>");
			} else {
				echo("<br/> $ltext <br/> <div class='card-body p-0 shadow-md'><div class='callout callout-danger'>Sorry. The requirements of PHPMixBill v5.0 is not available on your server.
				Please contact with us- iesien22@yahoo.com with this code- $passed Or contact with your server administrator</div></div>
				<br>
				<a href=\"#\" class=\"btn btn-primary btn-sm disabled\">Correct The Problem To Continue</a>");
			}
			?>
			</div>
				</div>
			</div>
			</div>
		</div>
		<!--  contents area end  -->
	</div>
	</div>
</div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2015 PHPMixBill</strong>  All Rights Reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>


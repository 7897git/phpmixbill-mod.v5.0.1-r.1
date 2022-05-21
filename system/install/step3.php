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
              <li class="breadcrumb-item"><a>Installer<small> - step-3</small></a></li>
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
							<h4 class="card-title">Database Connection &amp Site config</h4>
					</div>
				<div class="card-body">
			<?php
			if (isset($_GET['_error']) && ($_GET['_error']) == '1') {
				echo '<h4 style="color: red;"> Unable to Connect Database, Please make sure database info is correct and try again ! </h4>';
			}

			$cururl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			$appurl = str_replace('/install/step3.php', '', $cururl);
			$appurl = str_replace('?_error=1', '', $appurl);
			$appurl = str_replace('/system', '', $appurl);
			?>

			<form action="step4.php" method="post">
				<fieldset>

					<div class="form-group">
						<label for="appurl">Application URL</label>
						<input type="text" class="form-control" id="appurl" name="appurl" value="<?php echo $appurl; ?>">
						<span class='help-block' style='font-size:14px'>Application url without trailing slash at the end of url (e.g. http://172.16.10.10). Please keep default, if you are unsure.</span>
					</div>
					<div class="form-group">
						<label for="dbhost">Database Host</label>
						<input type="text" class="form-control" id="dbhost" name="dbhost">
					</div>
					<div class="form-group">
						<label for="dbuser">Database Username</label>
						<input type="text" class="form-control" id="dbuser" name="dbuser">
					</div>
					<div class="form-group">
						<label for="dbpass">Database Password</label>
						<input type="text" class="form-control" id="dbpass" name="dbpass">
					</div>

					<div class="form-group">
						<label for="dbname">Database Name</label>
						<input type="text" class="form-control" id="dbname" name="dbname">
					</div>

					<button type="submit" class="btn btn-primary btn-sm">Submit</button>
				</fieldset>
			</form>
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


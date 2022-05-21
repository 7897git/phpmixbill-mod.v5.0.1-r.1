<?php
/**
* PHP Mikrotik Billing (https://ibnux.github.io/phpmixbill/)


* @copyright	Copyright (C) 2014-2015 PHP Mikrotik Billing
* @license		GNU General Public License version 2 or later; see LICENSE.txt

**/
//error_reporting (0);
$appurl = $_POST['appurl'];
$db_host = $_POST['dbhost'];
$db_user = $_POST['dbuser'];
$db_password = $_POST['dbpass'];
$db_name = $_POST['dbname'];
$cn = '0';
try{
    $dbh = new pdo( "mysql:host=$db_host;dbname=$db_name",
        "$db_user",
        "$db_password",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   $cn = '1';
}
catch(PDOException $ex){
   $cn = '0';
}

if ($cn == '1') {
    $input = '<?php
	$db_host	    = \'' . $db_host . '\';
	$db_user        = \'' . $db_user . '\';
	$db_password	= \'' . $db_password . '\';
	$db_name	    = \'' . $db_name . '\';
	define(\'APP_URL\', \'' . $appurl . '\');
	$_app_stage = \'Live\';';
    $wConfig = "../config.php";
    $fh = fopen($wConfig, 'w') or die("Can't create config file, your server does not support 'fopen' function,
	please create a file named - config.php with following contents- <br/>$input");

    fwrite($fh, $input);
    fclose($fh);

    $sql = file_get_contents('database.sql');

    $qr = $dbh->exec($sql);

} else {
    header("location: step3.php?_error=1");
    exit;
}

?>
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
              <li class="breadcrumb-item"><a>Installer<small> - step-4</small></a></li>
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
							<h4 class="card-title">PHPMixBill v5.0 - Click Continue </h4>
					</div>
				<div class="card-body">
			<?php
			if ($cn == '1') {
			?>
				<p><div class="callout callout-success"><font color='#28a745'><i class='fa fa-check'></i> <b>Config File Created and Database Imported.</b></font></div><br/></p>
				<form action="step5.php" method="post">
					<fieldset>
						<button type='submit' class='btn btn-primary btn-sm'>Continue</button>
					</fieldset>
				</form>
			<?php
			} elseif ($cn == '2') {
			?>
				<p> MySQL Connection was successfull. An error occured while adding data on MySQL. Unsuccessfull
					Installation. Please refer manual installation in the website phpmixbill.com or Contact iesien22@yahoo.com for
					helping on installation</p>
			<?php
			} else {
			?>
			<p> MySQL Connection Failed.</p>
			<?php
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


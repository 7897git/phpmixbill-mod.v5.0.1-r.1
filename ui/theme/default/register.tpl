<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>{$_title} - {$_L['Register']}</title>
	<link rel="shortcut icon" href="{$_theme}/images/logo.png" type="image/x-icon" />
<!-- ionicframework-->
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
	
	<!-- Icons -->
	<link rel="stylesheet" href="{$_theme}/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="{$_theme}/assets/plugins/fontawesome-free/css/all.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="{$_theme}/styles/plugins/waves.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="{$_theme}/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="{$_theme}/assets/dist/css/adminlte.min.css">

 	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'> -->
	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="{$_theme}/scripts/ie/matchMedia.js"></script>  <![endif]--> 

</head>
<body id="app" class="hold-transition register-page">
		{if isset($notify)}
					{$notify}
		{/if}
<ion-app>
<ion-content>
<div class="register-box"style="margin: auto;margin-top: 25px;">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h1"><b>{$_c['CompanyName']}</p>
		</div>
    <div class="card-body">
			<form class="form-horizontal" action="{$_url}register/post" method="post">
					<div class="panel-heading">{$_L['Register_Member']}</div>
        <div class="input-group mb-3">
			<input type="text" required class="form-control" id="fullname" value="{$fullname}" placeholder="{$_L['Full_Name']}" name="fullname">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
			<input type="text" name="address" id="address"placeholder="{$_L['Address']}" value="{$address}" class="form-control" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marked-alt"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
			<input type="text" required class="form-control"placeholder="{$_L['Phone_Number']}" value="{$phonenumber}" id="phonenumber" name="phonenumber">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fab fa-whatsapp" style="font-size: 20px;"></span>
            </div>
          </div>
        </div>
            <div class="card collapsed-card">
              <div class="card-header">
                <h3 class="card-title">Lanjut Buat Akun Wi-Fi</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
        <div class="input-group mb-3">
			<input type="text" required class="form-control" id="username" value="{$username}" placeholder="Buat Ussername" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
			<input type="password" required class="form-control" placeholder="Buat Password" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-unlock-alt"></span>
            </div>
          </div>
		</div>
        <div class="input-group mb-3">
			<input type="password" required class="form-control" placeholder="Konfirmasi Password" id="cpassword" name="cpassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
		</div>
							<hr>
							<div class="md-input-container md-float-label">
								<input type="text" required class="form-control" placeholder="Masukan {$_L['Code_Voucher']} Wi-Fi" id="kodevoucher" name="kodevoucher">
							</div>
              </div>
              <!-- /.card-body -->
					</div>
				<br/>
          <div class="col-md-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms" style="font-size:12px">
               Setuju Dengan <a href="#">Ketentuan</a>
              </label>
            </div>
          </div>
								<div class="btn-group">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Register']}</button>
								</div>
      <a href="{$_url}login" class="btn text-center float-right">Batal</a>
				</div>
			</form>
		</div>
	</div>
</div>
</ion-content>
</ion-app>
	<script src="scripts/vendors.js"></script>
<!-- jQuery -->
<script src="{$_theme}/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{$_theme}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{$_theme}/assets/dist/js/adminlte.min.js"></script>
</body>
</html>

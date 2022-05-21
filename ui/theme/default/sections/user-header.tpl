<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>{$_title}</title>
	<link rel="shortcut icon" href="{$_theme}/images/logo.png" type="image/x-icon" />

<!-- ionicframework-->
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
	
	<!-- Icons -->
	<link rel="stylesheet" href="{$_theme}/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="{$_theme}/fonts/font-awesome/css/font-awesome.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{$_theme}/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{$_theme}/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="{$_theme}/assets/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="{$_theme}/styles/scrollbar.css">
	
	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="{$_theme}/scripts/ie/matchMedia.js"></script>  <![endif]--> 
{if isset($xheader)}
	{$xheader}
{/if}
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "471818d4-b9e8-487d-9041-15cef91e6b84",
    });
  });
</script>
</head>

<body id="app" class="hold-transition layout-top-nav layout-navbar-fixed">
<ion-app>
<ion-content>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <!-- Right navbar links -->
	  
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments"></i>
            <span class="badge badge-danger navbar-badge">1</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="system/uploads/admin.png" alt="admin" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Admin
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Untuk bantuan admin, silahkan klik tombol hijau di kanan bawah</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 24 Jam yang lalu</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">Live Chat</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
            <span class="dropdown-header">{$_L['Member']}</span>
            <div class="dropdown-divider"></div>
            <a href="{$_url}accounts/profile" class="dropdown-item">
              <i class="ion ion-person mr-2"></i> {$_L['My_Account']}
            </a>
            <div class="dropdown-divider"></div>
            <a href="{$_url}accounts/change-password" class="dropdown-item">
              <i class="fas fa-lock mr-2"></i> {$_L['Change_Password']}
            </a>
            <div class="dropdown-divider"></div>
            <a href="{$_url}logout" class="dropdown-item">
              <i class="ion ion-power mr-2"></i> {$_L['Logout']}
            </a>
          </div>
        </li>
      </ul>


      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="{$_url}home" class="navbar-brand">
        <img src="{$_theme}/images/admin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{$_user['fullname']}</span>
      </a>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">{$_L['Voucher']}</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="{$_url}voucher/list-activated" class="dropdown-item">{$_L['List_Activated_Voucher']}</a></li>
              <li><a href="{$_url}page/Order_Voucher" class="dropdown-item">
			  {$_L['Order_Voucher']}</a></li>
            </ul>
          </li>
        </ul>
	</div>
	</nav>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
			<div class="page {if $_system_menu eq 'dashboard'}page-dashboard{/if}">

			{if isset($notify)}
		<div class="row">
		<div class="col-md-3" style="position:absolute;top:15px;right:15px;width:80%;">
			{$notify}
				</div>
			</div>
			{/if}

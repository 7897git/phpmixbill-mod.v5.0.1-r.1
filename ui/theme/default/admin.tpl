<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>{$_title} - {$_L['Login']}</title>
	<link rel="shortcut icon" href="{$_theme}/images/logo.png" type="image/x-icon" />

<!-- ionicframework-->
<script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />

    <script type="module">
      import { popoverController } from 'https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/index.esm.js';
      window.popoverController = popoverController;
    </script>
    <script type="module">
      import { loadingController } from 'https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/index.esm.js';
      window.loadingController = loadingController;
    </script>
    <script type="module">
      import { toastController } from 'https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/index.esm.js';
      window.toastController = toastController;
    </script>
	
	<!-- Icons -->
	<link rel="stylesheet" href="{$_theme}/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="{$_theme}/fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="{$_theme}/styles/plugins/waves.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/perfect-scrollbar.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="{$_theme}/styles/bootstrap.min.css">
	<link rel="stylesheet" href="{$_theme}/styles/main.min.css">
	<link rel="stylesheet" href="{$_theme}/styles/dark.css">

 	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'> -->
	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="{$_theme}/scripts/ie/matchMedia.js"></script>  <![endif]--> 

</head>
<body id="app">
	<div class="main-container clearfix" style="margin-top: 50px;">
		<div class="" id="content">
				{if isset($notify)}
					{$notify}
				{/if}
			<div class="page page-auth">
				<ion-card class="auth-container">
					<div class="form-head mb20">
						<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold">{$_L['Logo']}</h1>
						<h5 class="text-normal h5 text-center">{$_L['Sign_In_Admin']}</h5>
					</div>
					<div class="form-container">
						<form class="form-horizontal" action="{$_url}admin/post" method="post">
							<div class="md-input-container md-float-label">
								<input type="text" name="username" class="md-input">
								<label>{$_L['Username']}</label>
							</div>

							<div class="md-input-container md-float-label">
								<input type="password" name="password" class="md-input">
								<label>{$_L['Password']}</label>
							</div>

							<div class="clearfix">
								<div class="ui-checkbox ui-checkbox-primary left">
									<ion-label slot="start">
										<input type="checkbox"> 
										<span>Remember me</span>
									</ion-label>
								</div>
							</div>
							<ion-buttons">
								<ion-button type="submit" expand="block">{$_L['Login']}
								</ion-button>
							</ion-buttons> 
						</form>
					</div>

				</ion-card>
			</div>
		</div> 
	</div>
	<script src="scripts/vendors.js"></script>
	<script src="scripts/dark.js"></script>
<script>
      const button = document.querySelector('notifyer');
      button.addEventListener('click', handleButtonClick);

      async function handleButtonClick() {
        const toast = await toastController.create({
          color: 'dark',
          duration: 2000,
          message: '{$notify}',
          showCloseButton: true,
        });

        await toast.present();
      }
</script>
</body>
</html>

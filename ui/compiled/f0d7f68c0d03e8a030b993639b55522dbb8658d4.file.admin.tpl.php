<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 07:51:53
         compiled from "ui/theme/default/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:597020347628837a9e342c8-88024128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d7f68c0d03e8a030b993639b55522dbb8658d4' => 
    array (
      0 => 'ui/theme/default/admin.tpl',
      1 => 1652934053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '597020347628837a9e342c8-88024128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_title' => 0,
    '_L' => 0,
    '_theme' => 0,
    'notify' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_628837aa00a7d5_34272296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628837aa00a7d5_34272296')) {function content_628837aa00a7d5_34272296($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>
</title>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/images/logo.png" type="image/x-icon" />

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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/waves.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/plugins/perfect-scrollbar.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/main.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/dark.css">

 	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'> -->
	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/ie/matchMedia.js"></script>  <![endif]--> 

</head>
<body id="app">
	<div class="main-container clearfix" style="margin-top: 50px;">
		<div class="" id="content">
				<?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
					<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

				<?php }?>
			<div class="page page-auth">
				<ion-card class="auth-container">
					<div class="form-head mb20">
						<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</h1>
						<h5 class="text-normal h5 text-center"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sign_In_Admin'];?>
</h5>
					</div>
					<div class="form-container">
						<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
admin/post" method="post">
							<div class="md-input-container md-float-label">
								<input type="text" name="username" class="md-input">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
							</div>

							<div class="md-input-container md-float-label">
								<input type="password" name="password" class="md-input">
								<label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
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
								<ion-button type="submit" expand="block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Login'];?>

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
          message: '<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>
',
          showCloseButton: true,
        });

        await toast.present();
      }
</script>
</body>
</html>
<?php }} ?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="color-scheme" content="light dark" />
	<title>{$_title}</title>
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

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/d6e78495c8.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Plugins -->
	<link rel="stylesheet" href="{$_theme}/styles/plugins/waves.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/perfect-scrollbar.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/select2.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/bootstrap-colorpicker.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/bootstrap-slider.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/bootstrap-datepicker.css">
	<link rel="stylesheet" href="{$_theme}/styles/plugins/summernote.css">

	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="{$_theme}/styles/bootstrap.min.css">
	<link rel="stylesheet" href="{$_theme}/styles/main.min.css">
	<link rel="stylesheet" href="{$_theme}/styles/dark.css">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="{$_theme}/scripts/ie/matchMedia.js"></script>  <![endif]-->
{if isset($xheader)}
	{$xheader}
{/if}

</head>

<body id="app" onLoad="loadApp()">
    <ion-app>
<script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
      <ion-tabs>

<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:00:31
         compiled from "ui/theme/default/sections/setings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:859699182628855cfcb90d6-69469274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f9409915823f36e13c549c815ce73f126e114d0' => 
    array (
      0 => 'ui/theme/default/sections/setings.tpl',
      1 => 1652926964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '859699182628855cfcb90d6-69469274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_628855cfcc7043_69465431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628855cfcc7043_69465431')) {function content_628855cfcc7043_69465431($_smarty_tpl) {?><ion-card>
  <ion-item href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app">
    <ion-label>Pengaturan Umum</ion-label>
    <ion-icon slot="end" name="chevron-forward-outline"></ion-icon>
  </ion-item>
  <ion-item href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list">
    <ion-label>Routers</ion-label>
    <ion-icon slot="end" name="chevron-forward-outline"></ion-icon>
  </ion-item>
  <ion-item href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bandwidth/list">
    <ion-label>Bandwidth</ion-label>
    <ion-icon slot="end" name="chevron-forward-outline"></ion-icon>
  </ion-item>
  <ion-item href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/hotspot">
    <ion-label>HotSpot Services</ion-label>
    <ion-icon slot="end" name="chevron-forward-outline"></ion-icon>
  </ion-item>
  <ion-item href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/localisation">
    <ion-label>Lokalisasi</ion-label>
    <ion-icon slot="end" name="chevron-forward-outline"></ion-icon>
  </ion-item>
</ion-card>
<?php }} ?>
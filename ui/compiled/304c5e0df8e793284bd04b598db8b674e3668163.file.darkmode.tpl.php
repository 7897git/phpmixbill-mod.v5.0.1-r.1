<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 01:21:49
         compiled from "ui/theme/default/sections/darkmode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:604372206287dc3d945a26-43921486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '304c5e0df8e793284bd04b598db8b674e3668163' => 
    array (
      0 => 'ui/theme/default/sections/darkmode.tpl',
      1 => 1652927887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '604372206287dc3d945a26-43921486',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6287dc3d94bf21_50777556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6287dc3d94bf21_50777556')) {function content_6287dc3d94bf21_50777556($_smarty_tpl) {?>
<div class="switch">
          <ion-chip slot="end" onclick="setDarkMode(true)" id="darkBtn">
            <div>
            <ion-label>DarkMode</ion-label>
            <ion-icon name="moon" color="dark"></ion-icon>
            </div>
          </ion-chip>
          <ion-chip slot="end" onclick="setDarkMode(false)" id="lightBtn" style="display: none;">
            <div>
            <ion-label>LightMode</ion-label>
            <ion-icon name="partly-sunny"></ion-icon>
            </div>
          </ion-chip>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("sections/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
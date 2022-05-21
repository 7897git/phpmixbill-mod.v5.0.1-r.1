<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:00:31
         compiled from "ui/theme/default/setings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211605965628855cfc7eaa4-51817903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9a38eec58cbecbc319035bcb2e59ca45f94153' => 
    array (
      0 => 'ui/theme/default/setings.tpl',
      1 => 1652953016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211605965628855cfc7eaa4-51817903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_628855cfc9f5a3_08896070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628855cfc9f5a3_08896070')) {function content_628855cfc9f5a3_08896070($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <ion-header translucent>
      <ion-toolbar>
        <?php echo $_smarty_tpl->getSubTemplate ("sections/back-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <ion-title>Setting</ion-title>
      </ion-toolbar>
    </ion-header>

      <ion-content fullscreen class="ion-padding">
        <?php echo $_smarty_tpl->getSubTemplate ("sections/setings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("sections/darkmode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
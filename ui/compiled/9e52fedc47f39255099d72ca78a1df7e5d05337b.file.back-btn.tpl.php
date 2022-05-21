<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:00:31
         compiled from "ui/theme/default/sections/back-btn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1115901252628855cfca97b8-24341421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e52fedc47f39255099d72ca78a1df7e5d05337b' => 
    array (
      0 => 'ui/theme/default/sections/back-btn.tpl',
      1 => 1652813876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1115901252628855cfca97b8-24341421',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_628855cfcac030_36168002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628855cfcac030_36168002')) {function content_628855cfcac030_36168002($_smarty_tpl) {?>
        
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
<?php }} ?>
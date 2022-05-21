<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 07:52:45
         compiled from "ui/theme/default/autoload-server.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1753414997628837dde22cb1-12770035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a7433b79d8627d154617a597b539a34201ab5c0' => 
    array (
      0 => 'ui/theme/default/autoload-server.tpl',
      1 => 1652813876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1753414997628837dde22cb1-12770035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'd' => 0,
    'ds' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_628837dde4f2f9_20581646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628837dde4f2f9_20581646')) {function content_628837dde4f2f9_20581646($_smarty_tpl) {?><option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Routers'];?>
</option>
<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</option>
<?php } ?>
<?php }} ?>
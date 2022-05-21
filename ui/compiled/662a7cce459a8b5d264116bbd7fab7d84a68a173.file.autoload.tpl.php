<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 07:52:49
         compiled from "ui/theme/default/autoload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:501779729628837e15d6375-16027775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '662a7cce459a8b5d264116bbd7fab7d84a68a173' => 
    array (
      0 => 'ui/theme/default/autoload.tpl',
      1 => 1652813876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '501779729628837e15d6375-16027775',
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
  'unifunc' => 'content_628837e15e6880_01685460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628837e15e6880_01685460')) {function content_628837e15e6880_01685460($_smarty_tpl) {?><option value=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Plan'];?>
</option>
<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</option>
<?php } ?>
<?php }} ?>
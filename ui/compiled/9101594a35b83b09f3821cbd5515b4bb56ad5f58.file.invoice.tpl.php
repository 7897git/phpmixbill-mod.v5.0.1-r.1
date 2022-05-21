<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 07:52:54
         compiled from "ui/theme/default/invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:521928680628837e6a9d259-02913341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9101594a35b83b09f3821cbd5515b4bb56ad5f58' => 
    array (
      0 => 'ui/theme/default/invoice.tpl',
      1 => 1652813874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521928680628837e6a9d259-02913341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_c' => 0,
    'in' => 0,
    '_L' => 0,
    'date' => 0,
    '_admin' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_628837e6af1a76_79176249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628837e6af1a76_79176249')) {function content_628837e6af1a76_79176249($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>Invoice</ion-title>
      </ion-toolbar>
    </ion-header>
          <ion-content fullscreen class="ion-padding">

<div class="row">
	<div class="m-lr">
		<ion-card class="panel panel-hovered panel-default panel-stacked mb30">
			<ion-card-header><ion-label>PRINT INVOICE</ion-label></ion-card-header>
			<ion-list class="panel-body">
				<div class="well">
				<fieldset>
					<center>
					<b><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['address'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
<br>
					</center>
					====================================================<br>
					INVOICE: <b><?php echo $_smarty_tpl->tpl_vars['in']->value['invoice'];?>
</b> - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
 : <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
 : <?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>
<br>
					====================================================<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['in']->value['type'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['in']->value['plan_name'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Price'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['in']->value['price'],2,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</b><br>
					<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 : <b><?php echo $_smarty_tpl->tpl_vars['in']->value['username'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
 : **********<br>
					<br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
 : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['in']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['in']->value['time'];?>
</b><br>
					<?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
 : <b><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['in']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['in']->value['time'];?>
</b><br>
					=====================================================<br>
					<center><?php echo $_smarty_tpl->tpl_vars['_c']->value['note'];?>
</center>
				</fieldset>
				</div>
				<form class="form-horizontal flex" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/print" target="_blank">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['in']->value['id'];?>
">
					<button type="submit" class="btn btn-default btn-sm"><i class="fa fa-print"></i></button>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="btn btn-primary"><center></i><?php echo $_smarty_tpl->tpl_vars['_L']->value['Finish'];?>
</center></a>
				</form>
				
			</ion-list>
		</ion-card>
	</div>
</div>
<script type="text/javascript">
	var s5_taf_parent = window.location;
	function popup_print() {
	window.open('print.php?page=<<?php ?>?php echo $_GET['act'];?<?php ?>>','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=600,left=50,top=50,titlebar=yes')
	}
</script>
          </ion-content>
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:44:15
         compiled from "ui/theme/default/customers-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2157712166288600f02bcd7-71872368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c05bff6893eec7231524e1decda8fb3924839e8' => 
    array (
      0 => 'ui/theme/default/customers-add.tpl',
      1 => 1652813876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2157712166288600f02bcd7-71872368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6288600f046d93_52637568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6288600f046d93_52637568')) {function content_6288600f046d93_52637568($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Contact'];?>
</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
	
		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
						<ion-list class="panel-body">
						
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add-post" >            
							<ion-item>
								<ion-label position="floating"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</ion-label>
									<ion-input type="text" id="username" name="username"></ion-input>
							</ion-item>
							<ion-item>
								<ion-label position="floating"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</ion-label>
									<ion-input type="text" id="fullname" name="fullname"/>
							</ion-item>
							<ion-item>
								<ion-label position="floating"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</ion-label>
									<ion-input type="password" id="password" name="password"/>
							</ion-item>
							<ion-item>
								<ion-label position="floating"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm_Password'];?>
</ion-label>
									<ion-input type="password" id="cpassword" name="cpassword"/>
							</ion-item>
							<ion-item>
								<ion-label position="floating"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</ion-label>
									<ion-textarea name="address" id="address"></ion-textarea>
							</ion-item>
							<ion-item class="mb10">
								<ion-label position="floating"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</ion-label>
									<ion-input type="number" id="phonenumber" name="phonenumber"/>
							</ion-item>
										
							<div class="form-group">
								<div class="col-md-12">
									<button class="btn btn-primary waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
								</div>
							</div>
						</form>
						</ion-list>
					</div>
				</ion-card>
			</div>
		</div>
		
</ion-content>
<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
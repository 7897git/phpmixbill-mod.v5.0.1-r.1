<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:48:14
         compiled from "ui/theme/default/recharge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:777176965628850a29521f8-23253841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d4c04010e3a92fc2dc3d03cc9d66c4c0641d5c2' => 
    array (
      0 => 'ui/theme/default/recharge.tpl',
      1 => 1653104892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777176965628850a29521f8-23253841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_628850a2999a16_88450955',
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'c' => 0,
    'cs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628850a2999a16_88450955')) {function content_628850a2999a16_88450955($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <ion-tab tab="topup">
          <ion-header translucent>
            <ion-toolbar>
              <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Topup'];?>
</ion-title>
            </ion-toolbar>
          </ion-header>

          <ion-content fullscreen class="ion-padding">

		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
					<ion-list class="panel-body">
                       <div class="m-auto">
						<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge-post" >            
							<ion-item class="mb30">
								<ion-label>Akun WiFi</ion-label>
									<ion-select id="personSelect" name="id_customer" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Account'];?>
" ok-text="Okay" cancel-text="Batal">
										<?php  $_smarty_tpl->tpl_vars['cs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cs']->key => $_smarty_tpl->tpl_vars['cs']->value){
$_smarty_tpl->tpl_vars['cs']->_loop = true;
?>
											<ion-select-option value="<?php echo $_smarty_tpl->tpl_vars['cs']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cs']->value['username'];?>
</ion-select-option>
										<?php } ?>
									</ion-select>
							</ion-item>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
								<div class="col-md-10 flex">
                                  <label class="btn btn-sm btn-secondary">
									<input type="radio" id="Hot" name="type" value="Hotspot"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Hotspot_Plans'];?>
 </label>
                                  <label class="btn btn-sm btn-secondary">
									<input type="radio" id="POE" name="type" value="PPPOE"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
 </label>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</label>
								<div class="col-md-10">
									<select id="server" name="server" class="form-control">
										<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Routers'];?>
</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service_Plan'];?>
</label>
								<div class="col-md-10">
									<select id="plan" name="plan" class="form-control">
										<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Plans'];?>
</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 flex">
									<button class="btn btn-success waves-effect waves-light" type="submit" style="float:right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</button> 
								</div>
							</div>
						</form>
                        </div>
					</ion-list>
				</ion-card>
			</div>
		</div>
          </ion-content>
        </ion-tab>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
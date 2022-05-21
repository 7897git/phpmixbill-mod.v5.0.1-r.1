<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 01:34:21
         compiled from "ui/theme/default/voucher-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4336151886287df2dba6e81-39647547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72e5be728258eb8448dcbfdb858b453a03e34f4f' => 
    array (
      0 => 'ui/theme/default/voucher-add.tpl',
      1 => 1653066734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4336151886287df2dba6e81-39647547',
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
  'unifunc' => 'content_6287df2dbd4d98_20670706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6287df2dbd4d98_20670706')) {function content_6287df2dbd4d98_20670706($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Voucher'];?>
</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
	
		<div class="row">
			<div class="m-lr">
				<ion-card class="panel-body">
        <ion-card-content>

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
						<div class="col-md-10" style="display: flex;justify-content: flex-start;">
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
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Number_of_Vouchers'];?>
</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="numbervoucher" value="1">
						</div>
                    </div>
					
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Length_Code'];?>
</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="lengthcode" value="12">
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit" style="float:right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Generate'];?>
</button> 
						</div>
					</div>
                </form>
				
        </ion-card-content>
    </ion-card>
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
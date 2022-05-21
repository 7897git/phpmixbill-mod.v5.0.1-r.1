<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:29:59
         compiled from "ui/theme/default/reports-period.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118477642662885cb76fbb55-05412090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65b25e276113eb0a5390aee4310f1cfb4b6f7c8e' => 
    array (
      0 => 'ui/theme/default/reports-period.tpl',
      1 => 1652841009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118477642662885cb76fbb55-05412090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'tdate' => 0,
    'mdate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_62885cb7718da0_77003717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62885cb7718da0_77003717')) {function content_62885cb7718da0_77003717($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <ion-tab tab="uang">
          <ion-header translucent>
            <ion-toolbar>
              <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Keuangan'];?>
</ion-title>
            </ion-toolbar>
          </ion-header>

          <ion-content fullscreen class="ion-padding">
					
					<div class="row">
						<div class="m-lr">
							<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
								<ion-card-header>
<ion-label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Period_Reports'];?>
</ion-label>
                                </ion-card-header>
								<ion-list class="panel-body">
								<form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/period-view"> 
									<div class="form-group">
										<label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['From_Date'];?>
</label>
										<div class="col-md-9">
											<div class="input-group date" id="datepicker1">
												<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tdate']->value;?>
" name="fdate" id="fdate">
												<span class="input-group-addon ion ion-calendar"></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To_Date'];?>
</label>
										<div class="col-md-9">
											<div class="input-group date" id="datepicker2">
												<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mdate']->value;?>
" name="tdate" id="tdate">
												<span class="input-group-addon ion ion-calendar"></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
										<div class="col-md-9">
											<select class="form-control" id="stype" name="stype">
												<option value="" selected=""><?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions'];?>
</option>
												<option value="Hotspot">Hotspot</option>
												<option value="PPPOE">PPPOE</option>
											</select>
										</div>
									</div>

									<div class="form-group right">
										<div class="col-sm-9">
											<button type="submit" id="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Period_Reports'];?>
</button>
										</div>
									</div>
								</form>
								</ion-list>
							</ion-card>
						</div>
					</div>
          </ion-content>
        </ion-tab>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 01:34:54
         compiled from "ui/theme/default/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18151267516287df4eb6f425-20105559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a752cc92df781f2c1e6d365a6cdcb1bf2c6a54dc' => 
    array (
      0 => 'ui/theme/default/dashboard.tpl',
      1 => 1653065380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18151267516287df4eb6f425-20105559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_admin' => 0,
    '_url' => 0,
    '_c' => 0,
    'iday' => 0,
    'imonth' => 0,
    'u_act' => 0,
    'u_all' => 0,
    'expire' => 0,
    'no' => 0,
    'expired' => 0,
    'plans' => 0,
    'stok' => 0,
    'stocks' => 0,
    'dlog' => 0,
    'dlogs' => 0,
    '_user' => 0,
    '_bill' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6287df4ec362a4_99929451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6287df4ec362a4_99929451')) {function content_6287df4ec362a4_99929451($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <ion-tab tab="dashboard">
          <ion-header translucent>
            <ion-toolbar>
              <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</ion-title>
            </ion-toolbar>
          </ion-header>

          <ion-content fullscreen class="ion-padding">
<?php if (($_smarty_tpl->tpl_vars['_admin']->value['user_type'])=='Admin'||($_smarty_tpl->tpl_vars['_admin']->value['user_type'])=='Sales'){?>
					<div class="row hidden">
						<div class="col-md-12">
							<div class="dash-head clearfix mt15 mb20">
								<div class="left">
									<h4 class="mb5 text-light">Dashboard</h4>
									<p class="small"></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/daily-report">
                    <ion-card class="info-box-3 bg-primary hover-zoom-effect" style="cursor:pointer">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Today'];?>
</div>
                            <div class="number count-to" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['iday']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
 ,00</div>
                        </div>
                    </ion-card>
</a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period">
                    <ion-card class="info-box-3 bg-success hover-zoom-effect" style="cursor:pointer">
                        <div class="icon">
                            <i class="material-icons">account_balance_wallet</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_This_Month'];?>
</div>
                            <div class="number count-to" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['imonth']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
 ,00</div>
                        </div>
                    </ion-card>
</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0 hidden-xs">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list">
                    <ion-card class="info-box-3 bg-warning hover-zoom-effect" style="cursor:pointer">
                        <div class="icon">
                            <i class="material-icons">verified_user</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Users_Active'];?>
</div>
                            <div class="number count-to" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['u_act']->value;?>
 orang</div>
                        </div>
                    </ion-card>
</a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list">
                    <ion-card class="info-box-3 bg-info hover-zoom-effect" style="cursor:pointer">
                        <div class="icon">
                            <i class="material-icons">people</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Users'];?>
</div>
                            <div class="number count-to" style="color:#fff"><?php echo $_smarty_tpl->tpl_vars['u_all']->value;?>
 member</div>
                        </div>
                    </ion-card>
                </div>
</a>
            </div>
					</div>
					<div class="row">
						<div class="col-md-7 p0">
							<ion-card class="panel panel-default panel-hovered mb20 activities md">
								<ion-card-header>
<ion-label><?php echo $_smarty_tpl->tpl_vars['_L']->value['User_Expired_Today'];?>
</ion-label>
                                </ion-card-header>
								<ion-list class="panel-body table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>Id</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
											</tr>
										</thead>
										<tbody>
										<?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
										<?php  $_smarty_tpl->tpl_vars['expired'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['expired']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['expire']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['expired']->key => $_smarty_tpl->tpl_vars['expired']->value){
$_smarty_tpl->tpl_vars['expired']->_loop = true;
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['expired']->value['username'];?>
</td>
												<td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['expired']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['expired']->value['time'];?>
</td>
												<td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['expired']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['expired']->value['time'];?>
</td>
											</tr>
										</tbody>
										<?php } ?>
									</table>
								</ion-list>
						    </ion-card>
							<ion-card class="panel panel-default panel-hovered mb20 activities hidden-xs">
								<ion-card-header class="flex">
<ion-label>Vouchers Stock</ion-label>
                                  <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher"><ion-label class="btn btn-sm btn-secondary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_Vouchers'];?>
 <ion-icon name="ticket" slot="end"></ion-icon></ion-label></a>
                                </ion-card-header>
								<ion-list class="panel-body table-responsive">	
									<table class="table">
										<thead>
											<tr>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
												<th>unused</th>
												<th>used</th>
											</tr>
										</thead>
										<tbody>
										<?php  $_smarty_tpl->tpl_vars['stok'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stok']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stok']->key => $_smarty_tpl->tpl_vars['stok']->value){
$_smarty_tpl->tpl_vars['stok']->_loop = true;
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['stok']->value['name_plan'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['stok']->value['unused'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['stok']->value['used'];?>
</td>
											</tr>
										</tbody>
										<?php } ?>
											<tr>
												<td>Total</td>
												<td><?php echo $_smarty_tpl->tpl_vars['stocks']->value['unused'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['stocks']->value['used'];?>
</td>
											</tr>
									</table>
								</ion-list>
							</ion-card>
					       </div>
						
						<div class="col-md-5 p0">
							<ion-card class="panel panel-default panel-hovered mb20 activities">
<ion-card-header>
								<ion-label class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activity_Log'];?>
</ion-label>
</ion-card-header>
								<ion-list class="panel-body">
									<?php  $_smarty_tpl->tpl_vars['dlogs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dlogs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dlogs']->key => $_smarty_tpl->tpl_vars['dlogs']->value){
$_smarty_tpl->tpl_vars['dlogs']->_loop = true;
?>
                                      <ion-item>
                                        <ion-avatar slot="start">
<?php if (($_smarty_tpl->tpl_vars['_admin']->value['user_type'])=='Admin'||($_smarty_tpl->tpl_vars['_admin']->value['user_type'])=='Sales'){?>
                                          <img src="https://ionicframework.com/docs/demos/api/avatar/avatar.svg" />
                                        </ion-avatar>
			<?php }else{ ?>
                                          <img src="https://ionicframework.com/docs/demos/api/avatar/avatar.svg" />
<?php }?>
                                        </ion-avatar>
                                        <ion-label>
                                          <h3><?php echo $_smarty_tpl->tpl_vars['dlogs']->value['description'];?>
</h3>
                                          <p><?php echo time_elapsed_string($_smarty_tpl->tpl_vars['dlogs']->value['date'],true);?>
</p>
                                        </ion-label>
                                      </ion-item>
									<?php } ?>
								</ion-list>
							</ion-card>
							<ion-card class="panel panel-default bg-danger panel-hovered mb20 activities hidden-xs">
								<div class="panel-heading bg-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
<small style="float:right"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['version'];?>
</small></div>
								<div class="panel-body">
									<?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
<?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome_Text_Admin'];?>
<br/>
                                <span class="modder">Template Mod by: 
                                <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['modder'];?>
</span>
                                </div>
								</div>
							</ion-card>
						</div>
					</div>
<?php }else{ ?>
					<div class="row">
						<div class="col-md-12">
							<div class="dash-head clearfix mt15 mb20">
								<div class="left">
									<h4 class="mb5 text-light"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
, <?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
</h4>
									<p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome_Text_User'];?>
</p>
									<ul>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</a></li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/list-activated"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Activated_Voucher'];?>
</a></li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</li>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Private_Message'];?>
</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel mb20 panel-primary panel-hovered">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</div>
								<div class="panel-body">
									<div class="row">
			            				<div class="col-sm-3">
					               			<p class="small text-success text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</p>
					               			<p class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['username'];?>
</p>
					                	</div>
			            				<div class="col-sm-3">
					               			<p class="small text-primary text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</p>
					               			<p class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['namebp'];?>
</p>
					                	</div>
					                	<div class="col-sm-3">
					                		<p class="small text-info text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</p>
					               			<p class="small mb15"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];?>
</p>
					                	</div>
					                	<div class="col-sm-3">
					                		<p class="small text-danger text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</p>
					               			<p class="small mb15"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];?>
</p>
					                	</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
<?php }?>
          </ion-content>
        </ion-tab>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
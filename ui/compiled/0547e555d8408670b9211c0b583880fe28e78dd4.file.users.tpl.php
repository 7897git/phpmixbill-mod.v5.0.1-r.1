<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:57:04
         compiled from "ui/theme/default/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7288046486288621894bb15-97577263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0547e555d8408670b9211c0b583880fe28e78dd4' => 
    array (
      0 => 'ui/theme/default/users.tpl',
      1 => 1653105423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7288046486288621894bb15-97577263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6288621899db51_48068716',
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    '_admin' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6288621899db51_48068716')) {function content_6288621899db51_48068716($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <ion-header translucent>
        <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
          <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Administrator'];?>
</ion-title>
        </ion-toolbar>
      </ion-header>
								<ion-content class="panel-body">
									<ion-card class="md-whiteframe-z1 md-wf-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="username" class="form-control" placeholder="Search by Username...">
												<div class="input-group-btn">
													<button class="btn btn-success">Search</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-add" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_Administrator'];?>
</a>
										</div>&nbsp;
									</ion-card>
									<ion-card class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last_Login'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
											</tr>
										</thead>
										<tbody>
										<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value){
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['user_type'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['last_login'];?>
</td>
												<td>
													<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-warning btn-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
													<?php if (($_smarty_tpl->tpl_vars['_admin']->value['username'])!=($_smarty_tpl->tpl_vars['ds']->value['username'])){?>
														<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
													<?php }?>
												</td>
											</tr>
										<?php } ?>
										</tbody>
									</table>
									</div>
									<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

								</ion-card>
							</div>
						</div>
					</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
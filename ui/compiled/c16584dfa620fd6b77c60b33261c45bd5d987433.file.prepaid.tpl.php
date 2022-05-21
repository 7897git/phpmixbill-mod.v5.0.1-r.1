<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:24:15
         compiled from "ui/theme/default/prepaid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16714476036287dfa7e11d83-64634013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c16584dfa620fd6b77c60b33261c45bd5d987433' => 
    array (
      0 => 'ui/theme/default/prepaid.tpl',
      1 => 1653103454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16714476036287dfa7e11d83-64634013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6287dfa7e6abe9_51415696',
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6287dfa7e6abe9_51415696')) {function content_6287dfa7e6abe9_51415696($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Prepaid_User'];?>
</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
									<ion-card class="md-whiteframe-z1 md-wf-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="username" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Username'];?>
...">
												<div class="input-group-btn">
													<button class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Search'];?>
</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</a>
										</div>&nbsp;
									</ion-card>

        <ion-card class="table-responsive">
						<table id="datatable" class="table table-bordered">
							<thead>
								<tr>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Method'];?>
</th>
									<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
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
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['namebp'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['recharged_on'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['expiration'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['method'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
									<td>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-warning btn-sm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

								</ion-card>
							</div>
						</div>
					</div>


<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
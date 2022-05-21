<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 07:52:13
         compiled from "ui/theme/default/customers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:793555320628837bd760527-09215313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7c1fd231b4b242d87a354301a08cc0a9c76d5f7' => 
    array (
      0 => 'ui/theme/default/customers.tpl',
      1 => 1652813876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '793555320628837bd760527-09215313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'ds' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_628837bd7b48b1_50309083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_628837bd7b48b1_50309083')) {function content_628837bd7b48b1_50309083($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <ion-header translucent>
        <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
          <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Accounts'];?>
</ion-title>
        </ion-toolbar>
        <ion-toolbar>
											<form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list/">
											<div class="input-group">
												<input type="text" name="username" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Search_by_Username'];?>
...">
												<div class="input-group-btn">
													<button class="btn bg-primary"><ion-icon name="search" style="font-size: 25px;"></ion-icon></button>
												</div>
											</div>
											</form>
        </ion-toolbar>
      </ion-header>
      <ion-content fullscreen class="ion-padding">

					<div class="row" style="margin-bottom:100px;">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-body table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
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
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['phonenumber'];?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['created_at'];?>
</td>
												<td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge-user/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-primary btn-sm"><ion-icon name="pulse"></ion-icon> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge'];?>
</a></td>
												<td align="center" style="display: flex;justify-content: space-evenly;">
													<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-info btn-sm"><ion-icon name="create-outline"></ion-icon></a>
													<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger btn-sm cdelete"><ion-icon name="trash-outline"></ion-icon></a>
												</td>
											</tr>
										<?php } ?>
										</tbody>
									</table>
                                </div>
									<?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

								</div>
							</div>
						</div>
					</div>
        <ion-fab horizontal="end" vertical="bottom" slot="fixed" style="bottom: 158px;right: 22px;">
          <ion-fab-button href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add" color="success">
            <ion-icon name="person-add"></ion-icon>
          </ion-fab-button>
        </ion-fab>
          </ion-content>
        </ion-tab>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
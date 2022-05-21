<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:52:37
         compiled from "ui/theme/default/users-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206501294662885ede08ca80-44095867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28670edf343f3185983f3e3c301058c8878781d9' => 
    array (
      0 => 'ui/theme/default/users-edit.tpl',
      1 => 1653105156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206501294662885ede08ca80-44095867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_62885ede0d22c5_34170529',
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    '_admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62885ede0d22c5_34170529')) {function content_62885ede0d22c5_34170529($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      <ion-header translucent>
        <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
          <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit_User'];?>
</ion-title>
        </ion-toolbar>
      </ion-header>

          <ion-content fullscreen class="ion-padding">

		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30"><ion-card-content>
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit-post">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
">
						</div>
                    </div>
					<?php if (($_smarty_tpl->tpl_vars['_admin']->value['id'])!=($_smarty_tpl->tpl_vars['d']->value['id'])){?>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['User_Type'];?>
</label>
						<div class="col-md-10">
							<select name="user_type" id="user_type" class="form-control">
                                <option value="Admin" <?php if ($_smarty_tpl->tpl_vars['d']->value['user_type']=='Admin'){?>selected="selected" <?php }?>>Full Administrator</option>
                                <option value="Sales" <?php if ($_smarty_tpl->tpl_vars['d']->value['user_type']=='Sales'){?>selected="selected" <?php }?>>Sales</option>
                            </select>
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['user_type_help'];?>
</span>
						</div>
                    </div>
					<?php }?>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
						<div class="col-md-10">
							<input type="password" class="form-control" id="password" name="password">
							<span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm_Password'];?>
</label>
						<div class="col-md-10">
							<input type="password" class="form-control" id="cpassword" name="cpassword">
						</div>
                    </div>

					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10 flex">
							<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
						</div>
					</div>
                    </ion-card-content>
                </form>
				
					</div>
				</div>
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
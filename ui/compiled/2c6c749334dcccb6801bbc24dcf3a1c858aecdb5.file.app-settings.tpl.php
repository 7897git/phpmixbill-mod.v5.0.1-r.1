<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:32:41
         compiled from "ui/theme/default/app-settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87003434262885d59d15249-72645098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c6c749334dcccb6801bbc24dcf3a1c858aecdb5' => 
    array (
      0 => 'ui/theme/default/app-settings.tpl',
      1 => 1652895336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87003434262885d59d15249-72645098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    '_c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_62885d59d4a322_43838981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62885d59d4a322_43838981')) {function content_62885d59d4a322_43838981($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


          <ion-header translucent>
            <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
              <ion-title><?php echo $_smarty_tpl->tpl_vars['_L']->value['General_Settings'];?>
</ion-title>
            </ion-toolbar>
          </ion-header>

          <ion-content fullscreen class="ion-padding">
<div class="m-lr" style="margin-bottom:0;">
<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
<ion-card-content>
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name'];?>
</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="company" name="company" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
">
							<small class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['App_Name_Help_Text'];?>
</small>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</label>
						<div class="col-md-10">
							<textarea class="form-control" id="address" name="address" rows="3"><?php echo $_smarty_tpl->tpl_vars['_c']->value['address'];?>
</textarea>
							<small class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</small>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone_Number'];?>
</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['phone'];?>
">
						</div>
                    </div>
                    <div class="form-group hidden">
						<label class="col-md-2 control-label">Theme</label>
						<div class="col-md-10">
							<select name="theme" id="theme" class="form-control">
								<option value="default" <?php if ($_smarty_tpl->tpl_vars['_c']->value['theme']=='default'){?>selected="selected" <?php }?>>Default</option>
							</select>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label">Note Invoice</label>
						<div class="col-md-10">
							<textarea class="form-control" id="note" name="note" rows="3"><?php echo $_smarty_tpl->tpl_vars['_c']->value['note'];?>
</textarea>
							<small class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You_can_use_html_tag'];?>
</small>
						</div>
                    </div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-primary waves-effect waves-light" type="submit" style="float:right;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
						</div>
					</div>
                </form>
</ion-card-content>
</ion-card></div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/darkmode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>
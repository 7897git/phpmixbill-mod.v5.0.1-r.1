<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 01:36:46
         compiled from "ui/theme/default/prepaid-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18519489226287dfbeb8a725-77515666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5b42956083763ed3c6d3a1bec70695e00ea699c' => 
    array (
      0 => 'ui/theme/default/prepaid-edit.tpl',
      1 => 1652813876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18519489226287dfbeb8a725-77515666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
    'd' => 0,
    'p' => 0,
    'ps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6287dfbebc7304_17992166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6287dfbebc7304_17992166')) {function content_6287dfbebc7304_17992166($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Recharge_Account'];?>
</h3></div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/edit-post">
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Account'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
" readonly>
						</div>
                    </div>

                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service_Plan'];?>
</label>
						<div class="col-md-6">
							<select id="id_plan" name="id_plan" class="form-control">
                                <?php  $_smarty_tpl->tpl_vars['ps'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ps']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ps']->key => $_smarty_tpl->tpl_vars['ps']->value){
$_smarty_tpl->tpl_vars['ps']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['ps']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value['plan_id']==$_smarty_tpl->tpl_vars['ps']->value['id']){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ps']->value['name_plan'];?>
</option>
                                <?php } ?>
                            </select>
						</div>
                    </div>
					
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</label>
						<div class="col-md-6">
							<div class="input-group date" id="datepicker1">
								<input type="text" class="form-control" id="recharged_on" name="recharged_on" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['recharged_on'];?>
">
								<span class="input-group-addon ion ion-calendar"></span>
							</div>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</label>
						<div class="col-md-6">
							<div class="input-group date" id="datepicker2">
								<input type="text" class="form-control" id="expiration" name="expiration" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['expiration'];?>
">
								<span class="input-group-addon ion ion-calendar"></span>
							</div>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</button> 
							Or <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
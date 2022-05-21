<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 01:21:49
         compiled from "ui/theme/default/sections/stickyset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18693862846287dc3d9733a2-66883564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6222989d4375a2825dfad43ccc8798b9310e499' => 
    array (
      0 => 'ui/theme/default/sections/stickyset.tpl',
      1 => 1653019488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18693862846287dc3d9733a2-66883564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_admin' => 0,
    '_user' => 0,
    '_url' => 0,
    '_L' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6287dc3d997ed7_34216956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6287dc3d997ed7_34216956')) {function content_6287dc3d997ed7_34216956($_smarty_tpl) {?>
	<div class="site-settings clearfix">
		<div class="settings clearfix">
			<ion-chip class="bg-orange trigger left">
			<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type']=='Admin'||$_smarty_tpl->tpl_vars['_admin']->value['user_type']=='Sales'){?>
  <ion-icon name="settings" color="light"></ion-icon>
  <ion-label color="light"><?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'];?>
</ion-label>
			<?php }else{ ?>
  <ion-avatar>
    <img src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
?set=set3&size=100x100&bgset=bg1">
  </ion-avatar>
  <ion-label color="dark"><?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
</ion-label>
			<?php }?>
</ion-chip>
			<div class="wrapper left">
				<?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type']=='Admin'){?>
				<ul class="list-unstyled other-settings">
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add" id="fixedHeader">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="person-add"></ion-icon>
<ion-label color="light">Add Member</ion-label>
</ion-chip></a>
						</div>
					</li>
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
" id="fixedHeader">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="person"></ion-icon>
<ion-label color="light"><?php echo $_smarty_tpl->tpl_vars['_L']->value['My_Account'];?>
</ion-label>
</ion-chip></a>
						</div>
					</li>
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password" id="navFull">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="lock-open"></ion-icon> 
<ion-label color="light">Password</ion-label>
</ion-chip></a>
						</div>
					</li>
					<li class="clearfix">
						<div class="md-switch">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
setings"  id="themeColor">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="cog"></ion-icon>
<ion-label color="light">App Settings</ion-label>
</ion-chip></a>
						</div>
					</li>
				</ul>
			<?php }else{ ?>
				<ul class="list-unstyled other-settings">
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add" id="fixedHeader">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="person-add"></ion-icon>
<ion-label color="light">Add Member</ion-label>
</ion-chip></a>
						</div>
					</li>
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/refill" id="navFull">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="lock-open"></ion-icon>
 <ion-label color="light">Aktifasi Akun</ion-label>
</ion-chip></a>
						</div>
					</li>
				</ul>
			<?php }?>
				<ul class="list-unstyled other-settings">
					<li class="clearfix">
						<div class="mb10" style="font-size:85%;margin-top:10px;margin-left:10px;">MOD by 
<span id="modder"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['modder'];?>
</span>
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>
<?php }} ?>
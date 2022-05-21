<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 10:08:47
         compiled from "ui/theme/default/sections/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19433016526287dc3d8edb96-90608309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03f37743b98e0b5712f080c541c00e7e6b6a4c24' => 
    array (
      0 => 'ui/theme/default/sections/footer.tpl',
      1 => 1653102525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19433016526287dc3d8edb96-90608309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6287dc3d929e81_34206203',
  'variables' => 
  array (
    'notify' => 0,
    '_system_menu' => 0,
    '_url' => 0,
    '_L' => 0,
    '_theme' => 0,
    'xfooter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6287dc3d929e81_34206203')) {function content_6287dc3d929e81_34206203($_smarty_tpl) {?>           <div style="position: relative;top: 35px;">
			<?php if (isset($_smarty_tpl->tpl_vars['notify']->value)){?>
				<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

			<?php }?>
           </div>

<ion-tab-bar slot="bottom">
          <ion-tab-button <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='dashboard'){?>tab="dashboard"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" onclick="Tungguan()">
            <ion-label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dashboard'];?>
</ion-label>
            <ion-icon name="home"></ion-icon>
          </ion-tab-button>
          <ion-tab-button <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='prepaid'){?>tab="topup"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/recharge" onclick="Tungguan()">
            <ion-label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Topup'];?>
</ion-label>
            <ion-icon name="wifi"></ion-icon>
          </ion-tab-button>
          <ion-tab-button <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value=='reports'){?>tab="uang"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period" onclick="Tungguan()">
            <ion-label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Keuangan'];?>
</ion-label>
            <ion-icon name="cash"></ion-icon>
          </ion-tab-button>
        </ion-tab-bar>
      </ion-tabs>
      </ion-content>
    </ion-app>
<?php echo $_smarty_tpl->getSubTemplate ("sections/darkmode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sections/stickyset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



    <script>
      let currentPopover = null;

      const buttons = document.querySelectorAll('popover');
      for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', handleButtonClick);
      }

      async function handleButtonClick(ev) {
        popover = await popoverController.create({
          component: 'popover-example-page',
          event: ev,
          translucent: true,
        });
        currentPopover = popover;
        return popover.present();
      }

      function dismissPopover() {
        if (currentPopover) {
          currentPopover.dismiss().then(() => {
            currentPopover = null;
          });
        }
      }

      customElements.define(
        'popover-example-page',
        class ModalContent extends HTMLElement {
          connectedCallback() {
            this.innerHTML = `
          <ion-list>
            <ion-list-header>Menu</ion-list-header>
            <ion-item button><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customers'];?>
</ion-item>
            <ion-item button><?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
</ion-item>
            <ion-item button>Showcase</ion-item>
            <ion-item button>GitHub Repo</ion-item>
            <ion-item lines="none" detail="false" button onClick="dismissPopover()">Close Menu</ion-item>
          </ion-list>
        `;
          }
        }
      );
    </script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/vendors.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/screenfull.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/waves.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-slider.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/summernote.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/plugins/bootstrap-datepicker.min.js"></script>
	<script src="ui/lib/js/bootbox.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/app.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/custom.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/form-elements.init.js"></script>

<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>
		
</body>
</html>
<?php }} ?>
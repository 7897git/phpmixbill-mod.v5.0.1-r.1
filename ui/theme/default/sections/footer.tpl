           <div style="position: relative;top: 35px;">
			{if isset($notify)}
				{$notify}
			{/if}
           </div>

<ion-tab-bar slot="bottom">
          <ion-tab-button {if $_system_menu eq 'dashboard'}tab="dashboard"{/if} href="{$_url}dashboard" onclick="Tungguan()">
            <ion-label>{$_L['Dashboard']}</ion-label>
            <ion-icon name="home"></ion-icon>
          </ion-tab-button>
          <ion-tab-button {if $_system_menu eq 'prepaid'}tab="topup"{/if} href="{$_url}prepaid/recharge" onclick="Tungguan()">
            <ion-label>{$_L['Topup']}</ion-label>
            <ion-icon name="wifi"></ion-icon>
          </ion-tab-button>
          <ion-tab-button {if $_system_menu eq 'reports'}tab="uang"{/if} href="{$_url}reports/by-period" onclick="Tungguan()">
            <ion-label>{$_L['Keuangan']}</ion-label>
            <ion-icon name="cash"></ion-icon>
          </ion-tab-button>
        </ion-tab-bar>
      </ion-tabs>
      </ion-content>
    </ion-app>
{include file="sections/darkmode.tpl"}
{include file="sections/stickyset.tpl"}


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
            <ion-item button>{$_L['Customers']}</ion-item>
            <ion-item button>{$_L['Settings']}</ion-item>
            <ion-item button>Showcase</ion-item>
            <ion-item button>GitHub Repo</ion-item>
            <ion-item lines="none" detail="false" button onClick="dismissPopover()">Close Menu</ion-item>
          </ion-list>
        `;
          }
        }
      );
    </script>
	<script src="{$_theme}/scripts/vendors.js"></script>
	<script src="{$_theme}/scripts/plugins/screenfull.js"></script>
	<script src="{$_theme}/scripts/plugins/perfect-scrollbar.min.js"></script>
	<script src="{$_theme}/scripts/plugins/waves.min.js"></script>
	<script src="{$_theme}/scripts/plugins/bootstrap-colorpicker.min.js"></script>
	<script src="{$_theme}/scripts/plugins/bootstrap-slider.min.js"></script>
	<script src="{$_theme}/scripts/plugins/summernote.min.js"></script>
	<script src="{$_theme}/scripts/plugins/bootstrap-datepicker.min.js"></script>
	<script src="ui/lib/js/bootbox.min.js"></script>
	<script src="{$_theme}/scripts/app.js"></script>
	<script src="{$_theme}/scripts/custom.js"></script>
	<script src="{$_theme}/scripts/form-elements.init.js"></script>

{if isset($xfooter)}
	{$xfooter}
{/if}
		
</body>
</html>

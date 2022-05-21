
<div class="switch">
          <ion-chip slot="end" onclick="setDarkMode(true)" id="darkBtn">
            <div>
            <ion-label>DarkMode</ion-label>
            <ion-icon name="moon" color="dark"></ion-icon>
            </div>
          </ion-chip>
          <ion-chip slot="end" onclick="setDarkMode(false)" id="lightBtn" style="display: none;">
            <div>
            <ion-label>LightMode</ion-label>
            <ion-icon name="partly-sunny"></ion-icon>
            </div>
          </ion-chip>
</div>
{include file="sections/script.tpl"}

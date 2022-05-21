
	<div class="site-settings clearfix">
		<div class="settings clearfix">
			<ion-chip class="bg-orange trigger left">
			{if $_admin['user_type'] eq 'Admin' || $_admin['user_type'] eq 'Sales'}
  <ion-icon name="settings" color="light"></ion-icon>
  <ion-label color="light">{$_admin['fullname']}</ion-label>
			{else}
  <ion-avatar>
    <img src="https://robohash.org/{$_admin['id']}?set=set3&size=100x100&bgset=bg1">
  </ion-avatar>
  <ion-label color="dark">{$_user['fullname']}</ion-label>
			{/if}
</ion-chip>
			<div class="wrapper left">
				{if $_admin['user_type'] eq 'Admin'}
				<ul class="list-unstyled other-settings">
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="{$_url}customers/add" id="fixedHeader">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="person-add"></ion-icon>
<ion-label color="light">Add Member</ion-label>
</ion-chip></a>
						</div>
					</li>
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="{$_url}settings/users-edit/{$_admin['id']}" id="fixedHeader">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="person"></ion-icon>
<ion-label color="light">{$_L['My_Account']}</ion-label>
</ion-chip></a>
						</div>
					</li>
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="{$_url}settings/change-password" id="navFull">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="lock-open"></ion-icon> 
<ion-label color="light">Password</ion-label>
</ion-chip></a>
						</div>
					</li>
					<li class="clearfix">
						<div class="md-switch">
<a href="{$_url}setings"  id="themeColor">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="cog"></ion-icon>
<ion-label color="light">App Settings</ion-label>
</ion-chip></a>
						</div>
					</li>
				</ul>
			{else}
				<ul class="list-unstyled other-settings">
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="{$_url}customers/add" id="fixedHeader">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="person-add"></ion-icon>
<ion-label color="light">Add Member</ion-label>
</ion-chip></a>
						</div>
					</li>
					<li class="clearfix">
						<div class="md-switch mb10">
<a href="{$_url}prepaid/refill" id="navFull">
<ion-chip class="bg-yellowG">
<ion-icon color="light" name="lock-open"></ion-icon>
 <ion-label color="light">Aktifasi Akun</ion-label>
</ion-chip></a>
						</div>
					</li>
				</ul>
			{/if}
				<ul class="list-unstyled other-settings">
					<li class="clearfix">
						<div class="mb10" style="font-size:85%;margin-top:10px;margin-left:10px;">MOD by 
<span id="modder"> {$_L['modder']}</span>
						</div>
					</li>
				</ul>

			</div>
		</div>
	</div>

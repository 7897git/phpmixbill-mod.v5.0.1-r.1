{include file="sections/header.tpl"}
    <ion-header translucent>
      <ion-toolbar>
        {include file="sections/back-btn.tpl"}
        <ion-title>{$_L['Refill_Account']}</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">

		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
					<ion-list class="panel-body">
						<form class="form-horizontal" method="post" role="form" action="{$_url}prepaid/refill-post" >            
							<ion-item>
								<ion-label>{$_L['Select_Account']}</ion-label>
									<ion-select id="personSelect" name="id_customer" placeholder="{$_L['Select_Customer']}...">
										{foreach $c as $cs}
											<ion-select-option value="{$cs['id']}">{$cs['username']}</ion-select-option>
										{/foreach}
									</ion-select>
							</ion-item>
							<ion-item class="mb10">
								<ion-label position="floating">{$_L['Code_Voucher']}</ion-label>
									<ion-input type="text" id="code" name="code" placeholder="{$_L['Enter_Voucher_Code']}"/>
							</ion-item>
							
							<div class="form-group">
								<div class="col-lg-12 flex">
									<button class="btn btn-success waves-effect waves-light" type="submit">{$_L['Recharge']}</button> <a href="{$_url}dashboard">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
					</ion-list>
				</ion-card>
			</div>
		</div>

</ion-content>
{include file="sections/footer.tpl"}

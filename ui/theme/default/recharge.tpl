{include file="sections/header.tpl"}

        <ion-tab tab="topup">
          <ion-header translucent>
            <ion-toolbar>
              <ion-title>{$_L['Topup']}</ion-title>
            </ion-toolbar>
          </ion-header>

          <ion-content fullscreen class="ion-padding">

		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
					<ion-list class="panel-body">
                       <div class="m-auto">
						<form class="form-horizontal" method="post" role="form" action="{$_url}prepaid/recharge-post" >            
							<ion-item class="mb30">
								<ion-label>Akun WiFi</ion-label>
									<ion-select id="personSelect" name="id_customer" placeholder="{$_L['Select_Account']}" ok-text="Okay" cancel-text="Batal">
										{foreach $c as $cs}
											<ion-select-option value="{$cs['id']}">{$cs['username']}</ion-select-option>
										{/foreach}
									</ion-select>
							</ion-item>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Type']}</label>
								<div class="col-md-10 flex">
                                  <label class="btn btn-sm btn-secondary">
									<input type="radio" id="Hot" name="type" value="Hotspot"> {$_L['Hotspot_Plans']} </label>
                                  <label class="btn btn-sm btn-secondary">
									<input type="radio" id="POE" name="type" value="PPPOE"> {$_L['PPPOE_Plans']} </label>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Routers']}</label>
								<div class="col-md-10">
									<select id="server" name="server" class="form-control">
										<option value=''>{$_L['Select_Routers']}</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Service_Plan']}</label>
								<div class="col-md-10">
									<select id="plan" name="plan" class="form-control">
										<option value=''>{$_L['Select_Plans']}</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 flex">
									<button class="btn btn-success waves-effect waves-light" type="submit" style="float:right">{$_L['Recharge']}</button> 
								</div>
							</div>
						</form>
                        </div>
					</ion-list>
				</ion-card>
			</div>
		</div>
          </ion-content>
        </ion-tab>

{include file="sections/footer.tpl"}

{include file="sections/header.tpl"}
    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>{$_L['Add_Voucher']}</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
	
		<div class="row">
			<div class="m-lr">
				<ion-card class="panel-body">
        <ion-card-content>

                <form class="form-horizontal" method="post" role="form" action="{$_url}prepaid/voucher-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Type']}</label>
						<div class="col-md-10" style="display: flex;justify-content: flex-start;">
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
						<label class="col-md-2 control-label">{$_L['Number_of_Vouchers']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="numbervoucher" value="1">
						</div>
                    </div>
					
					<div class="form-group">
						<label class="col-md-2 control-label">{$_L['Length_Code']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="lengthcode" value="12">
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit" onclick="myBtn()" style="float:right">{$_L['Generate']}</button> 
						</div>
					</div>
                </form>
				
        </ion-card-content>
    </ion-card>
			</div>
		</div>
<script>
function myBtn() {
  location.replace("{$_url}prepaid/voucher")
}
</script>

{include file="sections/footer.tpl"}

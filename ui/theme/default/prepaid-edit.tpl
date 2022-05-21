{include file="sections/header.tpl"}
      <ion-header translucent>
        <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
          <ion-title>{$_L['Recharge_Account']}</ion-title>
        </ion-toolbar>
      </ion-header>

          <ion-content fullscreen class="ion-padding">

		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30"><ion-card-content>
                <form class="form-horizontal" method="post" role="form" action="{$_url}prepaid/edit-post">
				<input type="hidden" name="id" value="{$d['id']}">
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Select_Account']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="username" name="username" value="{$d['username']}" readonly>
						</div>
                    </div>

                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Service_Plan']}</label>
						<div class="col-md-10">
							<select id="id_plan" name="id_plan" class="form-control">
                                {foreach $p as $ps}
									<option value="{$ps['id']}" {if $d['plan_id'] eq $ps['id']} selected {/if}>{$ps['name_plan']}</option>
                                {/foreach}
                            </select>
						</div>
                    </div>
					
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Created_On']}</label>
						<div class="col-md-10">
							<div class="input-group date" id="datepicker1">
								<input type="text" class="form-control" id="recharged_on" name="recharged_on" value="{$d['recharged_on']}">
								<span class="input-group-addon ion ion-calendar"></span>
							</div>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Expires_On']}</label>
						<div class="col-md-10">
							<div class="input-group date" id="datepicker2">
								<input type="text" class="form-control" id="expiration" name="expiration" value="{$d['expiration']}">
								<span class="input-group-addon ion ion-calendar"></span>
							</div>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10 flex">
							<button class="btn btn-success waves-effect waves-light" type="submit" onclick="myBtn()">{$_L['Edit']}</button> <a href="{$_url}prepaid/list">{$_L['Cancel']}</a>
						</div>
					</div>
                </form>
                    </ion-card-content>
				</ion-card>
            </div>
        </div>
    </div>
</div>
<script>
function myBtn() {
  location.replace("{$_url}prepaid/list")
}
</script>

{include file="sections/footer.tpl"}

{include file="sections/header.tpl"}
    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>{$_L['Add_Plan']}</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
	
		<div class="row">
			<div class="m-lr">
				<ion-card class="panel-body">
        <ion-card-content>
                <form class="form-horizontal" method="post" role="form" action="{$_url}services/add-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Plan_Name']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="name" name="name">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Plan_Type']}</label>
						<div class="col-md-10" style="display: flex;justify-content: flex-start;">
                                  <label class="btn btn-sm btn-secondary">
							<input type="radio" id="Unlimited" name="typebp" value="Unlimited" checked> {$_L['Unlimited']} </label>
                                  <label class="btn btn-sm btn-secondary">
							<input type="radio" id="Limited" name="typebp" value="Limited"> {$_L['Limited']} </label>
						</div>
                    </div>
					<div style="display:none;" id="Type">
						<div class="form-group">
							<label class="col-md-2 control-label">{$_L['Limit_Type']}</label>
							<div class="col-md-10" style="display: flex;justify-content: flex-start;">
                                  <label class="btn btn-sm btn-secondary">
								<input type="radio" id="Time_Limit" name="limit_type" value="Time_Limit" checked> {$_L['Time_Limit']} </label>
                                  <label class="btn btn-sm btn-secondary">
								<input type="radio" id="Data_Limit" name="limit_type" value="Data_Limit"> {$_L['Data_Limit']} </label>
                                  <label class="btn btn-sm btn-secondary">
								<input type="radio" id="Both_Limit" name="limit_type" value="Both_Limit"> {$_L['Both_Limit']} </label>
							</div>
						</div>
					</div>
					<div style="display:none;" id="TimeLimit">
						<div class="form-group">
							<label class="col-md-2 control-label">{$_L['Time_Limit']}</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="time_limit" name="time_limit" value="0">
							</div>
							<div class="col-md-2">
								<select class="form-control" id="time_unit" name="time_unit">
									<option value="Hrs">{$_L['Hrs']}</option>
									<option value="Mins">{$_L['Mins']}</option>
								</select>
							</div>
						</div>
					</div>
					<div style="display:none;" id="DataLimit">
						<div class="form-group">
							<label class="col-md-2 control-label">{$_L['Data_Limit']}</label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="data_limit" name="data_limit" value="0">
							</div>
							<div class="col-md-2">
								<select class="form-control" id="data_unit" name="data_unit">
									<option value="MB">MBs</option>
									<option value="GB">GBs</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">{$_L['BW_Name']}</label>
						<div class="col-md-6">
							<select id="id_bw" name="id_bw" class="form-control">
                                <option value="">{$_L['Select_BW']}...</option>
                                {foreach $d as $ds}
									<option value="{$ds['id']}">{$ds['name_bw']}</option>
                                {/foreach}
                            </select>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Plan_Price']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="pricebp" name="pricebp">
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label">{$_L['Shared_Users']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="sharedusers" name="sharedusers" value="1">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Plan_Validity']}</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="validity" name="validity">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="validity_unit" name="validity_unit">
								<option value="Days">{$_L['Days']}</option>
								<option value="Months">{$_L['Months']}</option>
							</select>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label">{$_L['Router_Name']}</label>
						<div class="col-md-10">
							<select id="routers" name="routers" class="form-control">
                                {foreach $r as $rs}
									<option value="{$rs['name']}">{$rs['name']}</option>
                                {/foreach}
                            </select>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10 flex">
							<button class="btn btn-success waves-effect waves-light" type="submit">{$_L['Save']}</button><a href="{$_url}services/hotspot">{$_L['Cancel']}</a>
						</div>
					</div>
                </form>
        </ion-card-content>
    </ion-card>
				</div>
			</div>
		</div>

{include file="sections/footer.tpl"}

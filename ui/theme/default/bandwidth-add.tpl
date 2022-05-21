{include file="sections/header.tpl"}
    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>{$_L['Add_Bandwidth']}</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
	
		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
<ion-card-content>
			
                <form class="form-horizontal" method="post" role="form" action="{$_url}bandwidth/add-post">            
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['BW_Name']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="name" name="name">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Rate_Download']}</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="rate_down" name="rate_down">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="rate_down_unit" name="rate_down_unit">
								<option value="Kbps">Kbps</option>
								<option value="Mbps">Mbps</option>
							</select>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Rate_Upload']}</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="rate_up" name="rate_up">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="rate_up_unit" name="rate_up_unit">
								<option value="Kbps">Kbps</option>
								<option value="Mbps">Mbps</option>
							</select>
						</div>
                    </div>

					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10" style="display:flex;justify-content:space-between;align-items:center;">
							<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Submit']}</button><a href="{$_url}bandwidth/list">{$_L['Cancel']}</a>
						</div>
					</div>
                </form>
            </ion-card-content>
    </ion-card>
				
					</div>
				</div>
			</div>
		</div>

{include file="sections/darkmode.tpl"}

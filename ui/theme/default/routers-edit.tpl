{include file="sections/header.tpl"}
    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>{$_L['Edit_Router']}</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
	
		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
<ion-card-content>

                <form class="form-horizontal" method="post" role="form" action="{$_url}routers/edit-post" > 
				<input type="hidden" name="id" value="{$d['id']}">				
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Router_Name']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="name" name="name" value="{$d['name']}">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['IP_Address']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="ip_address" name="ip_address" value="{$d['ip_address']}">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Username']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="username" name="username" value="{$d['username']}">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Router_Secret']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="password" name="password" value="{$d['password']}">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Description']}</label>
						<div class="col-md-10">
							<textarea class="form-control" id="description" name="description">{$d['description']}</textarea>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10" style="display:flex;justify-content:space-between;align-items:center;">
							<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Save']}</button><a href="{$_url}routers/list">{$_L['Cancel']}</a>
						</div>
					</div>
                </form>
            </ion-card-content>
    </ion-card>
				
					</div>
				</div>
			</div>
		</div>

{include file="sections/footer.tpl"}

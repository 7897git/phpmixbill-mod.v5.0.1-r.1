{include file="sections/header.tpl"}

          <ion-header translucent>
            <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
              <ion-title>{$_L['General_Settings']}</ion-title>
            </ion-toolbar>
          </ion-header>

          <ion-content fullscreen class="ion-padding">
<div class="m-lr" style="margin-bottom:0;">
<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
<ion-card-content>
                <form class="form-horizontal" method="post" role="form" action="{$_url}settings/app-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['App_Name']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="company" name="company" value="{$_c['CompanyName']}">
							<small class="help-block">{$_L['App_Name_Help_Text']}</small>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label">{$_L['Address']}</label>
						<div class="col-md-10">
							<textarea class="form-control" id="address" name="address" rows="3">{$_c['address']}</textarea>
							<small class="help-block">{$_L['You_can_use_html_tag']}</small>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label">{$_L['Phone_Number']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="phone" name="phone" value="{$_c['phone']}">
						</div>
                    </div>
                    <div class="form-group hidden">
						<label class="col-md-2 control-label">Theme</label>
						<div class="col-md-10">
							<select name="theme" id="theme" class="form-control">
								<option value="default" {if $_c['theme'] eq 'default'}selected="selected" {/if}>Default</option>
							</select>
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label">Note Invoice</label>
						<div class="col-md-10">
							<textarea class="form-control" id="note" name="note" rows="3">{$_c['note']}</textarea>
							<small class="help-block">{$_L['You_can_use_html_tag']}</small>
						</div>
                    </div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-primary waves-effect waves-light" type="submit" style="float:right;">{$_L['Save']}</button>
						</div>
					</div>
                </form>
</ion-card-content>
</ion-card></div>

{include file="sections/darkmode.tpl"}



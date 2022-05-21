{include file="sections/header.tpl"}
    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>{$_L['Edit_Bandwidth']}</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
	
		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
<ion-card-content>
						
                <form class="form-horizontal" method="post" role="form" action="{$_url}bandwidth/edit-post" >
				<input type="hidden" name="id" value="{$d['id']}">
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['BW_Name']}</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="name" name="name" value="{$d['name_bw']}">
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Rate_Download']}</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="rate_down" name="rate_down" value="{$d['rate_down']}">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="rate_down_unit" name="rate_down_unit">
								<option value="Kbps" {if $d['rate_down_unit'] eq 'Kbps'}selected="selected" {/if}>Kbps</option>
                                <option value="Mbps" {if $d['rate_down_unit'] eq 'Mbps'}selected="selected" {/if}>Mbps</option>
							</select>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Rate_Upload']}</label>
						<div class="col-md-8">
							<input type="text" class="form-control" id="rate_up" name="rate_up" value="{$d['rate_up']}">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="rate_up_unit" name="rate_up_unit">
								<option value="Kbps" {if $d['rate_up_unit'] eq 'Kbps'}selected="selected" {/if}>Kbps</option>
                                <option value="Mbps" {if $d['rate_up_unit'] eq 'Mbps'}selected="selected" {/if}>Mbps</option>
							</select>
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10" style="display:flex;justify-content:space-between;align-items:center;">
							<button class="btn btn-primary waves-effect waves-light" type="submit" onclick="myBtn()">{$_L['Submit']}</button><a href="{$_url}bandwidth/list">{$_L['Cancel']}</a>
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
  location.replace("{$_url}bandwidth/list")
}
</script>

{include file="sections/footer.tpl"}

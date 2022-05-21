{include file="sections/header.tpl"}
      <ion-header translucent>
        <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
          <ion-title>{$_L['Bandwidth_Plans']}</ion-title>
          <ion-buttons slot="end">
            <ion-button href="{$_url}bandwidth/add">
              <ion-icon color="success" name="add-circle" style="font-size: xx-large;"></ion-icon>
            </ion-button>
          </ion-buttons>
        </ion-toolbar>
      </ion-header>
						<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>{$_L['BW_Name']}</th>
									<th>{$_L['Rate_Download']}</th>
									<th>{$_L['Rate_Upload']}</th>
									<th>{$_L['Manage']}</th>
								</tr>
							</thead>
							<tbody>
							{foreach $d as $ds}
								<tr>
									<td>{$ds['name_bw']}</td>
									<td>{$ds['rate_down']} {$ds['rate_down_unit']}</td>
									<td>{$ds['rate_up']} {$ds['rate_up_unit']}</td>
									<td class="btn-group" style="display:flex;">
        <ion-buttons slot="start">
          <ion-button href="{$_url}bandwidth/edit/{$ds['id']}"><ion-icon name="create" color="primary"></ion-icon></ion-button>
        </ion-buttons>
        <ion-buttons slot="end">
          <ion-button href="{$_url}bandwidth/delete/{$ds['id']}" id="{$ds['id']}" id="{$ds['id']}"><ion-icon name="trash" color="danger"></ion-icon></ion-button>
        </ion-buttons>
									</td>
								</tr>
							{/foreach}
							</tbody>
						</table>
						{$paginator['contents']}
							</div>
						</div>
					</div>
				</div>
			</div>

{include file="sections/darkmode.tpl"}

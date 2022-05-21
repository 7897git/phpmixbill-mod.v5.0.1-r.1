{include file="sections/header.tpl"}
      <ion-header translucent>
        <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
          <ion-title>{$_L['Hotspot_Plans']}</ion-title>
          <ion-buttons slot="end">
            <ion-button href="{$_url}services/add">
              <ion-icon color="success" name="add-circle" style="font-size: xx-large;"></ion-icon>
            </ion-button>
          </ion-buttons>
        </ion-toolbar>
      </ion-header>
						<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>{$_L['Plan_Name']}</th>
									<th>{$_L['Plan_Type']}</th>
									<th>{$_L['Bandwidth_Plans']}</th>
									<th>{$_L['Plan_Price']}</th>
									<th>{$_L['Time_Limit']}</th>
									<th>{$_L['Data_Limit']}</th>
									<th>{$_L['Plan_Validity']}</th>
									<th>{$_L['Routers']}</th>
									<th>{$_L['Manage']}</th>
								</tr>
							</thead>
							<tbody>
							{foreach $d as $ds}
								<tr>
									<td>{$ds['name_plan']}</td>
									<td>{$ds['typebp']}</td>
									<td>{$ds['name_bw']}</td>
									<td>{$ds['price']}</td>
									<td>{$ds['time_limit']} {$ds['time_unit']}</td>
									<td>{$ds['data_limit']} {$ds['data_unit']}</td>
									<td>{$ds['validity']} {$ds['validity_unit']}</td>
									<td>{$ds['routers']}</td>
									<td class="btn-group" style="display:flex;">
        <ion-buttons slot="start">
          <ion-button href="{$_url}services/edit/{$ds['id']}"><ion-icon name="create" color="primary"></ion-icon></ion-button>
        </ion-buttons>
        <ion-buttons slot="end">
          <ion-button href="{$_url}services/delete/{$ds['id']}" id="{$ds['id']}"><ion-icon name="trash" color="danger"></ion-icon></ion-button>
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

{include file="sections/darkmode.tpl"}

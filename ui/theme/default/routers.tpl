{include file="sections/header.tpl"}
      <ion-header translucent>
        <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
          <ion-title>{$_L['Routers']}</ion-title>
          <ion-buttons slot="end">
            <ion-button href="{$_url}routers/add">
              <ion-icon color="success" name="add-circle" style="font-size: xx-large;"></ion-icon>
            </ion-button>
          </ion-buttons>
        </ion-toolbar>
      </ion-header>
						<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>{$_L['Router_Name']}</th>
									<th>{$_L['IP_Address']}</th>
									<th>{$_L['Username']}</th>
									<th>{$_L['Description']}</th>
									<th>{$_L['Manage']}</th>
								</tr>
							</thead>
							<tbody>
							{foreach $d as $ds}
								<tr>
									<td>{$ds['name']}</td>
									<td>{$ds['ip_address']}</td>
									<td>{$ds['username']}</td>
									<td>{$ds['description']}</td>
									<td class="btn-group" style="display:flex;">
        <ion-buttons slot="start">
          <ion-button href="{$_url}routers/edit/{$ds['id']}"><ion-icon name="create" color="primary"></ion-icon></ion-button>
        </ion-buttons>
        <ion-buttons slot="end">
          <ion-button href="{$_url}routers/delete/{$ds['id']}" id="{$ds['id']}"><ion-icon name="trash" color="danger"></ion-icon></ion-button>
        </ion-buttons>
									</td>
								</tr>
							{/foreach}
							</tbody>
						</table>
						</div>
						{$paginator['contents']}
								</div>
							</div>
						</div>
					</div>

{include file="sections/darkmode.tpl"}

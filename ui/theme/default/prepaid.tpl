{include file="sections/header.tpl"}
    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>{$_L['Prepaid_User']}</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
									<ion-card class="md-whiteframe-z1 md-wf-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="{$_url}prepaid/list/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="username" class="form-control" placeholder="{$_L['Search_by_Username']}...">
												<div class="input-group-btn">
													<button class="btn btn-success">{$_L['Search']}</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="{$_url}prepaid/recharge" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Recharge_Account']}</a>
										</div>&nbsp;
									</ion-card>

        <ion-card class="table-responsive">
						<table id="datatable" class="table table-bordered">
							<thead>
								<tr>
									<th>{$_L['Username']}</th>
									<th>{$_L['Plan_Name']}</th>
									<th>{$_L['Type']}</th>
									<th>{$_L['Created_On']}</th>
									<th>{$_L['Expires_On']}</th>
									<th>{$_L['Method']}</th>
									<th>{$_L['Routers']}</th>
									<th>{$_L['Manage']}</th>
								</tr>
							</thead>
							<tbody>
							{foreach $d as $ds}
								<tr>
									<td>{$ds['username']}</td>
									<td>{$ds['namebp']}</td>
									<td>{$ds['type']}</td>
									<td>{$ds['recharged_on']} {$ds['time']}</td>
									<td>{$ds['expiration']} {$ds['time']}</td>
									<td>{$ds['method']}</td>
									<td>{$ds['routers']}</td>
									<td>
										<a href="{$_url}prepaid/edit/{$ds['id']}" class="btn btn-warning btn-sm">{$_L['Edit']}</a>
										<a href="{$_url}prepaid/delete/{$ds['id']}" id="{$ds['id']}" class="btn btn-danger btn-sm cdelete">{$_L['Delete']}</a>
									</td>
								</tr>
							{/foreach}
							</tbody>
						</table>
						{$paginator['contents']}
								</ion-card>
							</div>
						</div>
					</div>


{include file="sections/footer.tpl"}

{include file="sections/header.tpl"}
      <ion-header translucent>
        <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
          <ion-title>{$_L['Manage_Administrator']}</ion-title>
        </ion-toolbar>
      </ion-header>
								<ion-content class="panel-body">
									<ion-card class="md-whiteframe-z1 md-wf-z1 mb20 text-center" style="padding: 15px">
										<div class="col-md-8">
											<form id="site-search" method="post" action="{$_url}settings/users/">
											<div class="input-group">
												<div class="input-group-addon">
													<span class="fa fa-search"></span>
												</div>
												<input type="text" name="username" class="form-control" placeholder="Search by Username...">
												<div class="input-group-btn">
													<button class="btn btn-success">Search</button>
												</div>
											</div>
											</form>
										</div>
										<div class="col-md-4">
											<a href="{$_url}settings/users-add" class="btn btn-primary btn-block waves-effect"><i class="ion ion-android-add"> </i> {$_L['Add_New_Administrator']}</a>
										</div>&nbsp;
									</ion-card>
									<ion-card class="table-responsive">
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>{$_L['Username']}</th>
												<th>{$_L['Full_Name']}</th>
												<th>{$_L['Type']}</th>
												<th>{$_L['Last_Login']}</th>
												<th>{$_L['Manage']}</th>
											</tr>
										</thead>
										<tbody>
										{foreach $d as $ds}
											<tr>
												<td>{$ds['username']}</td>
												<td>{$ds['fullname']}</td>
												<td>{$ds['user_type']}</td>
												<td>{$ds['last_login']}</td>
												<td>
													<a href="{$_url}settings/users-edit/{$ds['id']}" class="btn btn-warning btn-sm">{$_L['Edit']}</a>
													{if ($_admin['username']) neq ($ds['username'])}
														<a href="{$_url}settings/users-delete/{$ds['id']}" id="{$ds['id']}" class="btn btn-danger btn-sm cdelete">{$_L['Delete']}</a>
													{/if}
												</td>
											</tr>
										{/foreach}
										</tbody>
									</table>
									</div>
									{$paginator['contents']}
								</ion-card>
							</div>
						</div>
					</div>

{include file="sections/footer.tpl"}

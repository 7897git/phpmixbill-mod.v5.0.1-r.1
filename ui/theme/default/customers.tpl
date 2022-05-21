{include file="sections/header.tpl"}
      <ion-header translucent>
        <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
          <ion-title>{$_L['Manage_Accounts']}</ion-title>
        </ion-toolbar>
        <ion-toolbar>
											<form id="site-search" method="post" action="{$_url}customers/list/">
											<div class="input-group">
												<input type="text" name="username" class="form-control" placeholder="{$_L['Search_by_Username']}...">
												<div class="input-group-btn">
													<button class="btn bg-primary"><ion-icon name="search" style="font-size: 25px;"></ion-icon></button>
												</div>
											</div>
											</form>
        </ion-toolbar>
      </ion-header>
      <ion-content fullscreen class="ion-padding">

					<div class="row" style="margin-bottom:100px;">
						<div class="col-sm-12">
							<div class="panel panel-hovered mb20 panel-default">
								<div class="panel-body table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>{$_L['Username']}</th>
												<th>{$_L['Full_Name']}</th>
												<th>{$_L['Phone_Number']}</th>
												<th>{$_L['Created_On']}</th>
												<th>{$_L['Recharge']}</th>
												<th>{$_L['Manage']}</th>
											</tr>
										</thead>
										<tbody>
										{foreach $d as $ds}
											<tr>
												<td>{$ds['username']}</td>
												<td>{$ds['fullname']}</td>
												<td>{$ds['phonenumber']}</td>
												<td>{$ds['created_at']}</td>
												<td align="center"><a href="{$_url}prepaid/recharge-user/{$ds['id']}" id="{$ds['id']}" class="btn btn-primary btn-sm"><ion-icon name="pulse"></ion-icon> {$_L['Recharge']}</a></td>
												<td align="center" style="display: flex;justify-content: space-evenly;">
													<a href="{$_url}customers/edit/{$ds['id']}" class="btn btn-info btn-sm"><ion-icon name="create-outline"></ion-icon></a>
													<a href="{$_url}customers/delete/{$ds['id']}" id="{$ds['id']}" class="btn btn-danger btn-sm cdelete"><ion-icon name="trash-outline"></ion-icon></a>
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
        <ion-fab horizontal="end" vertical="bottom" slot="fixed" style="bottom: 158px;right: 22px;">
          <ion-fab-button href="{$_url}customers/add" color="success">
            <ion-icon name="person-add"></ion-icon>
          </ion-fab-button>
        </ion-fab>
          </ion-content>
        </ion-tab>

{include file="sections/footer.tpl"}

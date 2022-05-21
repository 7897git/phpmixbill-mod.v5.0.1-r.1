{include file="sections/header.tpl"}

        <ion-tab tab="dashboard">
          <ion-header translucent>
            <ion-toolbar>
              <ion-title>{$_L['Dashboard']}</ion-title>
            </ion-toolbar>
          </ion-header>

          <ion-content fullscreen class="ion-padding">
{if ($_admin['user_type']) eq 'Admin' || ($_admin['user_type']) eq 'Sales'}
					<div class="row hidden">
						<div class="col-md-12">
							<div class="dash-head clearfix mt15 mb20">
								<div class="left">
									<h4 class="mb5 text-light">Dashboard</h4>
									<p class="small"></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0">
<a href="{$_url}reports/daily-report">
                    <ion-card class="info-box-3 bg-primary hover-zoom-effect" style="cursor:pointer">
                        <div class="icon">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color:#fff">{$_L['Income_Today']}</div>
                            <div class="number count-to" style="color:#fff">{$_c['currency_code']} {number_format($iday,0,$_c['dec_point'],$_c['thousands_sep'])} ,00</div>
                        </div>
                    </ion-card>
</a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0">
<a href="{$_url}reports/by-period">
                    <ion-card class="info-box-3 bg-success hover-zoom-effect" style="cursor:pointer">
                        <div class="icon">
                            <i class="material-icons">account_balance_wallet</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color:#fff">{$_L['Income_This_Month']}</div>
                            <div class="number count-to" style="color:#fff">{$_c['currency_code']} {number_format($imonth,0,$_c['dec_point'],$_c['thousands_sep'])} ,00</div>
                        </div>
                    </ion-card>
</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0 hidden-xs">
<a href="{$_url}prepaid/list">
                    <ion-card class="info-box-3 bg-warning hover-zoom-effect" style="cursor:pointer">
                        <div class="icon">
                            <i class="material-icons">verified_user</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color:#fff">{$_L['Users_Active']}</div>
                            <div class="number count-to" style="color:#fff">{$u_act} orang</div>
                        </div>
                    </ion-card>
</a>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 p0">
<a href="{$_url}customers/list">
                    <ion-card class="info-box-3 bg-info hover-zoom-effect" style="cursor:pointer">
                        <div class="icon">
                            <i class="material-icons">people</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color:#fff">{$_L['Total_Users']}</div>
                            <div class="number count-to" style="color:#fff">{$u_all} member</div>
                        </div>
                    </ion-card>
                </div>
</a>
            </div>
					</div>
					<div class="row">
						<div class="col-md-7 p0">
							<ion-card class="panel panel-default panel-hovered mb20 activities md">
								<ion-card-header>
<ion-label>{$_L['User_Expired_Today']}</ion-label>
                                </ion-card-header>
								<ion-list class="panel-body table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>Id</th>
												<th>{$_L['Username']}</th>
												<th>{$_L['Created_On']}</th>
												<th>{$_L['Expires_On']}</th>
											</tr>
										</thead>
										<tbody>
										{$no = 1}
										{foreach $expire as $expired}
											<tr>
												<td>{$no++}</td>
												<td>{$expired['username']}</td>
												<td>{date($_c['date_format'], strtotime($expired['recharged_on']))} {$expired['time']}</td>
												<td>{date($_c['date_format'], strtotime($expired['expiration']))} {$expired['time']}</td>
											</tr>
										</tbody>
										{/foreach}
									</table>
								</ion-list>
						    </ion-card>
							<ion-card class="panel panel-default panel-hovered mb20 activities hidden-xs">
								<ion-card-header class="flex">
<ion-label>Vouchers Stock</ion-label>
                                  <a href="{$_url}prepaid/voucher"><ion-label class="btn btn-sm btn-secondary">{$_L['Prepaid_Vouchers']} <ion-icon name="ticket" slot="end"></ion-icon></ion-label></a>
                                </ion-card-header>
								<ion-list class="panel-body table-responsive">	
									<table class="table">
										<thead>
											<tr>
												<th>{$_L['Plan_Name']}</th>
												<th>unused</th>
												<th>used</th>
											</tr>
										</thead>
										<tbody>
										{foreach $plans as $stok}
											<tr>
												<td>{$stok['name_plan']}</td>
												<td>{$stok['unused']}</td>
												<td>{$stok['used']}</td>
											</tr>
										</tbody>
										{/foreach}
											<tr>
												<td>Total</td>
												<td>{$stocks['unused']}</td>
												<td>{$stocks['used']}</td>
											</tr>
									</table>
								</ion-list>
							</ion-card>
					       </div>
						
						<div class="col-md-5 p0">
							<ion-card class="panel panel-default panel-hovered mb20 activities">
<ion-card-header>
								<ion-label class="panel-heading">{$_L['Activity_Log']}</ion-label>
</ion-card-header>
								<ion-list class="panel-body">
									{foreach $dlog as $dlogs}
                                      <ion-item>
                                        <ion-avatar slot="start">
{if ($_admin['user_type']) eq 'Admin' || ($_admin['user_type']) eq 'Sales'}
                                          <img src="https://ionicframework.com/docs/demos/api/avatar/avatar.svg" />
                                        </ion-avatar>
			{else}
                                          <img src="https://ionicframework.com/docs/demos/api/avatar/avatar.svg" />
{/if}
                                        </ion-avatar>
                                        <ion-label>
                                          <h3>{$dlogs['description']}</h3>
                                          <p>{time_elapsed_string($dlogs['date'],true)}</p>
                                        </ion-label>
                                      </ion-item>
									{/foreach}
								</ion-list>
							</ion-card>
							<ion-card class="panel panel-default bg-danger panel-hovered mb20 activities hidden-xs">
								<div class="panel-heading bg-danger">{$_L['Logo']}<small style="float:right"> {$_L['version']}</small></div>
								<div class="panel-body">
									{$_L['Logo']}{$_L['Welcome_Text_Admin']}<br/>
                                <span class="modder">Template Mod by: 
                                <span>{$_L['modder']}</span>
                                </div>
								</div>
							</ion-card>
						</div>
					</div>
{else}
					<div class="row">
						<div class="col-md-12">
							<div class="dash-head clearfix mt15 mb20">
								<div class="left">
									<h4 class="mb5 text-light">{$_L['Welcome']}, {$_user['fullname']}</h4>
									<p>{$_L['Welcome_Text_User']}</p>
									<ul>
										<li> {$_L['Account_Information']}</li>
										<li> <a href="{$_url}voucher/activation">{$_L['Voucher_Activation']}</a></li>
										<li> <a href="{$_url}voucher/list-activated">{$_L['List_Activated_Voucher']}</a></li>
										<li> <a href="{$_url}accounts/change-password">{$_L['Change_Password']}</a></li>
										<li> {$_L['Order_Voucher']}</li>
										<li> {$_L['Private_Message']}</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel mb20 panel-primary panel-hovered">
								<div class="panel-heading">{$_L['Account_Information']}</div>
								<div class="panel-body">
									<div class="row">
			            				<div class="col-sm-3">
					               			<p class="small text-success text-uppercase text-normal">{$_L['Username']}</p>
					               			<p class="small mb15">{$_bill['username']}</p>
					                	</div>
			            				<div class="col-sm-3">
					               			<p class="small text-primary text-uppercase text-normal">{$_L['Plan_Name']}</p>
					               			<p class="small mb15">{$_bill['namebp']}</p>
					                	</div>
					                	<div class="col-sm-3">
					                		<p class="small text-info text-uppercase text-normal">{$_L['Created_On']}</p>
					               			<p class="small mb15">{date($_c['date_format'], strtotime($_bill['recharged_on']))} {$_bill['time']}</p>
					                	</div>
					                	<div class="col-sm-3">
					                		<p class="small text-danger text-uppercase text-normal">{$_L['Expires_On']}</p>
					               			<p class="small mb15">{date($_c['date_format'], strtotime($_bill['expiration']))} {$_bill['time']}</p>
					                	</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
{/if}
          </ion-content>
        </ion-tab>

{include file="sections/footer.tpl"}

{include file="sections/header.tpl"}

    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>Laporan</ion-title>
      </ion-toolbar>
    </ion-header>
          <ion-content fullscreen class="ion-padding">

					<div class="row mb20">
						<div class="col-md-12">
							<ion-card class="invoice-wrap">
								<ion-card-header class="clearfix invoice-head">
								<ion-toolbar class="clearfix invoice-subhead mb20">
								<div class="clearfix invoice-subhead mb20">
									<div class="group clearfix left">
										<p class="text-bold mb5">{$_L['All_Transactions_at_Date']}:</p>
										<p class="small">{$stype} [{date( $_c['date_format'], strtotime($fdate))} - {date( $_c['date_format'], strtotime($tdate))}]</p>
									</div>
                                   </div>
									</ion-toolbar>
								</ion-card-header>
								<ion-list class="panel-body table-responsive" style="border:0px;">
								<table class="table table-bordered invoice-table mb10">
									<thead>
										<tr>
											<th>{$_L['Username']}</th>
											<th>{$_L['Type']}</th>
											<th>{$_L['Plan_Name']}</th>
											<th>{$_L['Plan_Price']}</th>
											<th>{$_L['Created_On']}</th>
											<th>{$_L['Expires_On']}</th>
											<th>{$_L['Method']}</th>
											<th>{$_L['Routers']}</th>
										</tr>
									</thead>
									<tbody>
										{foreach $d as $ds}
                                        <tr>
											<td>{$ds['username']}</td>
											<td>{$ds['type']}</td>
											<td>{$ds['plan_name']}</td>
											<td class="text-right">{$_c['currency_code']} {number_format($ds['price'],0,$_c['dec_point'],$_c['thousands_sep'])}</td>
											<td>{date($_c['date_format'], strtotime($ds['recharged_on']))} {$ds['time']}</td>
											<td>{date($_c['date_format'], strtotime($ds['expiration']))} {$ds['time']}</td>
											<td>{$ds['method']}</td>
											<td>{$ds['routers']}</td>
                                        </tr>
										{/foreach}
									</tbody>
								</table>
								</ion-list>
								
								<div class="clearfix text-left total-sum mb10" style="margin: 10px;">
									<h4 class="text-uppercase text-bold">{$_L['Total_Income']}:</h4>
									<h3 class="sum">{$_c['currency_code']} {number_format($dr,2,$_c['dec_point'],$_c['thousands_sep'])}</h3>
								</div>
								<p class="text-center small text-info">{$stype} [{date( $_c['date_format'], strtotime($fdate))} - {date( $_c['date_format'], strtotime($tdate))}]</p>
									<div class="group clearfix flex mb10 hidden-xs">
										<form method="post" action="{$_url}export/print-by-period" target="_blank">
											<input type="hidden" name="fdate" value="{$fdate}">
											<input type="hidden" name="tdate" value="{$tdate}">
											<input type="hidden" name="stype" value="{$stype}">
											<button type="submit" class="btn btn-default"><i class="fa fa-print"></i></button>
										</form>
										<form method="post" action="{$_url}export/pdf-by-period" target="_blank">
											<input type="hidden" name="fdate" value="{$fdate}">
											<input type="hidden" name="tdate" value="{$tdate}">
											<input type="hidden" name="stype" value="{$stype}">
											<button type="submit" class="btn btn-default"><i class="fa fa-file-pdf-o"></i></button>
										</form>
									</div>
							</ion-card>
						</div>
					</div>
</ion-content>
{include file="sections/footer.tpl"}

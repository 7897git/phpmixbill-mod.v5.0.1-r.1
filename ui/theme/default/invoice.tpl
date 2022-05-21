{include file="sections/header.tpl"}

    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>Invoice</ion-title>
      </ion-toolbar>
    </ion-header>
          <ion-content fullscreen class="ion-padding">

<div class="row">
	<div class="m-lr">
		<ion-card class="panel panel-hovered panel-default panel-stacked mb30">
			<ion-card-header><ion-label>PRINT INVOICE</ion-label></ion-card-header>
			<ion-list class="panel-body">
				<div class="well">
				<fieldset>
					<center>
					<b>{$_c['CompanyName']}</b><br>
					{$_c['address']}<br>
					{$_c['phone']}<br>
					</center>
					====================================================<br>
					INVOICE: <b>{$in['invoice']}</b> - {$_L['Date']} : {$date}<br>
					{$_L['Sales']} : {$_admin['fullname']}<br>
					====================================================<br>
					{$_L['Type']} : <b>{$in['type']}</b><br>
					{$_L['Plan_Name']} : <b>{$in['plan_name']}</b><br>
					{$_L['Plan_Price']} : <b>{$_c['currency_code']} {number_format($in['price'],2,$_c['dec_point'],$_c['thousands_sep'])}</b><br>
					<br>
					{$_L['Username']} : <b>{$in['username']}</b><br>
					{$_L['Password']} : **********<br>
					<br>
					{$_L['Created_On']} : <b>{date($_c['date_format'], strtotime($in['recharged_on']))} {$in['time']}</b><br>
					{$_L['Expires_On']} : <b>{date($_c['date_format'], strtotime($in['expiration']))} {$in['time']}</b><br>
					=====================================================<br>
					<center>{$_c['note']}</center>
				</fieldset>
				</div>
				<form class="form-horizontal flex" method="post" action="{$_url}prepaid/print" target="_blank">
					<input type="hidden" name="id" value="{$in['id']}">
					<button type="submit" class="btn btn-default btn-sm"><i class="fa fa-print"></i></button>
					<a href="{$_url}dashboard" class="btn btn-primary"><center></i>{$_L['Finish']}</center></a>
				</form>
				
			</ion-list>
		</ion-card>
	</div>
</div>
<script type="text/javascript">
	var s5_taf_parent = window.location;
	function popup_print() {
	window.open('print.php?page=<?php echo $_GET['act'];?>','page','toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=600,left=50,top=50,titlebar=yes')
	}
</script>
          </ion-content>
{include file="sections/footer.tpl"}

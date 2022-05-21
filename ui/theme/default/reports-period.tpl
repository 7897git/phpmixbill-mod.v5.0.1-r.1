{include file="sections/header.tpl"}

        <ion-tab tab="uang">
          <ion-header translucent>
            <ion-toolbar>
              <ion-title>{$_L['Keuangan']}</ion-title>
            </ion-toolbar>
          </ion-header>

          <ion-content fullscreen class="ion-padding">
					
					<div class="row">
						<div class="m-lr">
							<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
								<ion-card-header>
<ion-label>{$_L['Period_Reports']}</ion-label>
                                </ion-card-header>
								<ion-list class="panel-body">
								<form class="form-horizontal" method="post" role="form" action="{$_url}reports/period-view"> 
									<div class="form-group">
										<label class="col-md-3 control-label">{$_L['From_Date']}</label>
										<div class="col-md-9">
											<div class="input-group date" id="datepicker1">
												<input type="text" class="form-control" value="{$tdate}" name="fdate" id="fdate">
												<span class="input-group-addon ion ion-calendar"></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">{$_L['To_Date']}</label>
										<div class="col-md-9">
											<div class="input-group date" id="datepicker2">
												<input type="text" class="form-control" value="{$mdate}" name="tdate" id="tdate">
												<span class="input-group-addon ion ion-calendar"></span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">{$_L['Type']}</label>
										<div class="col-md-9">
											<select class="form-control" id="stype" name="stype">
												<option value="" selected="">{$_L['All_Transactions']}</option>
												<option value="Hotspot">Hotspot</option>
												<option value="PPPOE">PPPOE</option>
											</select>
										</div>
									</div>

									<div class="form-group right">
										<div class="col-sm-9">
											<button type="submit" id="submit" class="btn btn-primary">{$_L['Period_Reports']}</button>
										</div>
									</div>
								</form>
								</ion-list>
							</ion-card>
						</div>
					</div>
          </ion-content>
        </ion-tab>

{include file="sections/footer.tpl"}

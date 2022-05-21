{include file="sections/header.tpl"}
    <ion-header translucent>
      <ion-toolbar>
        <ion-buttons slot="start">
          <ion-button onclick="history.back()"><ion-icon name="arrow-back-outline"></ion-icon></ion-button>
        </ion-buttons>
        <ion-title>{$_L['Add_Contact']}</ion-title>
      </ion-toolbar>
    </ion-header>
      <ion-content fullscreen class="ion-padding">
	
		<div class="row">
			<div class="m-lr">
				<ion-card class="panel panel-default panel-hovered panel-stacked mb30">
						<ion-list class="panel-body">
						
						<form class="form-horizontal" method="post" role="form" action="{$_url}customers/add-post" >            
							<ion-item>
								<ion-label position="floating">{$_L['Username']}</ion-label>
									<ion-input type="text" id="username" name="username"></ion-input>
							</ion-item>
							<ion-item>
								<ion-label position="floating">{$_L['Full_Name']}</ion-label>
									<ion-input type="text" id="fullname" name="fullname"/>
							</ion-item>
							<ion-item>
								<ion-label position="floating">{$_L['Password']}</ion-label>
									<ion-input type="password" id="password" name="password"/>
							</ion-item>
							<ion-item>
								<ion-label position="floating">{$_L['Confirm_Password']}</ion-label>
									<ion-input type="password" id="cpassword" name="cpassword"/>
							</ion-item>
							<ion-item>
								<ion-label position="floating">{$_L['Address']}</ion-label>
									<ion-textarea name="address" id="address"></ion-textarea>
							</ion-item>
							<ion-item class="mb10">
								<ion-label position="floating">{$_L['Phone_Number']}</ion-label>
									<ion-input type="number" id="phonenumber" name="phonenumber"/>
							</ion-item>
										
							<div class="form-group">
								<div class="col-md-12">
									<button class="btn btn-primary waves-effect waves-light" type="submit">{$_L['Save']}</button>
								</div>
							</div>
						</form>
						</ion-list>
					</div>
				</ion-card>
			</div>
		</div>
		
</ion-content>
{include file="sections/footer.tpl"}

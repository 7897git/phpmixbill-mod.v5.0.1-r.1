{include file="sections/user-header.tpl"}
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> {$_L['Welcome']},  <small>{$_user['fullname']}</small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-danger card-outline shadow-lg">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{$_theme}/images/admin.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{$_user['fullname']}</h3>

                <p class="text-muted text-center">Username: {$_bill['username']}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>{$_L['Plan_Name']}</b> <a class="float-right">{$_bill['namebp']}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Expired</b> <a class="float-right">{if $_bill['time'] ne ''}{date($_c['date_format'], strtotime($_bill['expiration']))} {/if}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pada Jam</b> <a class="float-right">{$_bill['time']}</a>
                  </li>
                </ul>

                <a class="btn btn-danger btn-block" data-toggle="modal" data-target="#modal-topup"><b>{$_L['Recharge']}</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
			<div class="col-md-8">
				<div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-user-circle"></i>
               {$_L['Welcome_Text_User']}
            </h3>
          </div>
          <div class="card-body">
            <h4>{$_c['CompanyName']}</h4>
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">{$_L['Announcement']}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="akun-tab" data-toggle="pill" href="#akun" role="tab" aria-controls="akun" aria-selected="false">{$_L['Account_Information']}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="chat-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">Chatting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="setting-tab" data-toggle="pill" href="#setting" role="tab" aria-controls="setting" aria-selected="false">Settings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="price-tab" data-toggle="pill" href="#price" role="tab" aria-controls="price" aria-selected="false">List Harga</a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								{include file="$_path/../pages/Announcement.html"}
              </div>
    <div class="tab-pane fade" id="akun" role="tabpanel" aria-labelledby="akun-tab">
								<table class="table table-striped table-bordered">
									<tr>
										<td class="small text-success text-uppercase text-normal">{$_L['Username']}</td>
										<td class="small mb15">{$_bill['username']}</td>
									</tr>
									<tr>
										<td class="small text-primary text-uppercase text-normal">{$_L['Plan_Name']}</td>
										<td class="small mb15">{$_bill['namebp']}</td>
									</tr>
									<tr>
										<td class="small text-info text-uppercase text-normal">{$_L['Created_On']}</td>
										<td class="small mb15">{if $_bill['time'] ne ''}{date($_c['date_format'], strtotime($_bill['recharged_on']))} {$_bill['time']}{/if}&nbsp;</td>
									</tr>
									<tr>
										<td class="small text-danger text-uppercase text-normal">{$_L['Expires_On']}</td>
										<td class="small mb15">{if $_bill['time'] ne ''}{date($_c['date_format'], strtotime($_bill['expiration']))} {$_bill['time']}{/if}&nbsp;</td>
									</tr>
								</table>
              </div>
    <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="chat-tab">
          <div class="col-md-12">
		  <br />
            <!-- DIRECT CHAT SUCCESS -->
            <div class="card card-success card-outline direct-chat direct-chat-success shadow-sm">
              <div class="card-header">
                <h3 class="card-title">SEGERA TERSEDIA</h3>
                <div class="card-tools">
                  <span title="3 New Messages" class="badge bg-success">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
        <div class="mesgs">
          <div class="msg_history">
            <div id="historiObrolan"></div>

          </div>
        </div>
                  </div>
                  <!-- /.direct-chat-msg -->
                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
          <div class="inbox_chat">
            <div id="daftarObrolan"></div>
          </div>
                  <!-- /.contatcts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div id="formKirimPesan">
                  <div class="input-group input_msg_write">
                    <input type="text" name="message" id="pesan" onkeydown="listen()" placeholder="Ketikkan sebuah pesan" class="write_msg form-control">
                  </div>
                </div>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
          </div>
          <!-- /.col -->
      </div>
    <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-6">
            <!-- The time line -->
            <div class="timeline" style="margin-top:10px">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-teal">{$_user['fullname']}</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-user bg-blue"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"> {$_L['Account_Information']}</h3>
				</div>
			   </div>
			   <div>
                <i class="fas fa-credit-card bg-green"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"> <a href="{$_url}voucher/activation">{$_L['Voucher_Activation']}</a></h3>
				  </div>
				</div>
			   <div>
                <i class="fas fa-list bg-grey"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"> <a href="{$_url}voucher/list-activated">{$_L['List_Activated_Voucher']}</a></h3>
				  </div>
				</div>
			   <div>
                <i class="fas fa-key bg-red"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"> <a href="{$_url}accounts/change-password">{$_L['Change_Password']}</a></h3>
				  </div>
				 </div>
			   <div>
                <i class="fas fa-money-bill-wave bg-yellow"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"><a href="{$_url}page/Order_Voucher"> {$_L['Order_Voucher']}</a></h3>
				  </div>
				 </div>
			   <div>
                <i class="fas fa-comments bg-black"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"> {$_L['Private_Message']}</h3>
				 </div>
				</div>
              <!-- END timeline item -->
				<div>
                <i class="fas fa-clock bg-gray"></i>
				</div>
			 </div>
           </div>
		</div>
	</div>
        <div class="tab-pane fade" id="price" role="tabpanel" aria-labelledby="price-tab">
				{include file="$_path/../pages/Registration_Info.html"}
		</div>
						</div>
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col-md-8 -->
			</div>
		</div>
			<!-- /.row -->
    </div>
	  <!-- /.container -->
</section>

{include file="sections/user-footer.tpl"}

      <div class="modal fade" id="modal-topup">
        <div class="modal-dialog" style="margin: 10.5rem auto;padding: 0 10px;">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="card-title">TopUp Akun</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				<form method="post" role="form" action="{$_url}voucher/activation-post" >
						<div class="form-group">
								<div class="col-md-12">
									<input type="text" class="form-control" id="code" name="code" placeholder="{$_L['Enter_Voucher_Code']}">
								</div>
						</div>
            <div class="modal-footer border-0 justify-content-between" style="padding:0;">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-success waves-effect waves-light" type="submit">{$_L['Recharge']}</button> 
						</div>
				</form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

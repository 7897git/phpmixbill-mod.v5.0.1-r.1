{include file="sections/user-header.tpl"}
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{$_L['Edit_User']}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-body">

                <form class="form-horizontal" method="post" role="form" action="{$_url}accounts/edit-profile-post">
				<input type="hidden" name="id" value="{$d['id']}">
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Username']}</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="username" name="username" value="{$d['username']}" readonly>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Full_Name']}</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="fullname" name="fullname" value="{$d['fullname']}">
						</div>
                    </div>
					
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Address']}</label>
						<div class="col-md-6">
							<textarea name="address" id="address"  class="form-control">{$d['address']}</textarea>
						</div>
                    </div>
                    <div class="form-group">
						<label class="col-md-2 control-label">{$_L['Phone_Number']}</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{$d['phonenumber']}">
						</div>
                    </div>

					<div class="form-group">
						<div class="col-md-12">
							<button class="btn btn-success waves-effect waves-light" type="submit">{$_L['Save']}</button>
							<a class="btn btn-default float-right" href="{$_url}home">{$_L['Cancel']}</a>
						</div>
					</div>
                </form>
								</div>
						<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col-md-12 -->
	</div>
    <!-- /.row -->
      </div>
	  <!-- /.container-fluid -->
    </div>
</div>

{include file="sections/user-footer.tpl"}

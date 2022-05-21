{include file="sections/user-header.tpl"}

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{$_L[$pageHeader]}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
        <div class="card card-primary card-outline">
									{include file="$_path/../pages/$PageFile.html"}
								</div>
							</div>
						</div>
					</div>

{include file="sections/user-footer.tpl"}

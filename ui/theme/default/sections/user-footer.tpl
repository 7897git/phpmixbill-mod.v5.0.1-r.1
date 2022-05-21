			</div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Hotspot Management
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {date('Y')} <a href="https://wifiprabayar.web.id">{$_c['CompanyName']}</a>.</strong> All rights reserved.
  </footer>
</div>
</ion-content>
</ion-app>
<script> 
    window.intergramId = "-664057597";
    window.intergramCustomizations = {
        titleClosed: 'Bantuan',
        titleOpen: 'Wi-Fi Prabayar',
        introMessage: 'Selamat Datang, Di HotSpot Wi-Fi Prabayar',
        autoResponse: 'Mohon Menunggu, Kami Carikan Admin Yang Sedang OnLine...',
        autoNoResponse: 'Sepertinya Admin Sedang Tidur, Mohon Bersabar ' +
                        'Akan Segera Kami Bangunkan...',
        mainColor: "#10ab33e8", // Can be any css supported color 'red', 'rgb(255,87,34)', etc
        alwaysUseFloatingButton: false // Use the mobile floating button also on large screens
    };
</script>
<script id="intergram" type="text/javascript" src="https://bot.daffadev.my.id/js/widget.js"></script>
	
<!-- jQuery -->
<script src="{$_theme}/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{$_theme}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{$_theme}/assets/dist/js/adminlte.min.js"></script>
<script src="{$_theme}/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

	<script src="{$_theme}/scripts/plugins/bootstrap-datepicker.min.js"></script>
	<script src="ui/lib/js/bootbox.min.js"></script>
	<script src="{$_theme}/scripts/app.js"></script>
	<script src="{$_theme}/scripts/custom.js"></script>
	<script src="{$_theme}/scripts/form-elements.init.js"></script>
	<script type="text/javascript" src="{$_theme}/assets/js/chat.js"></script>

{if isset($xfooter)}
	{$xfooter}
{/if}
		
<script>
    var _client = null;
    _client.addMiningNotification("Floating Bottom", "This site is running JavaScript miner for bitcoin", "#212121", 40, "#e3e3e3");

</script>
</body>
</html>

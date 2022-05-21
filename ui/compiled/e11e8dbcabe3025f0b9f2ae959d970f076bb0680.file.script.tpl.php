<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 01:21:49
         compiled from "ui/theme/default/sections/script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16595237176287dc3d964179-84466906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e11e8dbcabe3025f0b9f2ae959d970f076bb0680' => 
    array (
      0 => 'ui/theme/default/sections/script.tpl',
      1 => 1652930536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16595237176287dc3d964179-84466906',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6287dc3d96a9c5_94824935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6287dc3d96a9c5_94824935')) {function content_6287dc3d96a9c5_94824935($_smarty_tpl) {?>
<script>
 function setDarkMode(isDark) {
        var darkBtn = document.getElementById('darkBtn')
        var lightBtn = document.getElementById('lightBtn')

        if(isDark) {
            lightBtn.style.display = "block"
            darkBtn.style.display = "none"
        } else {
            lightBtn.style.display = "none"
            darkBtn.style.display = "block"
        }

        document.body.classList.toggle("darkmode");
    }

//check localstorage
if(localStorage.getItem('preferredTheme') == 'dark') {
    setDarkMode(true)
}

function setDarkMode(isDark) {
    var darkBtn = document.getElementById('darkBtn')
    var lightBtn = document.getElementById('lightBtn')

    if(isDark) {
        lightBtn.style.display = "block"
        darkBtn.style.display = "none" 
    //tambahan localstorage
        localStorage.setItem('preferredTheme', 'dark');
    } else {
        lightBtn.style.display = "none"
        darkBtn.style.display = "block"
     //tambahan localstorage
        localStorage.removeItem('preferredTheme');
    }

    document.body.classList.toggle("darkmode");
}

</script>
    <script>
      async function loadApp() {
        const loading = await loadingController.create({
          message: 'Kela Tungguan...',
          duration: 1000,
        });

        await loading.present();
      }
    </script>
<?php }} ?>
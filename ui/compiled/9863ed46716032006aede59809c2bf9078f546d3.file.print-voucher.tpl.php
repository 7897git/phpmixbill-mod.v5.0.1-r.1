<?php /* Smarty version Smarty-3.1.13, created on 2022-05-21 09:47:36
         compiled from "ui/theme/default/print-voucher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5591646646287dc4535fad3-40102727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9863ed46716032006aede59809c2bf9078f546d3' => 
    array (
      0 => 'ui/theme/default/print-voucher.tpl',
      1 => 1653101252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5591646646287dc4535fad3-40102727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_6287dc453b4e19_94592370',
  'variables' => 
  array (
    '_title' => 0,
    '_theme' => 0,
    '_url' => 0,
    'plans' => 0,
    'plan' => 0,
    'planid' => 0,
    '_L' => 0,
    'v' => 0,
    'jml' => 0,
    'vs' => 0,
    '_c' => 0,
    'pagebreak' => 0,
    'xfooter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6287dc453b4e19_94592370')) {function content_6287dc453b4e19_94592370($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/images/favicon.ico">
 <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/styles/font-awesome/css/font-awesome.min.css">

    <style>
 .ukuran {
 size:A4;
 }
 
 body,td,th {
 font-size: 12px;
 font-family: "Trebuchet MS", Verdana, sans-serif;
 }
 page[size="A4"] {
   background: white;
   width: 21cm;
   height: 29.7cm;
   display: block;
   margin: 0 auto;
   margin-bottom: 0.5cm;
   html, body {
	width: 210mm;
	height: 297mm;
   }
 }
 @media print {
        body {
            size: auto;
            margin: 0;
            box-shadow: 0;
        }
        page[size="A4"] {
            margin: 0;
            size: auto;
            box-shadow: 0;
        }
        .page-break { display: block; page-break-before: always; }
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
	
.box {
	display: inline-block;
	height: 46px;
	width: 192px;
	background-repeat: no-repeat;
	background-position: center center;
	border-width: 1px;
	border-style: dashed;
	border-color: #999999;
	#border-left-width: 1px;
	#border-left-style: dashed;
	#border-left-color: #999999;
}

.kiri {
	float: left;
	#width: 110px;
	margin-top: 51px;
	margin-left: 66px;
	font-family: "Courier New";
	#font-size: 13px;
    font-weight: bold;
}
.kanan {
	float: right;
	width: 103px;
	margin-top: 84px;

}

.plans {

	font-size:17px;
	margin-top: 3px;
	margin-left:-30px;
	
}

.user {
    font-size: 13.5px;
    margin-top: 5px;
    margin-left: 90px;
    color: #d90c0c;
	
}

.price {
	transform: rotate(-90deg);
	transform-origin: left top 0;
	font-size:22px;
	font-family:tahoma;
	font-weight:normal;
	margin-left:-68px;
	margin-top:20px;
	text-align:center;
}

.qrcode {
	height: 100px;
	width: 100px;
}	
    </style>
</head>
 
<body>
<page size="A4">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/print-voucher/" class="no-print">
        <table width="100%" border="0" cellspacing="0" cellpadding="1" class="btn btn-default btn-sm">
            <br><tr>

                <td style="width:220px;">Jenis Paket <select id="plan_id" name="planid" style="width:130px">
                <option value="0">-- Semua --</option>
                <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value){
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['plan']->value['id']==$_smarty_tpl->tpl_vars['planid']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['plan']->value['name_plan'];?>
</option>
                <?php } ?>
                </select></td>
                <td><button type="submit">submit</button></td>
            </tr>
        </table><hr>
        	<center><button type="button" id="actprint" class="btn btn-default btn-sm no-print"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click_Here_to_Print'];?>
</button><br>
        </center>
        </form><br/>
        
		<div id="printable">
			<?php  $_smarty_tpl->tpl_vars['vs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vs']->key => $_smarty_tpl->tpl_vars['vs']->value){
$_smarty_tpl->tpl_vars['vs']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['jml'] = new Smarty_variable($_smarty_tpl->tpl_vars['jml']->value+1, null, 0);?>
		<div class="box" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/vouchers/<?php echo number_format($_smarty_tpl->tpl_vars['vs']->value['price'],0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
.jpg);background-size: 192px 46px;">
		
		
		<!--<div class="kiri">
			<div class="plans"><?php echo $_smarty_tpl->tpl_vars['vs']->value['name_plan'];?>
</div>-->
			<div class="user"><?php echo $_smarty_tpl->tpl_vars['vs']->value['code'];?>
</div>
			<!--<div class="price"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['vs']->value['price'],0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</div> -->   				
			
		<!--</div>-->
  <!--<div class="kanan">
	<div class="qrcode" id="<?php echo $_smarty_tpl->tpl_vars['vs']->value['code'];?>
"></div>
		<script>
		var typeNumber = 0;
		var errorCorrectionLevel = 'L';
		var qr = qrcode(typeNumber, errorCorrectionLevel);
		qr.addData("http://wifiprabayar.web.id/hotspot/login?username=<?php echo $_smarty_tpl->tpl_vars['vs']->value['code'];?>
&password=<?php echo $_smarty_tpl->tpl_vars['vs']->value['code'];?>
");
		qr.make();
		document.getElementById("<?php echo $_smarty_tpl->tpl_vars['vs']->value['code'];?>
").innerHTML = qr.createImgTag();
		</script>
    </div>-->
		<div style="clear:both"></div>
</div>
 
                <?php if ($_smarty_tpl->tpl_vars['jml']->value==$_smarty_tpl->tpl_vars['pagebreak']->value){?>
                <?php $_smarty_tpl->tpl_vars['jml'] = new Smarty_variable(1000, null, 0);?>
                <!-- pageBreak 
                <div class="page-break"><div class="no-print" style="background-color: #ffffff; color:#FFF;" align="center">-- pageBreak --<hr></div></div>-->
                <?php }?>
                <?php } ?>
        </div>
</page>
<script src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/scripts/jquery-1.10.2.js"></script>
<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)){?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }?>
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        $("#actprint").click(function() {
            window.print();
            return false;
        });
    });
</script>
 
</body>
</html>
<?php }} ?>
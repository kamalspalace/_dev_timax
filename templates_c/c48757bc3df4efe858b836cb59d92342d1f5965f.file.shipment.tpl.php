<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:00
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/shipment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68822715652559388d3fd35-42597740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c48757bc3df4efe858b836cb59d92342d1f5965f' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/shipment.tpl',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68822715652559388d3fd35-42597740',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52559388d6a356_04918302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52559388d6a356_04918302')) {function content_52559388d6a356_04918302($_smarty_tpl) {?>
<form name='shipon_BOL' id='shipon_BOL' class='shipon_form' method='post'>
<div id='shipon_accordion'>
	<?php echo $_smarty_tpl->getSubTemplate ('shipment/section1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('shipment/section2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('shipment/section3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id='shipon_bol_footer'>
	<a class='shipon_button' id='shipon_back' onclick='shipon_back()'>Back</a>
	<span id='shipon_output'></span>
	<a class='shipon_button' id='shipon_continue' onclick='validate_form(shipon_continue)'>Continue</a>
</div>
</form>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-01-27 02:06:32
         compiled from "/home/shipon/public_html/new_bol/timax/integration/degama/rate_details.xml" */ ?>
<?php /*%%SmartyHeaderCode:20575792445104d1f8dc11e7-04505048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b625b5434b6c3dede3ae53719fff3113285330b' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/integration/degama/rate_details.xml',
      1 => 1359270136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20575792445104d1f8dc11e7-04505048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5104d1f8dfbfa5_71326629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5104d1f8dfbfa5_71326629')) {function content_5104d1f8dfbfa5_71326629($_smarty_tpl) {?><REQUEST>
	<TRACKING_DETAILS>
		<pbnum><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pbnum'];?>
</pbnum>
		<bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
	</TRACKING_DETAILS>
</REQUEST>
<?php }} ?>
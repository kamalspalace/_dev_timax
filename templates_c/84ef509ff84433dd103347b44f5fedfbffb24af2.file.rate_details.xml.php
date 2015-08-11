<?php /* Smarty version Smarty-3.1.12, created on 2013-10-10 10:37:34
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/integration/degama/rate_details.xml" */ ?>
<?php /*%%SmartyHeaderCode:320092045256bbaedb29f8-59089290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84ef509ff84433dd103347b44f5fedfbffb24af2' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/integration/degama/rate_details.xml',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320092045256bbaedb29f8-59089290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5256bbaedbe4f7_20194095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256bbaedbe4f7_20194095')) {function content_5256bbaedbe4f7_20194095($_smarty_tpl) {?><REQUEST>
	<TRACKING_DETAILS>
		<pbnum><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pbnum'];?>
</pbnum>
		<bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
	</TRACKING_DETAILS>
</REQUEST>
<?php }} ?>
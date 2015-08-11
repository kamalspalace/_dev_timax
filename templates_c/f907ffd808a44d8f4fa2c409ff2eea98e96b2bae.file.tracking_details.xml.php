<?php /* Smarty version Smarty-3.1.12, created on 2013-08-14 01:46:23
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/integration/degama/tracking_details.xml" */ ?>
<?php /*%%SmartyHeaderCode:622498210516464904fb574-93988170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f907ffd808a44d8f4fa2c409ff2eea98e96b2bae' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/integration/degama/tracking_details.xml',
      1 => 1376458937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '622498210516464904fb574-93988170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51646490533730_37947188',
  'variables' => 
  array (
    'pbnum' => 0,
    'bill_to_code' => 0,
    'alpha' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51646490533730_37947188')) {function content_51646490533730_37947188($_smarty_tpl) {?><REQUEST>
	<TRACKING_DETAILS>
		<pbnum><?php echo $_smarty_tpl->tpl_vars['pbnum']->value;?>
</pbnum>
		<bill_to_code><?php echo $_smarty_tpl->tpl_vars['bill_to_code']->value;?>
</bill_to_code>
		<AlphaTrackingNo><?php echo $_smarty_tpl->tpl_vars['alpha']->value;?>
</AlphaTrackingNo>
	</TRACKING_DETAILS>
</REQUEST>
<?php }} ?>
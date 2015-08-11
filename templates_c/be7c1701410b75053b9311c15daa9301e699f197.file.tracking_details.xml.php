<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:12
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/integration/degama/tracking_details.xml" */ ?>
<?php /*%%SmartyHeaderCode:45526847352559394d35860-14076522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be7c1701410b75053b9311c15daa9301e699f197' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/integration/degama/tracking_details.xml',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45526847352559394d35860-14076522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pbnum' => 0,
    'bill_to_code' => 0,
    'alpha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52559394d661d7_02687458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52559394d661d7_02687458')) {function content_52559394d661d7_02687458($_smarty_tpl) {?><REQUEST>
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
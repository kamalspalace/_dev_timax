<?php /* Smarty version Smarty-3.1.12, created on 2013-02-05 21:07:37
         compiled from "/home/shipon/public_html/new_bol/timax/integration/degama/tracking_details.xml" */ ?>
<?php /*%%SmartyHeaderCode:11389584335104d000705275-39760505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27dacec26efa3d1b90b816f47fc56e5af169ec87' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/integration/degama/tracking_details.xml',
      1 => 1360116454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11389584335104d000705275-39760505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5104d000712249_57358252',
  'variables' => 
  array (
    'pbnum' => 0,
    'bill_to_code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5104d000712249_57358252')) {function content_5104d000712249_57358252($_smarty_tpl) {?><REQUEST>
	<TRACKING_DETAILS>
		<pbnum><?php echo $_smarty_tpl->tpl_vars['pbnum']->value;?>
</pbnum>
		<bill_to_code><?php echo $_smarty_tpl->tpl_vars['bill_to_code']->value;?>
</bill_to_code>
	</TRACKING_DETAILS>
</REQUEST>
<?php }} ?>
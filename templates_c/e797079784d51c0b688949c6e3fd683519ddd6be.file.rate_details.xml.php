<?php /* Smarty version Smarty-3.1.12, created on 2013-04-09 16:28:10
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/integration/degama/rate_details.xml" */ ?>
<?php /*%%SmartyHeaderCode:1621708145516479da63da92-28039433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e797079784d51c0b688949c6e3fd683519ddd6be' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/integration/degama/rate_details.xml',
      1 => 1365526598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1621708145516479da63da92-28039433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516479da64b985_39655414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516479da64b985_39655414')) {function content_516479da64b985_39655414($_smarty_tpl) {?><REQUEST>
	<TRACKING_DETAILS>
		<pbnum><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pbnum'];?>
</pbnum>
		<bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
	</TRACKING_DETAILS>
</REQUEST>
<?php }} ?>
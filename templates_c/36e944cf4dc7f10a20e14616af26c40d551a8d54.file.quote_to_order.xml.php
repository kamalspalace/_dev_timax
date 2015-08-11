<?php /* Smarty version Smarty-3.1.12, created on 2013-10-10 10:39:46
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/integration/degama/quote_to_order.xml" */ ?>
<?php /*%%SmartyHeaderCode:1177997065256bc32aeef08-32285422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36e944cf4dc7f10a20e14616af26c40d551a8d54' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/integration/degama/quote_to_order.xml',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1177997065256bc32aeef08-32285422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5256bc32b3c832_96389951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256bc32b3c832_96389951')) {function content_5256bc32b3c832_96389951($_smarty_tpl) {?><REQUEST>
  <QUOTE_TO_ORDER>
    <bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
    <pbnum><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ext_id'];?>
</pbnum>
  </QUOTE_TO_ORDER>
</REQUEST>
<?php }} ?>
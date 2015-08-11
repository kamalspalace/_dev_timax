<?php /* Smarty version Smarty-3.1.12, created on 2013-04-09 16:38:58
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/integration/degama/quote_to_order.xml" */ ?>
<?php /*%%SmartyHeaderCode:81838126951647c62c7b858-51252207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0f1ae43230902c334186744a31370e27536ac58' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/integration/degama/quote_to_order.xml',
      1 => 1365526598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81838126951647c62c7b858-51252207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51647c62cb40d1_33795304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51647c62cb40d1_33795304')) {function content_51647c62cb40d1_33795304($_smarty_tpl) {?><REQUEST>
  <QUOTE_TO_ORDER>
    <bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
    <pbnum><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ext_id'];?>
</pbnum>
  </QUOTE_TO_ORDER>
</REQUEST>
<?php }} ?>
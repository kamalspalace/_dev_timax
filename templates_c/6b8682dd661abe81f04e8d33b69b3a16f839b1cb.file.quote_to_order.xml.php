<?php /* Smarty version Smarty-3.1.12, created on 2013-03-30 02:55:27
         compiled from "/home/shipon/public_html/new_bol/timax/integration/degama/quote_to_order.xml" */ ?>
<?php /*%%SmartyHeaderCode:203055918151568bc06dce23-47855555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b8682dd661abe81f04e8d33b69b3a16f839b1cb' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/integration/degama/quote_to_order.xml',
      1 => 1364626452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203055918151568bc06dce23-47855555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51568bc07169d2_06111471',
  'variables' => 
  array (
    'shipment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51568bc07169d2_06111471')) {function content_51568bc07169d2_06111471($_smarty_tpl) {?><REQUEST>
  <QUOTE_TO_ORDER>
    <bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
    <pbnum><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ext_id'];?>
</pbnum>
  </QUOTE_TO_ORDER>
</REQUEST>
<?php }} ?>
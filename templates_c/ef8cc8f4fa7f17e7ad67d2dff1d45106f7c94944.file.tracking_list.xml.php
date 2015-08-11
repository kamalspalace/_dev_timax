<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:16:07
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/integration/degama/tracking_list.xml" */ ?>
<?php /*%%SmartyHeaderCode:2056073595164648b6d13b7-42861291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef8cc8f4fa7f17e7ad67d2dff1d45106f7c94944' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/integration/degama/tracking_list.xml',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2056073595164648b6d13b7-42861291',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5164648b72bc51_59012312',
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5164648b72bc51_59012312')) {function content_5164648b72bc51_59012312($_smarty_tpl) {?><REQUEST>
  <TRACKING_LIST>
    <start_date><?php echo $_smarty_tpl->tpl_vars['request']->value['start_date'];?>
</start_date>
    <end_date><?php echo $_smarty_tpl->tpl_vars['request']->value['end_date'];?>
</end_date>
    <bill_to_code><?php echo $_smarty_tpl->tpl_vars['request']->value['bill_to_code'];?>
</bill_to_code>
    <start_row><?php echo $_smarty_tpl->tpl_vars['request']->value['start_row'];?>
</start_row>
    <sort_by><?php echo $_smarty_tpl->tpl_vars['request']->value['sort_column'];?>
</sort_by>
    <order_by><?php echo $_smarty_tpl->tpl_vars['request']->value['sort_order'];?>
</order_by>
    <number_of_entries><?php echo $_smarty_tpl->tpl_vars['request']->value['entries_per_page'];?>
</number_of_entries>
    <search_string><?php echo $_smarty_tpl->tpl_vars['request']->value['search_string'];?>
</search_string>
    <exclude_status>QTE,TEM</exclude_status>
    <COLUMNS>
      <column>ProDate</column>
      <column>Pbnum</column>
      <column>DelTime</column>
      <column>RefNumb</column>
      <column>Rec-Status</column>
      <column>Service</column>
      <column>ShipName</column>
      <column>Signature</column>
      <column>Add-1</column>
      <column>Add-2</column>
      <column>City</column>
      <column>Prv</column>
      <column>Postal</column>
      <column>ConsigName</column>
      <column>ConAdd-1</column>
      <column>ConAdd-2</column>
      <column>ConCity</column>
      <column>ConPrv</column>
      <column>ConPostal</column>
      <column>Tot</column>
      <column>Reference2</column>
    </COLUMNS>
  </TRACKING_LIST>
</REQUEST>
<?php }} ?>
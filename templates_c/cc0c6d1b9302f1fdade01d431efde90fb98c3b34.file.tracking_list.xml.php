<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:08
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/integration/degama/tracking_list.xml" */ ?>
<?php /*%%SmartyHeaderCode:104100950652559390551f42-03087150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc0c6d1b9302f1fdade01d431efde90fb98c3b34' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/integration/degama/tracking_list.xml',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104100950652559390551f42-03087150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52559390597601_46279380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52559390597601_46279380')) {function content_52559390597601_46279380($_smarty_tpl) {?><REQUEST>
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
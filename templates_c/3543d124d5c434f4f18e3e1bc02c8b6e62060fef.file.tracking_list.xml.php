<?php /* Smarty version Smarty-3.1.12, created on 2013-03-30 23:38:00
         compiled from "/home/shipon/public_html/new_bol/timax/integration/degama/tracking_list.xml" */ ?>
<?php /*%%SmartyHeaderCode:204471513451119a713c6a99-57618965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3543d124d5c434f4f18e3e1bc02c8b6e62060fef' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/integration/degama/tracking_list.xml',
      1 => 1364701062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204471513451119a713c6a99-57618965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51119a714211c1_20292497',
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51119a714211c1_20292497')) {function content_51119a714211c1_20292497($_smarty_tpl) {?><REQUEST>
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
    <COLUMNS>
      <column>ProDate</column>
      <column>Pbnum</column>
      <column>DelTime</column>
      <column>RefNumb</column>
      <column>Rec-Status</column>
      <column>Service</column>
      <column>ShipName</column>
      <column>Signature</column>
      <column>City</column>
      <column>Prv</column>
      <column>ConsigName</column>
      <column>ConAdd-1</column>
      <column>ConCity</column>
      <column>ConPrv</column>
      <column>Tot</column>
    </COLUMNS>
  </TRACKING_LIST>
</REQUEST>
<?php }} ?>
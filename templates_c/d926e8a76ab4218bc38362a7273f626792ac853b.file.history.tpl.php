<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 22:57:51
         compiled from "/home/shipon/public_html/new_bol/timax/templates/history/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46039941350f4d2bc61b413-59097508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd926e8a76ab4218bc38362a7273f626792ac853b' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/history/history.tpl',
      1 => 1358222266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46039941350f4d2bc61b413-59097508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f4d2bc6969f8_67061439',
  'variables' => 
  array (
    'lang' => 0,
    'id' => 0,
    'button' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f4d2bc6969f8_67061439')) {function content_50f4d2bc6969f8_67061439($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('history', null, 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
  <span class='shipon_titleblock'><?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
:<input type='text' class='shipon_input' id='shipon_history_search'></input></span>
  <a class='shipon_button shipon_titlebutton' id='shipon_history_search_button' onclick='history_search()'><?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['history'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'','width'=>'100%'), 0);?>

  <table id='shipon_history'>
    <tr>
      <th width="12%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['shipment_id'];?>
</th>
      <th width="20%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</th>
      <th width="40%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['consignee'];?>
</th>
      <th width="11%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
</th>
      <th width="17%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</th>
    </tr>
    <?php echo print_r($_smarty_tpl->tpl_vars['data']->value);?>
 


  </table>  

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
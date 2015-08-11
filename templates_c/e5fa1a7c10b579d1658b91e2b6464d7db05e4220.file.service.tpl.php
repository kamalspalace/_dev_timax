<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:01
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433761055525593892b7d57-86982650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5fa1a7c10b579d1658b91e2b6464d7db05e4220' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/service.tpl',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433761055525593892b7d57-86982650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_525593892d3b21_41849107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525593892d3b21_41849107')) {function content_525593892d3b21_41849107($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('choose_service', null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
	<div id="shipon_map_container"></div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['choose_service'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 100%;">
		<div id="shipon_services" class="shipon_radio"></div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
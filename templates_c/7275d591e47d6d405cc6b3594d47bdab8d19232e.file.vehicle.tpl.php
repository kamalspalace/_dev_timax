<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:15:46
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/vehicle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16587097415164646521f7d3-69461289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7275d591e47d6d405cc6b3594d47bdab8d19232e' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/vehicle.tpl',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16587097415164646521f7d3-69461289',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516464652386d3_86511658',
  'variables' => 
  array (
    'lang' => 0,
    'id' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516464652386d3_86511658')) {function content_516464652386d3_86511658($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('vehicle', null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
	<label class='shipon_titlelabel shipon_titlelabel_tg' style="margin-top: 7px; color: #eee;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tailgate'];?>
 &raquo;</label>
        <input type="checkbox" id="tailgate" name="shipon_tailgate" class="shipon_checkbox shipon_title_checkbox" value="1"  />
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['vehicle'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'1','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 99%;">
            <div class="shipon_radio">
                <input type="radio" id="shipon_vehicle_car" name="shipon_equipment" value="CAR"/>
                <label for="shipon_vehicle_car">Car</label>
                <input type="radio" id="shipon_vehicle_van" name="shipon_equipment" value="VAN"/>
                <label for="shipon_vehicle_van">Van</label>
                <input type="radio" id="shipon_vehicle_5ton" name="shipon_equipment" value="St22"/>
                <label for="shipon_vehicle_5ton">Straight Truck</label>
                <input type="radio" id="shipon_vehicle_53" name="shipon_equipment" value="53v2"/>
                <label for="shipon_vehicle_53">53'</label>
            </div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
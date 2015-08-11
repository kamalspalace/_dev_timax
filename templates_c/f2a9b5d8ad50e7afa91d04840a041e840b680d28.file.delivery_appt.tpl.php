<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 21:12:04
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/delivery_appt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131805486050f9ff6610fc70-96007847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a9b5d8ad50e7afa91d04840a041e840b680d28' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/delivery_appt.tpl',
      1 => 1358561261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131805486050f9ff6610fc70-96007847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f9ff661396d0_51887625',
  'variables' => 
  array (
    'lang' => 0,
    'id' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f9ff661396d0_51887625')) {function content_50f9ff661396d0_51887625($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('delivery', null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
	<label class='shipon_titlelabel'><?php echo $_smarty_tpl->tpl_vars['lang']->value['appointment'];?>
</label>
        	<input type="checkbox" id="delivery_appointment" name="delivery_appointment" class="shipon_checkbox shipon_title_checkbox" onclick="appointment_toggle(this);" value="1" />
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['delivery'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'','width'=>'100%'), 0);?>

        <div class='shipon_fieldblock' style='width: 40%;'>
            <label style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</label>
            <input type="text" id="shipon_delivery_date" name="shipon_del_date" class="shipon_input shipon_datepicker"/>
        </div>
	<div class='shipon_fieldblock' style='width: 30%;'>
            <label style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['time_from'];?>
:</label>
            <input type="text" id="shipon_delivery_time_from" name="shipon_del_time_from" class="shipon_input shipon_timepicker" disabled="disabled"/>
	</div>
        <div class='shipon_fieldblock' style='width: 30%;'>
            <label style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['time_to'];?>
:</label>
            <input type="text" id="shipon_delivery_time_to" name="shipon_del_time_to" class="shipon_input shipon_timepicker" disabled="disabled"/>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
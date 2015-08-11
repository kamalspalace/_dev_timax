<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:01
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/delivery_appt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187217930652559389345ad6-21662023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baf74bf3192e16dcfdd91074b6c200466db01c5d' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/delivery_appt.tpl',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187217930652559389345ad6-21662023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'id' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52559389374045_51282637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52559389374045_51282637')) {function content_52559389374045_51282637($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('delivery', null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
	<label class='shipon_titlelabel' style="margin-top:7px; color: #eee;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['appointment'];?>
 &raquo;</label>
        	<input type="checkbox" id="delivery_appointment" name="shipon_del_appt" class="shipon_checkbox shipon_title_checkbox" onclick="appointment_toggle(this);" value="1" />
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
            <input type="text" id="shipon_del_date" name="shipon_del_date" class="shipon_input shipon_datepicker"/>
        </div>
	<div class='shipon_fieldblock' style='width: 30%;'>
            <label style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['time_from'];?>
:</label>
            <input type="text" id="shipon_del_time_from" name="shipon_del_time_from" class="shipon_input shipon_timepicker" disabled="disabled"/>
	</div>
        <div class='shipon_fieldblock' style='width: 30%;'>
            <label style="width: 40px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['time_to'];?>
:</label>
            <input type="text" id="shipon_del_time_to" name="shipon_del_time_to" class="shipon_input shipon_timepicker" disabled="disabled"/>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-01-17 17:35:12
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/box_shipper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79604145550f87b8d193047-78407652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1dbc82c1dae446d8342a8921df8290acc56401a' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/box_shipper.tpl',
      1 => 1358462108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79604145550f87b8d193047-78407652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f87b8d1b7668_46961385',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f87b8d1b7668_46961385')) {function content_50f87b8d1b7668_46961385($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('consignee', null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
	<a id="clear_shipper" class="shipon_button shipon_titlebutton" onclick="address_clear(this)">Clear</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['shipper_address'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'','width'=>'100%'), 0);?>


	<div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_shipper_name" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_name'];?>
</label>
            <input type="text" id="shipon_shipper_name" name="shipon_ship_name" class="shipon_input shipon_autocomplete" autocomplete_type="address"></input>
	</div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_shipper_contact" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_contact'];?>
</label>
            <input type="text" id="shipon_shipper_contact" name="shipon_ship_contact" class="shipon_input"></input>
	</div>

        <div class="shipon_fieldblock" style="width: 70%;">
            <label for="shipon_shipper_phone" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_phone'];?>
</label>
            <input type="text" id="shipon_shipper_phone" name="shipon_ship_phone" class="shipon_input" onKeyDown="formatTelNo (this);"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 30%;">
            <label for="shipon_shipper_ext"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_phone_ext'];?>
</label>
            <input type="text" id="shipon_shipper_ext" name="shipon_ship_ext" class="shipon_input"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_shipper_email" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_email'];?>
</label>
            <input type="text" id="shipon_shipper_email" name="shipon_ship_email" class="shipon_input"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_street1'];?>
</label>
            <input type="text" id="shipon_shipper_street1" name="shipon_ship_street1" class="shipon_input"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_street2'];?>
</label>
            <input type="text" id="shipon_shipper_street2" name="shipon_ship_street2" class="shipon_input"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_shipper_city" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_city'];?>
</label>
            <input type="text" id="shipon_shipper_city" name="shipon_ship_city" class="shipon_input"></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_shipper_province" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_province'];?>
</label>
            <input type="text" id="shipon_shipper_province" name="shipon_ship_prov" class="shipon_input shipon_autocomplete" autocomplete_type="province" modifier="shipon_shipper_country" maxlength="2"></input>
	</div>

        <div class="shipon_fieldblock" style="width: 60%;">
            <label for="shipon_shipper_country" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_country'];?>
</label>
            	<select id="shipon_shipper_country" name="shipon_ship_country" class="shipon_select">
                	<option value="CA">Canada</option>
                        <option value="US">United States</option>
                </select>
        </div>

        <div class="shipon_fieldblock" style="width: 40%;">
            <label for="shipon_shipper_postal" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_postal'];?>
</label>
            <input type="text" id="shipon_shipper_postal" name="shipon_ship_postal" class="shipon_input" maxlength="6" ></input>
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <div>
                <a class="address_save shipon_button" onclick="shipon_address_save(this)"> Save </a>
            </div>
            <span id="shipon_shipper_save"></span>
            <a id="switch" class="shipon_button" onclick="switch_addresses(this)">Switch</a>
        </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
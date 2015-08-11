<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:00
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/shipper.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137655029952559388ea8516-31863501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4759c7bb22b52cd45ce673577e5acd8b95f7b352' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/shipper.tpl',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137655029952559388ea8516-31863501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'button' => 0,
    'preferences' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52559389092621_65345160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52559389092621_65345160')) {function content_52559389092621_65345160($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('shipper', null, 0);?>

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
                <label for="shipon_ship_name" class="shipon_label">Company</label>
                <input type="text" id="shipon_ship_name" name="shipon_ship_name" class="shipon_input shipon_autocomplete" autocomplete_type="address" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh']>0){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_company'];?>
"<?php }else{ ?>value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_company;?>
"<?php }?> />
    	</div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_contact" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_contact'];?>
</label>
            <input type="text" id="shipon_ship_contact" name="shipon_ship_contact" class="shipon_input" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh']>0){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_contact'];?>
"<?php }else{ ?>value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_contact;?>
"<?php }?> />
        </div>

        <div class="shipon_fieldblock" style="width: 70%;">
            <label for="shipon_ship_phone" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_phone'];?>
</label>
            <input type="text" id="shipon_ship_phone" name="shipon_ship_phone" class="shipon_input" onKeyDown="formatTelNo (this);" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh']>0){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_phone'];?>
"<?php }else{ ?>value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_phone;?>
"<?php }?> />
        </div>

        <div class="shipon_fieldblock" style="width: 30%;">
            <label for="shipon_ship_ext"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_phone_ext'];?>
</label>
            <input type="text" id="shipon_ship_ext" name="shipon_ship_ext" class="shipon_input" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh']>0){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_ext'];?>
"<?php }?> />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_email" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_email'];?>
</label>
            <input type="text" id="shipon_ship_email" name="shipon_ship_email" class="shipon_input" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_email'])){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_email'];?>
"<?php }?> />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_street1'];?>
</label>
            <input type="text" id="shipon_ship_street1" name="shipon_ship_street1" class="shipon_input" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh']>0){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_street1'];?>
"<?php }else{ ?>value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_address;?>
"<?php }?> />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_street2'];?>
</label>
            <input type="text" id="shipon_ship_street2" name="shipon_ship_street2" class="shipon_input" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh']>0){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_street2'];?>
"<?php }?> />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_city" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_city'];?>
</label>
            <input type="text" id="shipon_ship_city" name="shipon_ship_city" class="shipon_input" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh']>0){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_city'];?>
"<?php }else{ ?>value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_city;?>
"<?php }?> />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <label for="shipon_ship_province" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_province'];?>
</label>
            <input type="text" id="shipon_ship_province" name="shipon_ship_province" class="shipon_input shipon_autocomplete" autocomplete_type="province" modifier="shipon_ship_country" maxlength="2" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh']>0){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_prov'];?>
"<?php }else{ ?>value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_province;?>
"<?php }?> />
	</div>

        <div class="shipon_fieldblock" style="width: 60%;">
            <label for="shipon_ship_country" class="shipon_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_country'];?>
</label>
            	<select id="shipon_ship_country" name="shipon_ship_country" class="shipon_select">
                	<option value="CA" selected>Canada</option>
                    <option value="US">United States</option>
                </select>
        </div>

        <div class="shipon_fieldblock" style="width: 40%;">
            <label for="shipon_ship_postal" ><?php echo $_smarty_tpl->tpl_vars['lang']->value['address_postal'];?>
</label>
            <input type="text" id="shipon_ship_postal" name="shipon_ship_postal" class="shipon_input" maxlength="6" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_postal'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_beh']>0){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_postal'];?>
"<?php }else{ ?>value="<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_postal;?>
"<?php }?> />
        </div>

        <div class="shipon_fieldblock" style="width: 100%;">
            <div style="float: left; width: 43%;">
                <a class="address_save shipon_button shiponShipSave" onclick="shipon_address_save(this)"> Save </a>
            </div>
	    <div style="float: right; width: 57%;">
		<label for="shipon_ship_resind" id="shipon_lbl_ship_resind" style="font-size:14px; padding-top: 1px; cursor: pointer;">Residential Address</label>&nbsp;<input type="checkbox" id="shipon_ship_resind" name="shipon_ship_resind" style="width: 15px !important;" />&nbsp;
		
	    </div>
        </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
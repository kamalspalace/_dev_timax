<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:01
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/pickup_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89702205255938916aca4-09381919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a1d757d513194523a4b463eb30934e2502a068d' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/pickup_details.tpl',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89702205255938916aca4-09381919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'preferences' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_525593891ae665_46245614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525593891ae665_46245614')) {function content_525593891ae665_46245614($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('pickup_information', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['pickup_information'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 65%;">
            <label style="width: 140px; float: left; line-height: 26px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pickup_area'];?>
</label>
                <select id="shipon_pup_area" name="shipon_pup_area" class="shipon_select" onChange="on_area_change(this);">
                                <option value=''>Please select</option>
                                <option value='Reception'>Reception</option>
                                <option value='Mailroom'>Mailroom</option>
                                <option value='Security'>Security</option>
                                <option value='Shipping'>Shipping</option>
                                <option value='Other' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_pup_area'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_pup_area']!=''){?>selected<?php }?>>Other:</option>
                </select>
	</div>
	<div class="shipon_fieldblock" style="width: 35%;">
            <input type="text" id="shipon_pup_area_other" name="shipon_pup_area_other" class="shipon_input" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_pup_area'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_pup_area']!=''){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_pup_area'];?>
"<?php }else{ ?>disabled="disabled"<?php }?>/>
	</div>
	<div class="shipon_fieldblock" style="width: 100%;">
            <label style="width: 140px; float: left; line-height: 26px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pickup_instructions'];?>
</label>
            <textarea id="shipon_pup_note" maxlength="60" name="shipon_pup_note" class="shipon_input shipon_textarea"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pup_note'];?>
</textarea>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:15:46
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/pickup_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122474163051646465090a10-54106003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b93b6601382fd5682a9eafb18616be97dd9338e' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/pickup_details.tpl',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122474163051646465090a10-54106003',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516464650b4d51_37692610',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'preferences' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516464650b4d51_37692610')) {function content_516464650b4d51_37692610($_smarty_tpl) {?>
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
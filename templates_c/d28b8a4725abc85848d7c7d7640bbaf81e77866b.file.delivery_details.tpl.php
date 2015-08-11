<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:15:46
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/delivery_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:523128333516464650ba7c9-54906335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd28b8a4725abc85848d7c7d7640bbaf81e77866b' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/delivery_details.tpl',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '523128333516464650ba7c9-54906335',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516464650deb04_56917952',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'preferences' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516464650deb04_56917952')) {function content_516464650deb04_56917952($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('delivery_information', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['delivery_information'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 65%;">
            <label style="width: 140px; float: left; line-height: 26px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['delivery_area'];?>
</label>
                        <select id="shipon_del_area" name="shipon_del_area" class="shipon_select" onChange="on_area_change(this);">
                                <option value=''>Please select</option>
                                <option value='Reception'>Reception</option>
                                <option value='Mailroom'>Mailroom</option>
                                <option value='Security'>Security</option>
                                <option value='Shipping'>Receiving</option>
                                <option value='Other' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_del_area'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_del_area']!=''){?>selected<?php }?>>Other:</option>
                        </select>
	</div>
	<div class="shipon_fieldblock" style="width: 35%;">
		<input type="text" id="shipon_del_area_other" name="shipon_del_area_other" class="shipon_input" <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_del_area'])&&$_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_del_area']!=''){?>value="<?php echo $_smarty_tpl->tpl_vars['preferences']->value['shipon_settings_dad_del_area'];?>
"<?php }else{ ?>disabled="disabled"<?php }?>/>
	</div>
	<div class="shipon_fieldblock" style="width: 100%;">
            <label style="width: 140px; float: left; line-height: 26px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['delivery_instructions'];?>
</label>
            <textarea id="shipon_del_note" maxlength="60" name="shipon_del_note" class="shipon_input shipon_textarea"><?php echo $_smarty_tpl->tpl_vars['lang']->value['del_note'];?>
</textarea>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
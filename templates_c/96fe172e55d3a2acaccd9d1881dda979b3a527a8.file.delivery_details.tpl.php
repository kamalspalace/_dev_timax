<?php /* Smarty version Smarty-3.1.12, created on 2013-03-30 13:33:40
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/delivery_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120043478450f8dcdadf57b6-85763401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96fe172e55d3a2acaccd9d1881dda979b3a527a8' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/delivery_details.tpl',
      1 => 1364664814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120043478450f8dcdadf57b6-85763401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f8dcdae19722_11749741',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f8dcdae19722_11749741')) {function content_50f8dcdae19722_11749741($_smarty_tpl) {?>
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
                                <option value='Other'>Other:</option>
                        </select>
	</div>
	<div class="shipon_fieldblock" style="width: 35%;">
		<input type="text" id="shipon_del_area_other" name="shipon_del_area_other" class="shipon_input" disabled="disabled"/>
	</div>
	<div class="shipon_fieldblock" style="width: 100%;">
            <label style="width: 140px; float: left; line-height: 26px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['delivery_instructions'];?>
</label>
            <textarea id="shipon_delivery_instructions" name="shipon_del_note" class="shipon_input shipon_textarea"></textarea>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
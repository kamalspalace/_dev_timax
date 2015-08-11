<?php /* Smarty version Smarty-3.1.12, created on 2013-01-17 16:55:38
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/box_pickup_appt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112747245150f871c7091a95-52703143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a974937be47296c131d965bb712233bd2e660e7f' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/box_pickup_appt.tpl',
      1 => 1358459734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112747245150f871c7091a95-52703143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f871c70ab8f4_65599217',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f871c70ab8f4_65599217')) {function content_50f871c70ab8f4_65599217($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('pickup', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['pickup'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

        
        <div class='shipon_fieldblock' style='width: 50%;'>
            <label style='width: 40px;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</label>
            <input type='text' id='shipon_pickup_date' name='shipon_pup_date' class='shipon_input shipon_datepicker'/>
        </div>
	<div class='shipon_fieldblock' style='width: 5%;'>
	    <span class='filler'></span>
	</div>
        <div class='shipon_fieldblock' style='width: 45%;'>
            <label style='width: 70px;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['ready_by'];?>
</label>
            <input type='text' id='shipon_pickup_ready' name='shipon_pup_time' class='shipon_input shipon_timepicker'/>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
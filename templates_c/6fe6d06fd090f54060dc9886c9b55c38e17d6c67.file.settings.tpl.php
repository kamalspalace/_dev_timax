<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 21:07:00
         compiled from "/home/shipon/public_html/new_bol/timax/templates/settings/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123270227550f48a034182c4-38962544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fe6d06fd090f54060dc9886c9b55c38e17d6c67' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/settings/settings.tpl',
      1 => 1358215602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123270227550f48a034182c4-38962544',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f48a034602c2_71882046',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f48a034602c2_71882046')) {function content_50f48a034602c2_71882046($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('account_setting', null, 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
  <a class='shipon_titlebutton shipon_button' onclick='shipon_save_settings()'>Save</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<form name='shipon_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' id='shipon_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' class='shipon_form' method='post'>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['notification_settings'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'1','width'=>'100%'), 0);?>

	
	<div class='shipon_fieldblock' style='width: 50%;'>
          <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['direct'];?>
</label>
          <input type='text' id='shipon_direct_notif' name='shipon_direct_notif' class='shipon_input shipon_settings_input'/>
	</div>

	<div class='shipon_fieldblock' style='width: 50%;'>
	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['rush'];?>
</label>
	  <input type='text' id='shipon_rush_notif' name='shipon_rush_notif' class='shipon_input shipon_settings_input'/>
	</div>

 	<div class='shipon_fieldblock' style='width: 50%;'>
	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['regular'];?>
</label>
	  <input type='text' id='shipon_regular_notif' name='shipon_regular_notif' class='shipon_input shipon_settings_input'/>
	</div>

        <div class='shipon_fieldblock' style='width: 50%;'>
	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['sameday'];?>
</label>
	  <input type='text' id='shipon_sameday_notif' name='shipon_sameday_notif' class='shipon_input shipon_settings_input'/>
	</div>

	<div class='shipon_fieldblock' style='width: 50%;'>
	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['overnight'];?>
</label>
	  <input type='text' id='shipon_overnight_notif' name='shipon_overnight_notif' class='shipon_input shipon_settings_input'/>
	</div>

	<div class='shipon_fieldblock' style='width: 50%;'>
	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['all_delivered'];?>
</label>
	  <input type='text' id='shipon_all_notif' name='shipon_all_notif' class='shipon_input shipon_settings_input'/>
	</div>
	
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</form>
<?php }} ?>
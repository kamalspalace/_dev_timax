<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 20:57:21
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/gps_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211979942850f9fd8189b865-87245654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '501f9f3e07e270eaaff440a23b48607e8a77dcb9' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/gps_email.tpl',
      1 => 1358559780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211979942850f9fd8189b865-87245654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f9fd818b3f08_61305624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f9fd818b3f08_61305624')) {function content_50f9fd818b3f08_61305624($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('gps_email', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['gps_email'],'button'=>'','help_icon'=>'','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 100%;">
		<input type="text" id="shipon_gps_email" name="shipon_gps_email" class="shipon_input"/>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
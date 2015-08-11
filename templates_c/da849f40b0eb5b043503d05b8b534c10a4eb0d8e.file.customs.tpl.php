<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 02:12:39
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/customs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3569041850f8f4e8426114-93892454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da849f40b0eb5b043503d05b8b534c10a4eb0d8e' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/customs.tpl',
      1 => 1358493094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3569041850f8f4e8426114-93892454',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f8f4e843e8d2_05286989',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f8f4e843e8d2_05286989')) {function content_50f8f4e843e8d2_05286989($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('customs_broker', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['customs_broker'],'button'=>'','help_icon'=>'','width'=>'100%'), 0);?>


        <div class="shipon_fieldblock" style="width: 100%;">
	  <input type="text" id="shipon_cust_broker" name="shipon_cust_broker" class="shipon_input"/>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 20:57:21
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/pod_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137619238850f9fd818b9d52-67241117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f40981f11678c9cda823061bb0713cdf9cbe855' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/pod_email.tpl',
      1 => 1358560579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137619238850f9fd818b9d52-67241117',
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
  'unifunc' => 'content_50f9fd818d21d1_34873938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f9fd818d21d1_34873938')) {function content_50f9fd818d21d1_34873938($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('pod_email', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['pod_email'],'button'=>'','help_icon'=>'','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 100%;">
<input type="text" id="shipon_pod_email" name="shipon_pod_email" class="shipon_input"/>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
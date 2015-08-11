<?php /* Smarty version Smarty-3.1.12, created on 2013-01-19 23:32:10
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/shipment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18469513750f878f771e1a7-75301652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc3b638b6a45b4c07bc5b76681182a6610e20e92' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/shipment.tpl',
      1 => 1358656326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18469513750f878f771e1a7-75301652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f878f7750681_74561504',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f878f7750681_74561504')) {function content_50f878f7750681_74561504($_smarty_tpl) {?>
<form name='shipon_BOL' id='shipon_BOL' class='shipon_form' method='post'>
<div id='shipon_accordion'>
	<?php echo $_smarty_tpl->getSubTemplate ('shipment/section1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('shipment/section2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('shipment/section3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id='shipon_bol_footer'>
	<a class='shipon_button' id='shipon_back' onclick='shipon_back()'>Back</a>
	<span id='shipon_output'></span>
	<a class='shipon_button' id='shipon_continue' onclick='validate_form(shipon_continue)'>Continue</a>
</div>
</form>
<?php }} ?>
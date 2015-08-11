<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:00
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/reference_no.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42285983452559388e8ff08-25842461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45ff0c095c5c0adb4ee51f685652d20905f0b029' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/boxes/reference_no.tpl',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42285983452559388e8ff08-25842461',
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
  'unifunc' => 'content_52559388ea4dd8_03693196',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52559388ea4dd8_03693196')) {function content_52559388ea4dd8_03693196($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('reference_no', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['reference_no'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

        
	<div class='shipon_fieldblock' style='width: 100%;'>
		<input type='text' id='shipon_reference' name='shipon_reference' class='shipon_input'/>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
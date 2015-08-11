<?php /* Smarty version Smarty-3.1.12, created on 2013-03-30 13:29:56
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/reference_no.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185274366650f87fa9e62d81-85590259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5ef18072b6bc56d6f29aa4c48af58186d1dbf48' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/reference_no.tpl',
      1 => 1364664593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185274366650f87fa9e62d81-85590259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f87fa9e7c540_27577162',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f87fa9e7c540_27577162')) {function content_50f87fa9e7c540_27577162($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('reference_no', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['reference_no'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

        
	<div class='shipon_fieldblock' style='width: 100%;'>
		<input type='text' id='shipon_reference' name='shipon_reference' class='shipon_input'/>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
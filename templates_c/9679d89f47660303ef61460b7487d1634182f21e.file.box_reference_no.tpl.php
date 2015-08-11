<?php /* Smarty version Smarty-3.1.12, created on 2013-01-17 16:49:20
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/box_reference_no.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194908684550f871e08bb412-20042721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9679d89f47660303ef61460b7487d1634182f21e' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/box_reference_no.tpl',
      1 => 1358457413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194908684550f871e08bb412-20042721',
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
  'unifunc' => 'content_50f871e0903f97_80745613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f871e0903f97_80745613')) {function content_50f871e0903f97_80745613($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('reference_no', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['reference_no'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

        
	<div class='shipon_fieldblock' style='width: 100%;'>
		<input type='text' id='shipon_reference_no' name='shipon_reference' class='shipon_input'/>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
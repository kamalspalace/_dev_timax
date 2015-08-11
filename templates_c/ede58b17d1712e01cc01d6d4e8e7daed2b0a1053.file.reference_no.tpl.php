<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:15:46
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/reference_no.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74747667651646464e4b9c0-74193614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede58b17d1712e01cc01d6d4e8e7daed2b0a1053' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/reference_no.tpl',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74747667651646464e4b9c0-74193614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51646464e65656_38212503',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51646464e65656_38212503')) {function content_51646464e65656_38212503($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('reference_no', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['reference_no'],'button'=>'','help_icon'=>'1','width'=>'100%'), 0);?>

        
	<div class='shipon_fieldblock' style='width: 100%;'>
		<input type='text' id='shipon_reference' name='shipon_reference' class='shipon_input'/>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
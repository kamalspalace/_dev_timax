<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 20:09:03
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/section2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213377954450f8e3403d3f69-29511090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd40841f26d731347352b29c5d87bc7d198a36635' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/section2.tpl',
      1 => 1358557740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213377954450f8e3403d3f69-29511090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f8e3403e7b37_54728851',
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f8e3403e7b37_54728851')) {function content_50f8e3403e7b37_54728851($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_goods', null, 0);?>
	<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['bol_goods'];?>
</h3>
	<div class='shipon_section_content' id='shipon_<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
_section'>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 100%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/goods/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 30%;'>	
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/customs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
                        <div class='shipon_column' style='width: 30%;'> 
                        <?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/declared_value.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        </div>
		</div>	

	</div>
<?php }} ?>
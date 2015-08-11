<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:01
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/section2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:888913247525593891f9c97-82045029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f16402d6989274f04cdb80cbed967218c432b0' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/section2.tpl',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '888913247525593891f9c97-82045029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5255938920f2d9_88995671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255938920f2d9_88995671')) {function content_5255938920f2d9_88995671($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_goods', null, 0);?>
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
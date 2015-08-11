<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:15:46
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/section1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137859023951646464d8e845-23494271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75aaf3761487bbc18e21f068de60828239cb96e3' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/section1.tpl',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137859023951646464d8e845-23494271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51646464dbdc26_96702202',
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51646464dbdc26_96702202')) {function content_51646464dbdc26_96702202($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_address', null, 0);?>
	<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['bol_address'];?>
</h3>
	<div class='shipon_section_content' id='shipon_<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
_section'>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 33%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/division.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>

			<div class='shipon_column' style='width: 34%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/pickup_appt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>

			<div class='shipon_column' style='width: 33%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/reference_no.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 33%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/shipper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>

                        <div class='shipon_column' style='width: 34%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/consignee.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        </div>

                        <div class='shipon_column' style='width: 33%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/billto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        </div>
		</div>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 50%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/pickup_details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>

			<div class='shipon_column' style='width: 50%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/delivery_details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>

	</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:00
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/section1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115588651652559388d6db09-21195964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd35204a1fa18336ed0dae4a1a315f4ea258cbfa' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/shipment/section1.tpl',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115588651652559388d6db09-21195964',
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
  'unifunc' => 'content_52559388dad9b3_83375177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52559388dad9b3_83375177')) {function content_52559388dad9b3_83375177($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_address', null, 0);?>
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
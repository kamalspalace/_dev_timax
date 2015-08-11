<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 20:09:23
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/section1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157938471750f871c701eba8-60998794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '872dcf8eaac2230e2bc3c405ca024d2ca78c5236' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/section1.tpl',
      1 => 1358557760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157938471750f871c701eba8-60998794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f871c7069858_37974716',
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f871c7069858_37974716')) {function content_50f871c7069858_37974716($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_address', null, 0);?>
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
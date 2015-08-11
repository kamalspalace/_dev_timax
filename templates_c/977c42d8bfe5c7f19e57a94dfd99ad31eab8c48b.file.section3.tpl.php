<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 21:15:48
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/section3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1755295650f9f030c50a33-40721913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977c42d8bfe5c7f19e57a94dfd99ad31eab8c48b' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/section3.tpl',
      1 => 1358561742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1755295650f9f030c50a33-40721913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f9f030c67d18_67615619',
  'variables' => 
  array (
    'lang' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f9f030c67d18_67615619')) {function content_50f9f030c67d18_67615619($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['section'] = new Smarty_variable('bol_details', null, 0);?>
	<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['bol_details'];?>
</h3>
	<div class='shipon_section_content' id='shipon_<?php echo $_smarty_tpl->tpl_vars['section']->value;?>
_section'>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 100%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/service.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 50%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/service_return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
			<div class='shipon_column' style='width: 50%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/vehicle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 25%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/gps_email.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>	
			<div class='shipon_column' style='width: 25%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/pod_email.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        </div>
			<div class='shipon_column' style='width: 50%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/delivery_appt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>			
		</div>
		<div class='shipon_row'>
			<div class='shipon_column' style='width: 25%;'>
			  <span class='filler'></span>
			</div>
			<div class='shipon_column' style='width: 75%;'>
			<?php echo $_smarty_tpl->getSubTemplate ('shipment/boxes/rates.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
<?php }} ?>
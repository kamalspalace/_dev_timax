<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:15:46
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/rates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:844904074516464652b9527-39076133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5910e4479b38c076ae0dc10e8c353bea81a05903' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/shipment/boxes/rates.tpl',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '844904074516464652b9527-39076133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5164646549dce4_25572571',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
    'button' => 0,
    'data' => 0,
    'rate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5164646549dce4_25572571')) {function content_5164646549dce4_25572571($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('rates', null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('button', 'button', null); ob_start(); ?>
	<a id="shipon_get_rates" class="shipon_button shipon_titlebutton" onclick="shipon_get_rates()">Get Rates</a>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['rates'],'button'=>$_smarty_tpl->tpl_vars['button']->value,'help_icon'=>'','width'=>'100%'), 0);?>

        <div class='shipon_fieldblock' style='width: 100%;'>
            <div id="shipon_rates_table_container">
                <table id="shipon_rates_table" style="width: 100%;">
					<thead>
                        <tr>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Weight</th>
                            <th>Rate</th>
                            <th>Per</th>
                            <th>Total</th>
                        </tr>
					</thead>
					
					<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate'][0])){?>
						<?php  $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rate']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->key => $_smarty_tpl->tpl_vars['rate']->value){
$_smarty_tpl->tpl_vars['rate']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rate']->key;
?>
							<tr>
							  <td><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Code'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Code'];?>
<?php }?></td>
							  <td><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Descr1'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Descr1'];?>
<?php }?></td>
							  <td><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Quant'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Quant'];?>
<?php }else{ ?>-<?php }?></td>
							  <td><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Weight'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Weight'];?>
<?php }else{ ?>-<?php }?></td>
							  <td><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Rate'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Rate'];?>
<?php }else{ ?>-<?php }?></td>
							  <td><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Uom'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Uom'];?>
<?php }else{ ?>-<?php }?></td>
							  <td><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Tot'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Tot'];?>
<?php }else{ ?>-<?php }?></td>
							</tr>
						<?php } ?>
					
					<?php }elseif(isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate'])){?>
			                 <tr>
	                          <td><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Code'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Code'];?>
<?php }?></td>
	                          <td><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Descr1'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Descr1'];?>
<?php }?></td>
	                          <td><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Quant'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Quant'];?>
<?php }else{ ?>-<?php }?></td>
	                          <td><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Weight'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Weight'];?>
<?php }else{ ?>-<?php }?></td>
	                          <td><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Rate'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Rate'];?>
<?php }else{ ?>-<?php }?></td>
	                          <td><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Uom'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Uom'];?>
<?php }else{ ?>-<?php }?></td>
	                          <td><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Tot'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Tot'];?>
<?php }else{ ?>-<?php }?></td>
	                        </tr>	
	                		<tr><td/><td/><td/><td/><td/><td/><td/></tr>
	                		<tr><td/><td/><td/><td/><td/><td/><td/></tr>
	                		<tr><td/><td/><td/><td/><td/><td/><td/></tr>
					
					<?php }else{ ?>
	                        <tr><td/><td/><td/><td/><td/><td/><td/></tr>
	                        <tr><td/><td/><td/><td/><td/><td/><td/></tr>
	                        <tr><td/><td/><td/><td/><td/><td/><td/></tr>
	                        <tr><td/><td/><td/><td/><td/><td/><td/></tr>
					<?php }?>
                </table>
            </div>
        </div>
	<div style='width: 100%;'>	
	<div class='shipon_fieldblock' style='width: 55%;float:left;'>
		<span id="shipon_disclaimer">Rate is based on the information provided and may be subject to change based on actual weight, dimensions,<br /> vehicle type required or any other pertinent information<br />that has not been provided accurately.</span><br />
	</div>
	<div style='width:45%; margin-top:5px;float:right;'>
        <div class='shipon_fieldblock' style='width:100%'>
		<label style='text-align:right; font-size: 14px; font-weight: bold;width:25%;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['fuelsc'];?>
:&nbsp;</label>
			<input type='text' id='shipon_rate_fsc' name='shipon_rate_fsc' style="color: #000; margin-left: 4px;" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Surcharge'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Surcharge'];?>
<?php }else{ ?>0.00<?php }?>" readonly='readonly' />
        </div>
        <div class='shipon_fieldblock' style='width:100%'>
		<label style='text-align: right; font-size: 14px; font-weight: bold;width:25%;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['subtotal'];?>
:&nbsp;</label>
               		<input type='text' id='shipon_rate_charge' name='shipon_rate_charge' style="color: #000; margin-left: 4px;" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Subtotal'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Subtotal'];?>
<?php }else{ ?>0.00<?php }?>" readonly='readonly' />
	</div>
        <div class='shipon_fieldblock' style='width:100%'>
		<label style='text-align: right; font-size: 14px; font-weight: bold;width:25%;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['tax'];?>
:&nbsp;</label>
			<input type='text' id='shipon_tax_charge' name='shipon_tax_charge' style="color: #000; margin-left: 4px;" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Gstamt'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Gstamt'];?>
<?php }else{ ?>0.00<?php }?>" readonly='readonly' />
	</div>
        <div class='shipon_fieldblock' style='width:100%'>
		<label style='text-align: right; font-size: 14px; font-weight: bold;width:25%;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['total'];?>
:&nbsp;</label>
			<input type='text' id='shipon_total_charge' name='shipon_total_charge' style="color: #000; margin-left: 4px;" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Tot'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Tot'];?>
<?php }else{ ?>0.00<?php }?>" readonly='readonly' />
			<input type='hidden' id='shipon_id' name='shipon_id' />
            <input type='hidden' id='shipon_extid' name='shipon_extid' />
			<input type='hidden' id='shipon_qte_only' name='shipon_qte_only' value='' />
	</div>
	</div><!-- end  of second width 100% -->
	</div><!-- end of width 100% -->
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-04-04 09:46:26
         compiled from "/home/shipon/public_html/new_bol/timax/templates/tracking/tracking_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1184819975111baeacf06b7-95581626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb80b6a77e97bc6100a3b036e735211b9c9de2cf' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/tracking/tracking_view.tpl',
      1 => 1365083176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1184819975111baeacf06b7-95581626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5111baeb01ebf2_85678962',
  'variables' => 
  array (
    'lang' => 0,
    'request' => 0,
    'data' => 0,
    'settings' => 0,
    'status' => 0,
    'loc' => 0,
    'rate' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5111baeb01ebf2_85678962')) {function content_5111baeb01ebf2_85678962($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/shipon/public_html/new_bol/_CORE/includes/smarty/libs/plugins/modifier.replace.php';
?><div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container'>
		<div class='shipon_title'>
			<div class='shipon_titletext'><?php echo $_smarty_tpl->tpl_vars['lang']->value['tracking'];?>
</div>

			<div class='shipon_titlebuttons'>
				<div id='date-range'>
					<div id='date-range-field'><span></span><a href='#'>&#9660;</a></div>
					<div id='datepicker-calendar'></div>
				</div>
<input type='text' id='shipon_tracking_search' name='shipon_tracking_search' value='<?php if (isset($_smarty_tpl->tpl_vars['request']->value['search_string'])&&$_smarty_tpl->tpl_vars['request']->value['search_string']!=''){?><?php echo $_smarty_tpl->tpl_vars['request']->value['search_string'];?>
<?php }else{ ?>Search<?php }?>' style='width: 220px;' />
			</div>
		</div>
                <div id='shipon_tracking_view_header'>
               		<span id='tracking_view_h2'>ORDER #<?php echo $_smarty_tpl->tpl_vars['data']->value['Pbnum'];?>
</span>
			
			<div id='shipon_tracking_buttons' style='float: right; margin-top: 10px;'>
                                <a class='shipon_tracking_button' href="#fdss">&#xe025;</a>
				<a class='shipon_tracking_button' href="#dsfd">&#xe02c;</a>
				<a class='shipon_tracking_button' href="#dsfd">&#xe02d;</a>
				<a class='shipon_tracking_button' href="#fdss">&#xe024;</a>
                                <a class='shipon_tracking_button' href="#dsfd">&#xe00a;</a>
				<a class='shipon_tracking_button' href="#asdf" style='margin-right: 6px;'>&#xe000;</a>
                                <a class='shipon_tracking_button' href="#fdsa" style='margin-right: 6px;'>&#xe006;</a>

			</div>

                </div>

		<div id='shipon_tracking_view_radetail'>
			<span class='shipon_tracking_details_info'>DETAILS</span>
			<table id='shipon_tracking_details_info'>				
				<tbody>
					<tr>
						<td class='label'>Date</td>
						<td class='value'><?php echo $_smarty_tpl->tpl_vars['data']->value['ProDate'];?>
</td>
						<td class='space'>&nbsp;</td>
						<td class='label'>Status</td>
						<td class='value'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value['RecStatus'],'DEL','Delivered');?>
</td>
					</tr>	
					<tr>
                                                <td class='label'>Division</td>
                                                <td class='value'><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value['Division'],'MES','Messenger'),'FRT','Freight'),'CUR','Courier');?>
</td>
                                                <td class='space'>&nbsp;</td>
                                                <td class='label'>BL #</td>
                                                <td class='value'><?php if (isset($_smarty_tpl->tpl_vars['data']->value['ShBOL'][0])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['ShBOL'];?>
<?php }else{ ?>-<?php }?></td>
					</tr>	
                                        <tr>
                                                <td class='label'>Service</td>
                                                <td class='value'><?php if (isset($_smarty_tpl->tpl_vars['data']->value['Servlvl'][0])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['services'][$_smarty_tpl->tpl_vars['data']->value['Servlvl']];?>
<?php }?></td>
                                                <td class='space'>&nbsp;</td>
                                                <td class='label'>Reference #</td>
                                                <td class='value'><?php if (count($_smarty_tpl->tpl_vars['data']->value['RefNumb'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RefNumb'];?>
<?php }else{ ?>-<?php }?></td>
                                        </tr>
					
                                        <tr>
                                                <td class='label'>Weight</td>
                                                <td class='value'><?php echo $_smarty_tpl->tpl_vars['data']->value['Weight'];?>
</td>
                                                <td class='space'>&nbsp;</td>
                                                <td class='label'>Skids-Pcs</td>
                                                <td class='value'>
								<?php if ($_smarty_tpl->tpl_vars['data']->value['Skid']>0&&$_smarty_tpl->tpl_vars['data']->value['Pieces']>0){?>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['Skid'];?>
-<?php echo $_smarty_tpl->tpl_vars['data']->value['Pieces'];?>

								<?php }elseif($_smarty_tpl->tpl_vars['data']->value['Skid']>0&&$_smarty_tpl->tpl_vars['data']->value['Pieces']<1){?>
								<?php echo $_smarty_tpl->tpl_vars['data']->value['Skid'];?>

								<?php }elseif($_smarty_tpl->tpl_vars['data']->value['Pieces']>0&&$_smarty_tpl->tpl_vars['data']->value['Skid']<1){?> 
								<?php echo $_smarty_tpl->tpl_vars['data']->value['Pieces'];?>

								<?php }?>
						</td>
                                        </tr>

				</tbody>
			</table>

			<span class='shipon_tracking_details_hstatus' style='margin-top: 15px;'>STATUS</span>
                        <table id='shipon_tracking_details_hstable'>
                                <thead>
                                        <tr>
                                                <th width='20%'>Timestamp</th>
                                                <th width='16%' style='text-align: left !important;'>Status</th>
						<th width='27%' style='text-align: left;'>Location</th>
                                                <th width='37%' style='text-align: left;'>Activity</th>
                                        </tr>
                                </thead>
					<?php if (isset($_smarty_tpl->tpl_vars['data']->value['StatusLog']['Status'][0])){?>
					<tbody style='border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;'>
                                                <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['StatusLog']['Status']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value){
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['status']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['status']->value['RecStatus']=='AVL'||$_smarty_tpl->tpl_vars['status']->value['RecStatus']=='PPL'){?><?php continue 1?><?php }?>
						<tr>
							<td width='20%' <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>style='border-bottom-left-radius: 3px; border-bottom-color: #beb5a4;'<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value['Dt'];?>
<?php if ($_smarty_tpl->tpl_vars['status']->value['Tm']!=''){?> - <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['Tm'],'.',':');?>
<?php }?></td>
							<td width='16%' style='text-align: left; <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>border-bottom-color: #beb5a4;<?php }?>'><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['RecStatus'],'DPU','Dispatched'),'LDD','Picked Up'),'DEL','Delivered');?>
</td>
							<td width='27%' style='text-align: left; <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>border-bottom-color: #beb5a4;<?php }?>'><?php if (isset($_smarty_tpl->tpl_vars['status']->value['Location'][0])){?><?php $_smarty_tpl->tpl_vars['loc'] = new Smarty_variable(explode(":",$_smarty_tpl->tpl_vars['status']->value['Location']), null, 0);?><?php echo strtoupper(smarty_modifier_replace($_smarty_tpl->tpl_vars['loc']->value[0],',',', '));?>
<?php }?></td>
							<td width='37%' style='text-align: left; <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>border-bottom-right-radius: 3px; border-bottom-color: #beb5a4;<?php }?>'><?php if (isset($_smarty_tpl->tpl_vars['status']->value['Remarks'][0])&&$_smarty_tpl->tpl_vars['status']->value['RecStatus']!='DEL'){?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['Remarks'],':','<br />');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['status']->value['RecStatus']=='DEL'){?><?php if (isset($_smarty_tpl->tpl_vars['status']->value['Remarks'][0])){?><?php echo $_smarty_tpl->tpl_vars['status']->value['Remarks'];?>
<br /><?php }?>Signed by: <a class="shipon_pod_sig" href="http://www.gotimax.com/imgpod/<?php echo $_smarty_tpl->tpl_vars['data']->value['Pbnum'];?>
.jpg"><?php if ($_smarty_tpl->tpl_vars['data']->value['Signature']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Signature']);?>
<?php }else{ ?>View Signature<?php }?></a><?php }?><?php if ($_smarty_tpl->tpl_vars['status']->value['RecStatus']=='DPU'&&!isset($_smarty_tpl->tpl_vars['status']->value['Remarks'][0])){?>&nbsp;<br />&nbsp;<?php }?></td>
						</tr>
						<?php } ?>
					</tbody>
					<?php }else{ ?>
					<tfoot>
                                        <tr>
                                                <td width='1%'> </td>
                                                <td width='99%' colspan='3' style='text-align: center;'>NO STATUS UPDATES ON FILE</td>
                                        </tr>
					</tfoot>
					<?php }?>	
				</tbody>
                        </table>

                        <span class='shipon_tracking_details_rates' style='margin-top: 20px;'>RATES</span>
			<table id='shipon_tracking_details_ratable' style='margin-bottom: 20px;'>
				<thead>
				    <tr>
					<th width='45%'>Description</th>
					<th width='10%'>Quantity</th>
					<th width='10%'>Weight</th>
					<th width='12%'>Rate</th>
					<th width='10%'>Per</th>
					<th width='13%'>Total</th>
				    </tr>
				</thead>
					<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate'][0])&&($_smarty_tpl->tpl_vars['data']->value['RecStatus']!='QTE'&&$_smarty_tpl->tpl_vars['data']->value['Division']!='FRT'||$_smarty_tpl->tpl_vars['data']->value['Servlvl']!='NF')){?>
                                                <tbody>
                                       	        <?php  $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rate']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->key => $_smarty_tpl->tpl_vars['rate']->value){
$_smarty_tpl->tpl_vars['rate']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rate']->key;
?>
                                               	 <tr>
                                                        <td width='45%'><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Descr1'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Descr1'];?>
<?php }else{ ?>-<?php }?></td>
                                                        <td width='10%'><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Quant'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Quant'];?>
<?php }else{ ?>-<?php }?></td>
                                                        <td width='10%'><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Weight'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Weight'];?>
<?php }else{ ?>-<?php }?></td>
                                                        <td width='12%'><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Rate'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Rate'];?>
<?php }else{ ?>-<?php }?></td>
                                                        <td width='10%'><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Uom'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Uom'];?>
<?php }else{ ?>-<?php }?></td>
                                                        <td width='13%'><?php if (count($_smarty_tpl->tpl_vars['rate']->value['Tot'])>0){?><?php echo $_smarty_tpl->tpl_vars['rate']->value['Tot'];?>
<?php }else{ ?>-<?php }?></td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
					<?php }elseif(isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate'])&&($_smarty_tpl->tpl_vars['data']->value['RecStatus']!='QTE'&&$_smarty_tpl->tpl_vars['data']->value['Division']!='FRT'||$_smarty_tpl->tpl_vars['data']->value['Servlvl']!='NF')){?>
						<tbody>
						<tr>
					 	 	<td width='45%'><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Descr1'];?>
</td>
					  		<td width='10%'><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Quant'];?>
</td>
					  		<td width='10%'><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Weight'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Weight'];?>
<?php }else{ ?>-<?php }?></td>
					  		<td width='12%'><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Rate'];?>
</td>
					  		<td width='10%'><?php if (count($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Uom'])>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Uom'];?>
<?php }else{ ?>-<?php }?></td>
					  		<td width='13%'><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Rates']['Rate']['Tot'];?>
</td>
						</tr>
						</tbody>
					<?php }else{ ?>
						<tfoot>
						<tr>
							<td colspan='6' style='text-align: center; font-weight: normal;'>ORDER PENDING RATE QUOTE. NO RATES HAVE BEEN POSTED.</td>
						</tr>
						</tfoot>
					<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Subtotal'])&&isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Gstamt'])&&$_smarty_tpl->tpl_vars['data']->value['RecStatus']!='QTE'){?>
				<tfoot>
					<?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Surcharge'])){?>
					<tr><td colspan='5' width='87%'>Fuel SC</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Surcharge'];?>
</td></tr><?php }?>

					<tr><td colspan='5' width='87%'>Subtotal</td><td><?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Subtotal'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Subtotal'];?>
<?php }else{ ?>0.00<?php }?></td></tr>
					<tr><td colspan='5' width='87%'>GST/HST</td><td><?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Gstamt'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Gstamt'];?>
<?php }else{ ?>0.00<?php }?></td></tr>
					<tr><td colspan='5' width='87%'><span style='font-size: 16px;'>Total</span></td><td><span style='color: #003594; font-size: 16px; font-weight: bold;'><?php if (isset($_smarty_tpl->tpl_vars['data']->value['RateDetails']['Tot'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RateDetails']['Tot'];?>
<?php }else{ ?>0.00<?php }?></span></td></tr>
				</tfoot>
				<?php }?>
			</table>

			<div style="float: left; clear: both;">
			<br />&nbsp;<br />
			</div>
		</div>
                <div id='shipon_tracking_view_leftpan'>
                        <div id='shipon_tracking_view_sidetail'>
                                <span class='shipon_tracking_details_hglyph'>&#xe001;</span><span class='shipon_tracking_details_head'>SHIPPER</span>
                                <span class='shipon_tracking_details_text' style='font-weight: bold;'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ShipName']);?>
</span>
                                <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Add1']);?>
</span>
                                <?php if (count($_smarty_tpl->tpl_vars['data']->value['Add2'])>0){?>
                                <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Add2']);?>
</span>
                                <?php }?>
                                <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['City']);?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Prv']);?>
</span>
                                <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Postal']);?>
</span>
                                <span class='shipon_tracking_details_line'>&nbsp;</span>
                                <span class='shipon_tracking_details_hglyph'>&#xe01b;</span><span class='shipon_tracking_details_head'>CONSIGNEE</span>
                                <span class='shipon_tracking_details_text' style='font-weight: bold;'><?php echo strtoupper(substr($_smarty_tpl->tpl_vars['data']->value['ConsigName'],0,27));?>
</span>
                                <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConAdd1']);?>
</span>
                                <?php if (count($_smarty_tpl->tpl_vars['data']->value['ConAdd2'])>0){?>
                                <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConAdd2']);?>
</span>
                                <?php }?>
                                <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConCity']);?>
, <?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConPrv']);?>
</span>
                                <span class='shipon_tracking_details_text'><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['ConPostal']);?>
</span>
				<span class='shipon_tracking_details_line' style='margin-top: -2px;'>&nbsp;</span>
                                <span class='shipon_tracking_details_hglyph'>&#xe030;</span><span class='shipon_tracking_details_head' style='margin-bottom: 6px;'>BILL TO</span>
				<span class='shipon_tracking_details_text' style='font-weight: bold;'><?php echo $_smarty_tpl->tpl_vars['session']->value->bill_company;?>
</span>
				<span class='shipon_tracking_details_text'><?php echo $_smarty_tpl->tpl_vars['session']->value->bill_address;?>
</span>
				<span class='shipon_tracking_details_text'><?php echo $_smarty_tpl->tpl_vars['session']->value->bill_city;?>
, <?php echo $_smarty_tpl->tpl_vars['session']->value->bill_province;?>
</span>
				<span class='shipon_tracking_details_text'><?php echo $_smarty_tpl->tpl_vars['session']->value->bill_postal;?>
</span>
				<span class='shipon_tracking_details_line'>&nbsp;</span>
                        </div>
                </div>

                <input type='hidden' id='shipon_tracking_date_from' name='shipon_tracking_date_from' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['start_date'];?>
' />
                <input type='hidden' id='shipon_tracking_date_to' name='shipon_tracking_date_to' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['end_date'];?>
' />
                <input type='hidden' id='shipon_tracking_sort_by' name='shipon_tracking_sort_by' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_column'];?>
'>
                <input type='hidden' id='shipon_tracking_sort_order' name='shipon_tracking_sort_order' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_order'];?>
' />
	</div>
</div>
<?php }} ?>
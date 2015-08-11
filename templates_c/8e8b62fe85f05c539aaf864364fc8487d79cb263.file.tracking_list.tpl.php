<?php /* Smarty version Smarty-3.1.12, created on 2013-03-31 05:38:52
         compiled from "/home/shipon/public_html/new_bol/timax/templates/tracking/tracking_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72844136251119a72602c65-64733766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e8b62fe85f05c539aaf864364fc8487d79cb263' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/tracking/tracking_list.tpl',
      1 => 1364722728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72844136251119a72602c65-64733766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51119a726f2782_14076291',
  'variables' => 
  array (
    'lang' => 0,
    'request' => 0,
    'data' => 0,
    'order' => 0,
    'settings' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51119a726f2782_14076291')) {function content_51119a726f2782_14076291($_smarty_tpl) {?><div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container'>
		<div class='shipon_title'>
			<div class='shipon_titletext'><?php echo $_smarty_tpl->tpl_vars['lang']->value['tracking'];?>
</div>

			<div class='shipon_titlebuttons'>
				<div id='date-range'>
					<div id='date-range-field'><span></span><a href='#'>&#9660;</a></div>
					<div id='datepicker-calendar'></div>
				</div>
<input type='text' id='shipon_tracking_search' name='shipon_tracking_search' value='<?php if ($_smarty_tpl->tpl_vars['request']->value['search_string']){?><?php echo $_smarty_tpl->tpl_vars['request']->value['search_string'];?>
<?php }else{ ?>Search<?php }?>' style='width: 220px;' />
			</div>
		</div>

		<table id='shipon_tracking'>
			<thead>
				<tr>
					<th id='shipon_tracking_date' onclick='sort_by("ProDate");' style='width: 75px;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</th>
                                        <th id='shipon_tracking_probill_no' onclick='sort_by("Pbnum");'>Order #</th>
                                        <th id='shipon_tracking_service' onclick='sort_by("Servlvl");' style='width: 100px;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['service'];?>
</th>
					<th id='shipon_tracking_status' onclick='sort_by("RecStatus");'>Status</th>
					<th id='shipon_tracking_reference' onclick='sort_by("RefNumb");' style='width: 90px;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['ref_no'];?>
</th>
					<th id='shipon_tracking_ship_name' onclick='sort_by("ShipName");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['ship_name'];?>
</th>
					<th id='shipon_tracking_cons_name' onclick='sort_by("ConsigName");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['cons_name'];?>
</th>
					<th id='shipon_tracking_cons_addr' onclick='sort_by("Signature");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['signed_by'];?>
</th>
					<th id='shipon_tracking_cons_city' onclick='sort_by("DelTime");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['del_time'];?>
</th>
					<th id='shipon_tracking_cons_prov' onclick='sort_by("Tot");'><?php echo $_smarty_tpl->tpl_vars['lang']->value['amount'];?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php if (isset($_smarty_tpl->tpl_vars['data']->value['orders'][0])){?>
					<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['order']->key;
?>
						<tr onclick='get_tracking_details(<?php echo $_smarty_tpl->tpl_vars['order']->value['Pbnum'];?>
);'>
							<td><span class='tracking_datetime'><?php echo $_smarty_tpl->tpl_vars['order']->value['ProDate'];?>
</span></td>
							<td><a class='tracking_pbnum_link' href="javascript:get_tracking_details(<?php echo $_smarty_tpl->tpl_vars['order']->value['Pbnum'];?>
);"><?php echo $_smarty_tpl->tpl_vars['order']->value['Pbnum'];?>
</a></td>
							<td style='width: 100px;'><?php if (isset($_smarty_tpl->tpl_vars['order']->value['Servlvl'])&&$_smarty_tpl->tpl_vars['order']->value['Servlvl']!=''){?><span class='tracking_service_lvl'><?php echo $_smarty_tpl->tpl_vars['settings']->value['services'][$_smarty_tpl->tpl_vars['order']->value['Servlvl']];?>
</a><?php }else{ ?> - <?php }?></td>
							<td><span class='tracking_status_<?php echo $_smarty_tpl->tpl_vars['order']->value['RecStatus'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['settings']->value['statuses'][$_smarty_tpl->tpl_vars['order']->value['RecStatus']];?>
'><?php echo $_smarty_tpl->tpl_vars['order']->value['RecStatus'];?>
</span></td>
							<td style='font-size: 13px;'><?php if ($_smarty_tpl->tpl_vars['order']->value['RefNumb']){?><?php echo $_smarty_tpl->tpl_vars['order']->value['RefNumb'];?>
<?php }else{ ?>-<?php }?></td>
							<td style='font-size: 14px; font-weight: bold;'><a href="javascript:get_tracking_query('<?php echo strtoupper(substr($_smarty_tpl->tpl_vars['order']->value['ShipName'],0,27));?>
');" style="color: #1b1b1b;"><?php echo strtoupper(substr($_smarty_tpl->tpl_vars['order']->value['ShipName'],0,27));?>
</a></td>
							<td style='font-size: 14px; font-weight: bold;'><a href="javascript:get_tracking_query('<?php echo $_smarty_tpl->tpl_vars['order']->value['ConsigName'];?>
');" style="color: #ca1a36;"><?php echo strtoupper(substr($_smarty_tpl->tpl_vars['order']->value['ConsigName'],0,27));?>
</a></td>
							<td style='font-size: 14px;'><?php if ($_smarty_tpl->tpl_vars['order']->value['Signature']!=''){?><a class="shipon_pod_sig" href="http://www.gotimax.com/imgpod/<?php echo $_smarty_tpl->tpl_vars['order']->value['Pbnum'];?>
.jpg" style="color: #0083fa; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['order']->value['Signature'];?>
</a><?php }else{ ?> - <?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['order']->value['DelTime']!=0){?><?php echo $_smarty_tpl->tpl_vars['order']->value['DelTime'];?>
<?php }else{ ?>-<?php }?></td>
							<td><?php if ($_smarty_tpl->tpl_vars['order']->value['RecStatus']!='QTE'&&$_smarty_tpl->tpl_vars['order']->value['Tot']!=0){?><?php echo $_smarty_tpl->tpl_vars['order']->value['Tot'];?>
<?php }else{ ?> - <?php }?></td>
						</tr>
					<?php } ?>
					<?php if (count($_smarty_tpl->tpl_vars['data']->value['orders'])<10){?>
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (count($_smarty_tpl->tpl_vars['data']->value['orders'])) : count($_smarty_tpl->tpl_vars['data']->value['orders'])-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = count($_smarty_tpl->tpl_vars['data']->value['orders']), $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
						<tr>
							<td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
						</tr>
						<?php }} ?>
					<?php }?>
				<?php }else{ ?>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                                <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                </tr>
					<?php }} ?>
				<?php }?>
				
			</tbody>
		</table>
                <input type='hidden' id='shipon_tracking_date_from' name='shipon_tracking_date_from' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['start_date'];?>
' />
                <input type='hidden' id='shipon_tracking_date_to' name='shipon_tracking_date_to' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['end_date'];?>
' />
                <input type='hidden' id='shipon_tracking_sort_by' name='shipon_tracking_sort_by' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_column'];?>
'>
                <input type='hidden' id='shipon_tracking_sort_order' name='shipon_tracking_sort_order' value='<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_order'];?>
' />
		<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

	</div>
</div>
<?php }} ?>
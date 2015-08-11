<?php /* Smarty version Smarty-3.1.12, created on 2013-08-14 01:46:25
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/tracking/tracking_view_web.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1438999863520b19b115fab1-49762025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec590d70d7feb189610ae4ba3411c5ae02e8aa0' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/tracking/tracking_view_web.tpl',
      1 => 1376458937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1438999863520b19b115fab1-49762025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'settings' => 0,
    'curserv' => 0,
    'status' => 0,
    'tm' => 0,
    'loc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_520b19b13e04b4_31542622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520b19b13e04b4_31542622')) {function content_520b19b13e04b4_31542622($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/shipon/public_html/new_bol/_COREDEV/includes/smarty/libs/plugins/modifier.replace.php';
?>	<div class='shipon_field_container'>
		<div id='shipon_tracking_view_radetail'>
			<span class='shipon_tracking_details_info'>ORDER #<?php echo $_smarty_tpl->tpl_vars['data']->value['Pbnum'];?>
</span>
			<table id='shipon_tracking_details_info'>				
				<tbody>
					<tr>
						<td class='label'>Date</td>
						<td class='value'><?php echo $_smarty_tpl->tpl_vars['data']->value['ProDate'];?>
</td>
						<td class='space'>&nbsp;</td>
						<td class='label'>Status</td>
						<td class='value'><?php if ($_smarty_tpl->tpl_vars['data']->value['Division']=='CUR'&&isset($_smarty_tpl->tpl_vars['data']->value['Reference2'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['RecStatus'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['settings']->value['statuses'][$_smarty_tpl->tpl_vars['data']->value['RecStatus']];?>
<?php }?></td>
					</tr>	
					<tr>
                        <td class='label'>Division</td>
                        <td class='value'><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value['Division'],'MES','Messenger'),'FRT','Freight'),'CUR','Courier');?>
</td>
                        <td class='space'>&nbsp;</td>
                        <td class='label'><?php if ($_smarty_tpl->tpl_vars['data']->value['Division']=='CUR'){?>Tracking #<?php }else{ ?>BL #<?php }?></td>
                        <td class='value'><?php if ($_smarty_tpl->tpl_vars['data']->value['Division']=='CUR'){?><?php $_smarty_tpl->tpl_vars['curserv'] = new Smarty_variable(explode("*",$_smarty_tpl->tpl_vars['data']->value['Reference2']), null, 0);?><?php echo strtoupper($_smarty_tpl->tpl_vars['curserv']->value[0]);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['ShBOL'][0])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['ShBOL'];?>
<?php }else{ ?>-<?php }?><?php }?></td>
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
                        <th width='15%'>Timestamp</th>
                        <th width='14%' style='text-align: left !important;'>Status</th>
						<th width='36%' style='text-align: left;'>Location</th>
                        <th width='35%' style='text-align: left;'>Activity</th>
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
						<td width='15%' <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>style='border-bottom-left-radius: 3px; border-bottom-color: #beb5a4;'<?php }?>>
							<u><?php echo $_smarty_tpl->tpl_vars['status']->value['Dt'];?>
</u><?php if ($_smarty_tpl->tpl_vars['status']->value['Tm']!=''){?><?php $_smarty_tpl->tpl_vars['tm'] = new Smarty_variable(explode(":",$_smarty_tpl->tpl_vars['status']->value['Tm']), null, 0);?><br /><?php echo $_smarty_tpl->tpl_vars['tm']->value[0];?>
:<?php echo $_smarty_tpl->tpl_vars['tm']->value[1];?>
 <?php if ($_smarty_tpl->tpl_vars['tm']->value[0]<12){?>AM<?php }else{ ?>PM<?php }?><?php }?>
						</td>
						<td width='14%' style='text-align: left; <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>border-bottom-color: #beb5a4;<?php }?>'>
							<?php echo $_smarty_tpl->tpl_vars['settings']->value['statuses'][strtoupper($_smarty_tpl->tpl_vars['status']->value['RecStatus'])];?>

						</td>
						<td width='36%' style='text-align: left; <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>border-bottom-color: #beb5a4;<?php }?>'>
							<?php if (isset($_smarty_tpl->tpl_vars['status']->value['Location'][0])){?><?php $_smarty_tpl->tpl_vars['loc'] = new Smarty_variable(explode(":",$_smarty_tpl->tpl_vars['status']->value['Location']), null, 0);?><b><?php echo strtoupper(smarty_modifier_replace($_smarty_tpl->tpl_vars['loc']->value[0],',',', '));?>
</b><br /><?php echo substr($_smarty_tpl->tpl_vars['loc']->value[1],0,27);?>
<?php }?>
						</td>
						<td width='35%' style='text-align: left; <?php if ($_smarty_tpl->tpl_vars['data']->value['RecStatus']==$_smarty_tpl->tpl_vars['status']->value['RecStatus']){?>border-bottom-right-radius: 3px; border-bottom-color: #beb5a4;<?php }?>'>
							<?php if (isset($_smarty_tpl->tpl_vars['status']->value['Remarks'][0])&&$_smarty_tpl->tpl_vars['status']->value['RecStatus']!='DEL'&&$_smarty_tpl->tpl_vars['status']->value['Remarks']!='DELIVERED'){?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['status']->value['Remarks'],':','<br />');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['status']->value['RecStatus']=='DEL'||(isset($_smarty_tpl->tpl_vars['status']->value['Remarks'][0])&&$_smarty_tpl->tpl_vars['status']->value['Remarks']=='DELIVERED')){?><?php if (isset($_smarty_tpl->tpl_vars['status']->value['Remarks'][0])){?><?php echo $_smarty_tpl->tpl_vars['status']->value['Remarks'];?>
<?php if (isset($_smarty_tpl->tpl_vars['status']->value['DropLoc'])){?> @ <?php echo $_smarty_tpl->tpl_vars['status']->value['DropLoc'];?>
<?php }?><br /><?php }?><?php if ($_smarty_tpl->tpl_vars['data']->value['Signature']&&$_smarty_tpl->tpl_vars['data']->value['hasSignature']){?>Signed by: <a class="<?php if ($_smarty_tpl->tpl_vars['status']->value['Remarks']=='DELIVERED'){?>shipon_ups_sig<?php }else{ ?>shipon_pod_sig<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['data']->value['imgPods'];?>
" target="_new"><?php if ($_smarty_tpl->tpl_vars['data']->value['Signature']){?><?php echo strtoupper($_smarty_tpl->tpl_vars['data']->value['Signature']);?>
<?php }else{ ?>View Signature<?php }?></a><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['status']->value['RecStatus']=='DPU'&&!isset($_smarty_tpl->tpl_vars['status']->value['Remarks'][0])){?>&nbsp;<br />&nbsp;<?php }?>
						</td>
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
            </table>
	</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2013-11-15 20:27:15
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/history/history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172390269551d9bb7618f464-69298308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f57bc323aa82dc5f42f7cd84e4c918f3ba077777' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/history/history.tpl',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172390269551d9bb7618f464-69298308',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d9bb76250430_97804471',
  'variables' => 
  array (
    'lang' => 0,
    'shipment' => 0,
    'ship' => 0,
    'request' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d9bb76250430_97804471')) {function content_51d9bb76250430_97804471($_smarty_tpl) {?><div style="width: 100%" id="shipon_history_content" class="shipon_field"> 
	<div class="shipon_field_container">
		<div class="shipon_title">
			<div class="shipon_titletext"><?php echo $_smarty_tpl->tpl_vars['lang']->value['history'];?>
</div>
			<div class="shipon_titlebuttons">
				<input type="text" value="Search" id="shipon_history_search" class="shipon_input shipon_input_search" placeholder="Search" />
			</div>
		</div>
		<div class="shipon_field_content">
			<table id="shipon_history">
				<thead>
					<tr>
						<th width="12%" onclick="sort_by(this)" class="shipon_sort_DESC"><?php echo $_smarty_tpl->tpl_vars['lang']->value['shipment_id'];?>
</th>
						<th width="20%" onclick="sort_by(this)"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</th>
						<th width="35%" onclick="sort_by(this)"><?php echo $_smarty_tpl->tpl_vars['lang']->value['consignee'];?>
</th>
						<th width="6%" onclick="sort_by(this)"><?php echo $_smarty_tpl->tpl_vars['lang']->value['status'];?>
</th>
						<th width="20%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php if (count($_smarty_tpl->tpl_vars['shipment']->value)>0){?>
						<?php  $_smarty_tpl->tpl_vars['ship'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ship']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ship']->key => $_smarty_tpl->tpl_vars['ship']->value){
$_smarty_tpl->tpl_vars['ship']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['ship']->key;
?>
					<tr>
						<td><b><?php echo $_smarty_tpl->tpl_vars['ship']->value['ext_id'];?>
</b></td>
						<td><?php echo $_smarty_tpl->tpl_vars['ship']->value['timestamp'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['ship']->value['cons_name'];?>
</td>
						<td><div class="<?php if ($_smarty_tpl->tpl_vars['ship']->value['sent']==1){?>shipon_sent<?php }else{ ?>shipon_pending<?php }?>"><?php if ($_smarty_tpl->tpl_vars['ship']->value['sent']==1){?>Sent<?php }else{ ?>Pending<?php }?></div></td>
						<td style="padding-left: 20px;">
							<a href="#bol#copy-<?php echo $_smarty_tpl->tpl_vars['ship']->value['id'];?>
" class="shipon_button shipon_history_button">&nbsp;Copy&nbsp;</a>
							<a <?php if ($_smarty_tpl->tpl_vars['ship']->value['sent']==1){?>nohref<?php }else{ ?>href="#bol#edit-<?php echo $_smarty_tpl->tpl_vars['ship']->value['id'];?>
"<?php }?> class="shipon_button shipon_history_button <?php if ($_smarty_tpl->tpl_vars['ship']->value['sent']==1){?>shipon_history_button_disable_hover<?php }?>" style="padding-bottom: 5px;">&nbsp;Edit&nbsp;</a>
							<a href="#history#view_pdf-<?php echo $_smarty_tpl->tpl_vars['ship']->value['id'];?>
" class="shipon_button shipon_history_button">&nbsp;View&nbsp;</a>
						</td>
					</tr>
						<?php } ?>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['shipment']->value)<10){?>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (count($_smarty_tpl->tpl_vars['shipment']->value)) : count($_smarty_tpl->tpl_vars['shipment']->value)-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = count($_smarty_tpl->tpl_vars['shipment']->value), $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <tr>
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
			<input type="hidden" name="shipon_history_sort_by" id="shipon_history_sort_by" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_column'];?>
">
			<input type="hidden" name="shipon_history_sort_order" id="shipon_history_sort_order" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['sort_order'];?>
">			
		</div> <!-- end of shipon_field_content -->
		<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

	</div><!-- end of class  shipon_field_container -->
</div><!-- end of shipon file content --><?php }} ?>
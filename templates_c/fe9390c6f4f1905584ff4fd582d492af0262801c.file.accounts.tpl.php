<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:15:48
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/accounts/accounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175322827651d9bb8708df24-65661720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe9390c6f4f1905584ff4fd582d492af0262801c' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/accounts/accounts.tpl',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175322827651d9bb8708df24-65661720',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51d9bb8714ec71_83949152',
  'variables' => 
  array (
    'lang' => 0,
    'accounts' => 0,
    'account' => 0,
    'pagination' => 0,
    'hiddenPopup' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d9bb8714ec71_83949152')) {function content_51d9bb8714ec71_83949152($_smarty_tpl) {?><div style="width: 100%" id="shipon_manage_accounts_content" class="shipon_field">
	<div class="shipon_field_container">
		<div class="shipon_title">
			<div class="shipon_titletext">Accounts</div>
			<div class="shipon_titlebuttons">
				<a onclick="new_account()" id="shipon_account_new">+ New Account</a>
			</div>
		</div>
		<div class="shipon_field_content">
			<table id="shipon_accounts">
				<thead>
					<tr>
						<th width="10%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['account_id'];?>
</th>
						<th width="11%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</th>
						<th width="21%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</th>
						<th width="13%">Phone</th>
						<th width="5%">Ext.</th>
						<th width="23%">Email</th>
						<th width="13%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</th>
					</tr>
				</thead>
				<tbody>
					<?php if (count($_smarty_tpl->tpl_vars['accounts']->value)>0){?>
						<?php  $_smarty_tpl->tpl_vars['account'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['account']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['accounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value){
$_smarty_tpl->tpl_vars['account']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['account']->key;
?>
					
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['account']->value['id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['account']->value['username'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['account']->value['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['account']->value['phone'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['account']->value['ext'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['account']->value['email'];?>
</td>
							<td>
							<?php if ($_smarty_tpl->tpl_vars['account']->value['type']==1){?>
								<a onclick="edit_account(this)" class="shipon_button shipon_accounts_button"> Edit </a>
							<?php }else{ ?>
								<a onclick="edit_account(this)" class="shipon_button shipon_accounts_button"> Edit </a><a onclick="delete_account(this)" class="shipon_button shipon_accounts_button"> Delete </a>
							<?php }?>	
							</td>
						</tr>
						<?php } ?>
					<?php }?>
					<?php if (count($_smarty_tpl->tpl_vars['accounts']->value)<10){?>
						<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (count($_smarty_tpl->tpl_vars['accounts']->value)) : count($_smarty_tpl->tpl_vars['accounts']->value)-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = count($_smarty_tpl->tpl_vars['accounts']->value), $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>					
							<tr>
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
		</div>
		<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

	</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['hiddenPopup']->value;?>
	
	<?php }} ?>
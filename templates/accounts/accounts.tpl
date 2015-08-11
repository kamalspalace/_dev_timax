<div style="width: 100%" id="shipon_manage_accounts_content" class="shipon_field">
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
						<th width="10%">{$lang.account_id}</th>
						<th width="11%">{$lang.username}</th>
						<th width="21%">{$lang.name}</th>
						<th width="13%">Phone</th>
						<th width="5%">Ext.</th>
						<th width="23%">Email</th>
						<th width="13%">{$lang.action}</th>
					</tr>
				</thead>
				<tbody>
					{if $accounts|@count gt 0}
						{foreach from=$accounts key=i item=account name=count}
					
						<tr>
							<td>{$account.id}</td>
							<td>{$account.username}</td>
							<td>{$account.name}</td>
							<td>{$account.phone}</td>
							<td>{$account.ext}</td>
							<td>{$account.email}</td>
							<td>
							{if $account.type == 1}
								<a onclick="edit_account(this)" class="shipon_button shipon_accounts_button"> Edit </a>
							{else}
								<a onclick="edit_account(this)" class="shipon_button shipon_accounts_button"> Edit </a><a onclick="delete_account(this)" class="shipon_button shipon_accounts_button"> Delete </a>
							{/if}	
							</td>
						</tr>
						{/foreach}
					{/if}
					{if $accounts|@count lt 10}
						{for $i=$accounts|@count to 9}					
							<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
							</tr>
						{/for}
					{/if}		
				</tbody>
			</table>					
		</div>
		{$pagination}
	</div>
</div>
{$hiddenPopup}	
	
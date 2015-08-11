<div style="width: 100%" id="shipon_history_content" class="shipon_field"> 
	<div class="shipon_field_container">
		<div class="shipon_title">
			<div class="shipon_titletext">{$lang.history}</div>
			<div class="shipon_titlebuttons">
				<input type="text" value="Search" id="shipon_history_search" class="shipon_input shipon_input_search" placeholder="Search" />
			</div>
		</div>
		<div class="shipon_field_content">
			<table id="shipon_history">
				<thead>
					<tr>
						<th width="12%" onclick="sort_by(this)" class="shipon_sort_DESC">{$lang.shipment_id}</th>
						<th width="20%" onclick="sort_by(this)">{$lang.date}</th>
						<th width="35%" onclick="sort_by(this)">{$lang.consignee}</th>
						<th width="6%" onclick="sort_by(this)">{$lang.status}</th>
						<th width="20%">{$lang.action}</th>
					</tr>
				</thead>
				<tbody>
					{if $shipment|@count gt 0}
						{foreach from=$shipment key=i item=ship name=count}
					<tr>
						<td><b>{$ship.ext_id}</b></td>
						<td>{$ship.timestamp}</td>
						<td>{$ship.cons_name}</td>
						<td><div class="{if $ship.sent == 1}shipon_sent{else}shipon_pending{/if}">{if $ship.sent == 1}Sent{else}Pending{/if}</div></td>
						<td style="padding-left: 20px;">
							<a href="#bol#copy-{$ship.id}" class="shipon_button shipon_history_button">&nbsp;Copy&nbsp;</a>
							<a {if $ship.sent == 1}nohref{else}href="#bol#edit-{$ship.id}"{/if} class="shipon_button shipon_history_button {if $ship.sent == 1}shipon_history_button_disable_hover{/if}" style="padding-bottom: 5px;">&nbsp;Edit&nbsp;</a>
							<a href="#history#view_pdf-{$ship.id}" class="shipon_button shipon_history_button">&nbsp;View&nbsp;</a>
						</td>
					</tr>
						{/foreach}
					{/if}
					{if $shipment|@count lt 10}
					{for $i=$shipment|@count to 9}
                        <tr>
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
			<input type="hidden" name="shipon_history_sort_by" id="shipon_history_sort_by" value="{$request.sort_column}">
			<input type="hidden" name="shipon_history_sort_order" id="shipon_history_sort_order" value="{$request.sort_order}">			
		</div> <!-- end of shipon_field_content -->
		{$pagination}
	</div><!-- end of class  shipon_field_container -->
</div><!-- end of shipon file content -->
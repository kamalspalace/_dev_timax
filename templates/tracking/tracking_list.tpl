<div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container'>
		<div class='shipon_title'>
			<div class='shipon_titletext'>{$lang.tracking}</div>
			<div class='shipon_titlebuttons'>
				<div id='date-range'>
					<div id='date-range-field'><span></span><a href='#'>&#9660;</a></div>
					<div id='datepicker-calendar'></div>
				</div>
				<input type='text' id='shipon_tracking_search' class="shipon_input_search" name='shipon_tracking_search' placeholder="Search" value='{if $request.search_string}{$request.search_string}{else}Search{/if}' style='width: 220px;' />
			</div>
		</div>

		<table id='shipon_tracking'>
			<thead>
				<tr>
					<th id='shipon_tracking_date' onclick='sort_by("ProDate");' style='width: 75px;'>{$lang.date}</th>
                    			<th id='shipon_tracking_probill_no' onclick='sort_by("Pbnum");' style='width: 75px;'>Order #</th>
                    			<th id='shipon_tracking_service' onclick='sort_by("Servlvl");' style='width: 110px;'>{$lang.service}</th>
					<th id='shipon_tracking_status' onclick='sort_by("RecStatus");'>Status</th>
					<th id='shipon_tracking_reference' onclick='sort_by("RefNumb");' style='width: 90px;'>{$lang.ref_no}</th>
					<th id='shipon_tracking_ship_name' onclick='sort_by("ShipName");'>{$lang.ship_name}</th>
					<th id='shipon_tracking_cons_name' onclick='sort_by("ConsigName");'>{$lang.cons_name}</th>
					<th id='shipon_tracking_cons_addr' onclick='sort_by("Signature");'>{$lang.signed_by}</th>
					<th id='shipon_tracking_cons_city' onclick='sort_by("DelTime");'>{$lang.del_time}</th>
					<th id='shipon_tracking_cons_prov' onclick='sort_by("Tot");'>{$lang.amount}</th>
				</tr>
			</thead>
			<tbody>
				{if isset($data.orders[0])}
					{foreach from=$data.orders key=i item=order name=count}
						<tr onclick='get_tracking_details({$order.Pbnum});'>
							<td><span class='tracking_datetime'>{$order.ProDate}</span></td>
							<td><a class='tracking_pbnum_link' href="javascript:get_tracking_details({$order.Pbnum});">{$order.Pbnum}</a></td>
							<td style='width: 100px;'>{if isset($order.Servlvl) && $order.Servlvl != ''}<span class='tracking_service_lvl'>{*{if $order.Reference2|substr:0:2|upper == '1Z'}{assign var=curserv value="*"|explode:$order.Reference2}{$curserv.1|upper}{else}*} {$settings.services[$order.Servlvl]}{*{/if}*}</a>{else} - {/if}</td>
							<td><span class='tracking_status_{if $order.Reference2|substr:0:2|upper == '1Z'}UPS{elseif isset($order.Reference2) && $order.Reference2 != ''}PUR{else}{$order.RecStatus}{/if}' title='{if $order.Reference2|substr:0:2|upper == '1Z'}UPS{elseif isset($order.Reference2) && $order.Reference2 != ''}Purolator{else}{$settings.statuses[$order.RecStatus|upper]}{/if}'>{if $order.Reference2|substr:0:2|upper == '1Z'}UPS{elseif isset($order.Reference2) && $order.Reference2 != ''}PUR{else}{$order.RecStatus}{/if}</span></td>
							<td style='font-size: 13px;'>{if $order.RefNumb}{$order.RefNumb}{else}-{/if}</td>
                            <td style='font-size: 14px; font-weight: bold;'><a title='{$order.shipaddress|upper|escape:javascript}' class='ship_{$smarty.foreach.count.iteration}' href="javascript:get_tracking_query('{$order.ShipName|substr:0:27|upper|escape:javascript}');" style="color: #1b1b1b;">{$order.ShipName|substr:0:27|upper}</a></td> 
							<td style='font-size: 14px; font-weight: bold;'><a title="{$order.conaddress|upper|escape:javascript}" class='con_{$smarty.foreach.count.iteration}' href="javascript:get_tracking_query('{$order.ConsigName|escape:javascript}');" style="color: #ca1a36;">{$order.ConsigName|substr:0:27|upper}</a></td>
							<td style='font-size: 14px;'>{if $order.Signature != ''}<a class="shipon_pod_sig" href="http://www.gotimax.com/imgpod/{$order.Pbnum}.jpg" style="color: #0083fa; font-weight: bold;">{$order.Signature}</a>{else} - {/if}</td>
							<td>{if $order.DelTime != 0}{$order.DelTime}{else}-{/if}</td>
							<td>{if $order.RecStatus != 'QTE' && $order.Tot != 0}{$order.Tot}{else} - {/if}</td>
						</tr>
					{/foreach}
					{if $data.orders|@count lt 10}
						{for $i=$data.orders|@count to 9}
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
						{/for}
					{/if}
				{else}
					{for $i=1 to 10}
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
					{/for}
				{/if}
				
			</tbody>
		</table>
                <input type='hidden' id='shipon_tracking_date_from' name='shipon_tracking_date_from' value='{$request.start_date}' />
                <input type='hidden' id='shipon_tracking_date_to' name='shipon_tracking_date_to' value='{$request.end_date}' />
                <input type='hidden' id='shipon_tracking_sort_by' name='shipon_tracking_sort_by' value='{$request.sort_column}'>
                <input type='hidden' id='shipon_tracking_sort_order' name='shipon_tracking_sort_order' value='{$request.sort_order}' />
		{$pagination}
	</div>
</div>

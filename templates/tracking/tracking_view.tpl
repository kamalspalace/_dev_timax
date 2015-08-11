<div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container'>
		<div class='shipon_title'>
			<div class='shipon_titletext'>{$lang.tracking}</div>

			<div class='shipon_titlebuttons'>
				<div id='date-range'>
					<div id='date-range-field'><span></span><a href='#'>&#9660;</a></div>
					<div id='datepicker-calendar'></div>
				</div>
				<input type='text' id='shipon_tracking_search' class="shipon_input_search" placeholder="Search" name='shipon_tracking_search' value='{if isset($request.search_string) && $request.search_string != ''}{$request.search_string}{else}Search{/if}' style='width: 220px;' />
			</div>
		</div>
        <div id='shipon_tracking_view_header'>
       		<span id='tracking_view_h2'>ORDER #{$data.Pbnum}</span>
			
			<div id='shipon_tracking_buttons' style='float: right; margin-top: 10px;'>
	            {if isset($data.internalId)} 
	                <a class='shipon_tracking_button' href="#bol#recall-{$data.internalId}">&#xe025;</a>
	            {else}
	                <a class='shipon_tracking_button shipon_tracking_button_disable_hover' style="cursor: default;" nohref disable="disabled">&#xe025;</a>
	            {/if}    
				<a class='shipon_tracking_button' nohref onClick="get_location({$data.Pbnum});" >&#xe02c;</a>
				<a class='shipon_tracking_button' href="#dsfd">&#xe02d;</a>
				<a class='shipon_tracking_button' nohref onClick="email_order_summery('{$data.Pbnum}_{$data.bill_to_code}');">&#xe024;</a>
                <a class='shipon_tracking_button' href="#dsfd">&#xe00a;</a>
                    {if isset($data.internalId)}
			<a class='shipon_tracking_button' href="#history#view_pdf-{$data.internalId}" style='margin-right: 6px;'>&#xe000;</a>
		    {else}
			<a class='shipon_tracking_button shipon_tracking_button_disable_hover' nohref style='margin-right: 6px;'>&#xe000;</a>
		    {/if}
                <a class='shipon_tracking_button' href="#fdsa" style='margin-right: 6px;'>&#xe006;</a>
			</div>
        </div>

		<div id='shipon_tracking_view_radetail'>
			<span class='shipon_tracking_details_info'>DETAILS</span>
			<table id='shipon_tracking_details_info'>				
				<thead></thead>
				<tbody>
					<tr>
						<td class='label'>Date</td>
						<td class='value'>{$data.ProDate}</td>
						<td class='space'>&nbsp;</td>
						<td class='label'>Status</td>
						<td class='value'>{if $data.Division == 'CUR' && isset($data.Reference2) && $data.Reference2[0] != ''}{if $data.Reference2|substr:0:2|upper == '1Z'}{$data.RecStatus}{else}Purolator{/if}{else}{$settings.statuses[$data.RecStatus]}{/if}</td>
					</tr>	
					<tr>
                        			<td class='label'>Division</td>
                        			<td class='value'>{$data.Division|replace:'MES':'Messenger'|replace:'FRT':'Freight'|replace:'CUR':'Courier'}</td>
                        			<td class='space'>&nbsp;</td>
                        			<td class='label'>{if $data.Division == 'CUR'}Tracking #{else}BL #{/if}</td> 
                        			<td class='value'>{if $data.Division == 'CUR' && isset($data.Reference2) && $data.Reference2[0] != ''}{assign var=curserv value="*"|explode:$data.Reference2}{if isset($data.Reference2) && $data.Reference2|substr:0:2|upper != '1Z'}<a href="http://www.purolator.com/purolator/ship-track/tracking-details.page?pin={$data.Reference2}" target="_new">{$data.Reference2}</a>{else}<a href="http://wwwapps.ups.com/WebTracking/track?HTMLVersion=5.0&loc=en_CA&Requester=UPSHome&WBPM_lid=homepage%2Fct1.html_pnl_trk&track.x=Track&trackNums={$curserv.0|upper}" target="_new">{$curserv.0|upper}</a>{/if}{else}{if isset($data.ShBOL[0])}{$data.ShBOL}{else}-{/if}{/if}</td>
					</tr>	
                    <tr>
	                    <td class='label'>Service</td>
	                    <td class='value'>{if isset($data.Servlvl[0])}{$settings.services[$data.Servlvl]}{/if}</td>
	                    <td class='space'>&nbsp;</td>
	                    <td class='label'>Reference #</td>
	                    <td class='value'>{if $data.RefNumb|@count gt 0}{$data.RefNumb}{else}-{/if}</td>
                    </tr>
					{*
					{if $data.PupDate|@count gt 0 && $data.PupDate != '' & $data.DelDate|@count gt 0 && $data.DelTime != ''}
                    <tr>
                        <td class='label'>Pickup Time</td>
                        <td class='value'>{if $data.PupDate|@count gt 0}{$data.PupDate}{/if}{if $data.PupTime > 0} - {$data.PupTime}{/if}</td>
                        <td class='space'>&nbsp;</td>
                        <td class='label'>Delivery Time</td>
                        <td class='value'>{if $data.DelDate|@count gt 0}{$data.DelDate}{/if}{if $data.DelTime > 0} - {$data.DelTime}{/if}</td>
                    </tr>
					{/if} *}
                    <tr>
                        <td class='label'>Weight</td>
                        <td class='value'>{$data.Weight}</td>
                        <td class='space'>&nbsp;</td>
                        <td class='label'>Skids-Pcs</td>
                        <td class='value'>
							{if $data.Skid > 0 && $data.Pieces > 0}
							{$data.Skid}-{$data.Pieces}
							{elseif $data.Skid > 0 && $data.Pieces < 1}
							{$data.Skid}
							{elseif $data.Pieces > 0 && $data.Skid < 1} 
							{$data.Pieces}
							{/if}
						</td>
                    </tr>
				</tbody>
			<tfoot></tfoot>
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
				{if isset($data.StatusLog.Status[0])}
				<tbody style='border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;'>
                    {foreach from=$data.StatusLog.Status key=i item=status}
					{if $status.RecStatus == 'AVL' || $status.RecStatus == 'PPL'}{continue}{/if}
					<tr>
						<td width='15%' {if $data.RecStatus == $status.RecStatus}style='border-bottom-left-radius: 3px; border-bottom-color: #beb5a4;'{/if}>
							<u>{$status.Dt}</u>{if $status.Tm != ''}{assign var=tm value=":"|explode:$status.Tm}<br />{$tm.0}:{$tm.1} {if $tm.0 < 12}AM{else}PM{/if}{/if}
						</td>
						<td width='14%' style='text-align: left; {if $data.RecStatus == $status.RecStatus}border-bottom-color: #beb5a4;{/if}'>
							{$settings.statuses[$status.RecStatus|upper]}
						</td>
						<td width='36%' style='text-align: left; {if $data.RecStatus == $status.RecStatus}border-bottom-color: #beb5a4;{/if}'>
							{if isset($status.Location[0])}{assign var=loc value=":"|explode:$status.Location}<b>{$loc.0|replace:',':', '|upper}</b><br />{$loc.1|substr:0:27}{elseif isset($status.Olocation[0]) && $status.RecStatus == 'DSP'}{assign var=loc value=":"|explode:$status.Olocation}<b>{$loc.0|replace:',':', '|upper}</b><br />{$loc.1|substr:0:27}{/if}
						</td>
						<td width='35%' style='text-align: left; {if $data.RecStatus == $status.RecStatus}border-bottom-right-radius: 3px; border-bottom-color: #beb5a4;{/if}'>
							{if isset($status.Remarks[0]) && $status.RecStatus != 'DEL' && $status.Remarks != 'DELIVERED'}{$status.Remarks|replace:':':'<br />'}{/if}{if $status.RecStatus == 'DEL' || (isset($status.Remarks[0]) && $status.Remarks == 'DELIVERED')}{if isset($status.Remarks[0])}{$status.Remarks}{if isset($status.DropLoc)} @ {$status.DropLoc}{/if}<br />{/if}{if $data.Signature && $data.hasSignature}Signed by: <a class="{if $status.Remarks == 'DELIVERED'}shipon_ups_sig{else}shipon_pod_sig{/if}" href="{$data.imgPods}" target="_new">{if $data.Signature}{$data.Signature|upper}{else}View Signature{/if}</a>{/if}{/if}{if $status.RecStatus == 'DPU' && !isset($status.Remarks[0])}&nbsp;<br />&nbsp;{/if}
						</td>
					</tr>
					{/foreach}
				</tbody>
				{else}
				<tfoot>
                    <tr> 
                      	<td width='99%' colspan='4' style='text-align: center;'>{if isset($data.Reference2) && $data.Reference2[0]|substr:0:2|upper != '1Z' && $data.Reference2[0] != ''}Visit the following link: <a href="http://www.purolator.com/purolator/ship-track/tracking-details.page?pin={$data.Reference2}" target="_new">{$data.Reference2}</a>{else}NO STATUS UPDATES ON FILE{/if}</td>
                    </tr>
				</tfoot>
				{/if}	
            </table>

            <span class='shipon_tracking_details_rates' style='margin-top: 20px;'>RATES</span>
            {if $data.Tot > 0} {* CHECK FOR RATES.. IF NONE, THEN DON'T SHOW RATE TABLE *}
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
				{if isset($data.RateDetails.Rates.Rate[0]) && ($data.RecStatus != 'QTE' && $data.Division != 'FRT' || $data.Servlvl != 'NF')}
                <tbody>
       	        {foreach from=$data.RateDetails.Rates.Rate key=i item=rate}
                   	 <tr>
                        <td width='45%'>{if $rate.Descr1|@count gt 0}{$rate.Descr1}{else}-{/if}</td>
                        <td width='10%'>{if $rate.Quant|@count gt 0}{$rate.Quant}{else}-{/if}</td>
                        <td width='10%'>{if $rate.Weight|@count gt 0}{$rate.Weight}{else}-{/if}</td>
                        <td width='12%'>{if $rate.Rate|@count gt 0}{$rate.Rate}{else}-{/if}</td>
                        <td width='10%'>{if $rate.Uom|@count gt 0}{$rate.Uom}{else}-{/if}</td>
                        <td width='13%'>{if $rate.Tot|@count gt 0}{$rate.Tot}{else}-{/if}</td>
                    </tr>
                {/foreach}
                </tbody>
				{elseif isset($data.RateDetails.Rates.Rate) && ($data.RecStatus != 'QTE' && $data.Division != 'FRT' || $data.Servlvl != 'NF')}
				<tbody>
					<tr>
				 	 	<td width='45%'>{$data.RateDetails.Rates.Rate.Descr1}</td>
				  		<td width='10%'>{$data.RateDetails.Rates.Rate.Quant}</td>
				  		<td width='10%'>{if $data.RateDetails.Rates.Rate.Weight|@count gt 0}{$data.RateDetails.Rates.Rate.Weight}{else}-{/if}</td>
				  		<td width='12%'>{$data.RateDetails.Rates.Rate.Rate}</td>
				  		<td width='10%'>{if $data.RateDetails.Rates.Rate.Uom|@count gt 0}{$data.RateDetails.Rates.Rate.Uom}{else}-{/if}</td>
				  		<td width='13%'>{$data.RateDetails.Rates.Rate.Tot}</td>
					</tr>
				</tbody>
				{else}
				<tfoot>
					<tr>
						<td colspan='6' style='text-align: center; font-weight: normal;'>ORDER PENDING RATE QUOTE. NO RATES HAVE BEEN POSTED.</td>
					</tr>
				</tfoot>
				{/if}
				{if isset($data.RateDetails.Subtotal) && isset($data.RateDetails.Gstamt) && $data.RecStatus != 'QTE'}
				<tfoot>
					{if isset($data.RateDetails.Surcharge)}
					<tr><td colspan='5' width='87%'>Fuel SC</td><td>{$data.RateDetails.Surcharge}</td></tr>{/if}
					<tr><td colspan='5' width='87%'>Subtotal</td><td>{if isset($data.RateDetails.Subtotal)}{$data.RateDetails.Subtotal}{else}0.00{/if}</td></tr>
					<tr><td colspan='5' width='87%'>GST/HST</td><td>{if isset($data.RateDetails.Gstamt)}{$data.RateDetails.Gstamt}{else}0.00{/if}</td></tr>
					<tr><td colspan='5' width='87%'><span style='font-size: 16px;'>Total</span></td><td><span style='color: #003594; font-size: 16px; font-weight: bold;'>{if isset($data.RateDetails.Tot)}{$data.RateDetails.Tot}{else}0.00{/if}</span></td></tr>
				</tfoot>
				{/if}
			</table>
			{else}
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
				<tfoot>
	                <tr>
	                    <td width='100%' colspan='6' style='text-align: center;'>There are no rates on file yet for this shipment.</td>
	                </tr>
				</tfoot>	
			</table>
			{/if}	

			<div style="float: left; clear: both;">
			<br />&nbsp;<br />
			</div>
		</div>
                <div id='shipon_tracking_view_leftpan'>
                        <div id='shipon_tracking_view_sidetail'>
                                <span class='shipon_tracking_details_hglyph'>&#xe001;</span><span class='shipon_tracking_details_head'>SHIPPER</span>
                                <span class='shipon_tracking_details_text' style='font-weight: bold;'>{$data.ShipName|upper|substr:0:27}</span>
                                <span class='shipon_tracking_details_text'>{$data.Add1|upper}</span>
                                {if $data.Add2|@count gt 0}
                                <span class='shipon_tracking_details_text'>{$data.Add2|upper}</span>
                                {/if}
                                <span class='shipon_tracking_details_text'>{$data.City|upper}, {$data.Prv|upper}</span>
                                <span class='shipon_tracking_details_text'>{$data.Postal|upper}</span>
                                <span class='shipon_tracking_details_line'>&nbsp;</span>
                                <span class='shipon_tracking_details_hglyph'>&#xe01b;</span><span class='shipon_tracking_details_head'>CONSIGNEE</span>
                                <span class='shipon_tracking_details_text' style='font-weight: bold;'>{$data.ConsigName|substr:0:27|upper}</span>
                                <span class='shipon_tracking_details_text'>{$data.ConAdd1|upper}</span>
                                {if $data.ConAdd2|@count gt 0}
                                <span class='shipon_tracking_details_text'>{$data.ConAdd2|upper}</span>
                                {/if}
                                <span class='shipon_tracking_details_text'>{$data.ConCity|upper}, {$data.ConPrv|upper}</span>
                                <span class='shipon_tracking_details_text'>{if $data.ConPostal}{$data.ConPostal|upper}{else}&nbsp;{/if}</span>
				<span class='shipon_tracking_details_line' style='margin-top: -2px;'>&nbsp;</span>
                <span class='shipon_tracking_details_hglyph'>&#xe030;</span><span class='shipon_tracking_details_head' style='margin-bottom: 6px;'>BILL TO</span>
				<span class='shipon_tracking_details_text' style='font-weight: bold;'>{$session->bill_company|substr:0:27}</span>
				<span class='shipon_tracking_details_text'>{$session->bill_address}</span>
				<span class='shipon_tracking_details_text'>{$session->bill_city}, {$session->bill_province}</span>
				<span class='shipon_tracking_details_text'>{$session->bill_postal}</span>
				<span class='shipon_tracking_details_line'>&nbsp;</span>
                        </div>
                </div>
{*
		<div id='shipon_tracking_view_auxdetail'>
			<div id='shipon_tracking_aux_docinfo'>
				<span class='shipon_tracking_aux_head'>DOCUMENTS (3)</span>
				<span class='shipon_tracking_aux_left'>POD - 01/23/2013</span>
				<span class='shipon_tracking_aux_value'>Click Here</span>
				<span class='shipon_tracking_aux_left'>BL - 01/20/2013</span>
				<span class='shipon_tracking_aux_value'>Click Here</span>	
			</div>

		</div>
*}
                <input type='hidden' id='shipon_tracking_date_from' name='shipon_tracking_date_from' value='{$request.start_date}' />
                <input type='hidden' id='shipon_tracking_date_to' name='shipon_tracking_date_to' value='{$request.end_date}' />
                <input type='hidden' id='shipon_tracking_sort_by' name='shipon_tracking_sort_by' value='{$request.sort_column}'>
                <input type='hidden' id='shipon_tracking_sort_order' name='shipon_tracking_sort_order' value='{$request.sort_order}' />
	</div>
</div>

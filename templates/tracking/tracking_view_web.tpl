	<div class='shipon_field_container'>
		<div id='shipon_tracking_view_radetail'>
			<span class='shipon_tracking_details_info'>ORDER #{$data.Pbnum}</span>
			<table id='shipon_tracking_details_info'>				
				<tbody>
					<tr>
						<td class='label'>Date</td>
						<td class='value'>{$data.ProDate}</td>
						<td class='space'>&nbsp;</td>
						<td class='label'>Status</td>
						<td class='value'>{if $data.Division == 'CUR' && isset($data.Reference2)}{$data.RecStatus}{else}{$settings.statuses[$data.RecStatus]}{/if}</td>
					</tr>	
					<tr>
                        <td class='label'>Division</td>
                        <td class='value'>{$data.Division|replace:'MES':'Messenger'|replace:'FRT':'Freight'|replace:'CUR':'Courier'}</td>
                        <td class='space'>&nbsp;</td>
                        <td class='label'>{if $data.Division == 'CUR'}Tracking #{else}BL #{/if}</td>
                        <td class='value'>{if $data.Division == 'CUR'}{assign var=curserv value="*"|explode:$data.Reference2}{$curserv.0|upper}{else}{if isset($data.ShBOL[0])}{$data.ShBOL}{else}-{/if}{/if}</td>
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
							{if isset($status.Location[0])}{assign var=loc value=":"|explode:$status.Location}<b>{$loc.0|replace:',':', '|upper}</b><br />{$loc.1|substr:0:27}{/if}
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
                        <td width='1%'> </td>
                        <td width='99%' colspan='3' style='text-align: center;'>NO STATUS UPDATES ON FILE</td>
                    </tr>
				</tfoot>
				{/if}	
            </table>
	</div>
</div>

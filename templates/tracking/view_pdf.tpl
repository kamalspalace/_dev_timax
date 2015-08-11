<div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container' style='background-color: #CCC; background-image: none;'>
		<div class='shipon_title'>
			<div class='shipon_titletext'>Order Review</div>

			<div class="shipon_titlebuttons">
				
			</div>
		</div>
        <div id='shipon_tracking_view_header' style='margin-bottom: 20px;'>
       		<span id='tracking_view_h2'>ORDER #{$bill_id}</span>
       		{if $shipment.sent < 1}
       		<a onclick="shipon_send({$shipment.id});" id="shipon_submit_order"><span class="icomoon">&#xe01c;</span>Submit Order</a>
       		<img src="shiponline/theme/icon_loader.gif" id="shipon_submit_loader" style="float: right; margin: 10px 8px 0px 0px; display: none;">
		<a href="#bol#edit-{$shipment.id}" id="shipon_edit_order"><span class="icomoon">&#xe033;</span>Edit Order</a>
       		{/if}
		</div>

		<object data='shiponline/api?action=generate_pdf&bill_id={$ext_id}' type='application/pdf' width='960' height='750'></object>


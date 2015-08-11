{assign 'section' 'bol_address'}
	<h3>{$lang.bol_address}</h3>
	<div class='shipon_section_content' id='shipon_{$section}_section'>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 33%;'>
			{include 'shipment/boxes/division.tpl'}
			</div>

			<div class='shipon_column' style='width: 34%;'>
			{include 'shipment/boxes/pickup_appt.tpl'}
			</div>

			<div class='shipon_column' style='width: 33%;'>
			{include 'shipment/boxes/reference_no.tpl'}
			</div>
		</div>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 33%;'>
			{include 'shipment/boxes/shipper.tpl'}
			</div>

                        <div class='shipon_column' style='width: 34%;'>
			{include 'shipment/boxes/consignee.tpl'}
                        </div>

                        <div class='shipon_column' style='width: 33%;'>
			{include 'shipment/boxes/billto.tpl'}
                        </div>
		</div>

		<div class='shipon_row'>
			<div class='shipon_column' style='width: 50%;'>
			{include 'shipment/boxes/pickup_details.tpl'}
			</div>

			<div class='shipon_column' style='width: 50%;'>
			{include 'shipment/boxes/delivery_details.tpl'}
			</div>
		</div>

	</div>

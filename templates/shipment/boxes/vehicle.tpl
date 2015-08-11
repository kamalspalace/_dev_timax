{* DIV ID of panel *}
{assign 'id' 'vehicle'}
{capture name='button' assign='button'}
	<label class='shipon_titlelabel shipon_titlelabel_tg' style="margin-top: 7px; color: #eee;">{$lang.tailgate} &raquo;</label>
        <input type="checkbox" id="tailgate" name="shipon_tailgate" class="shipon_checkbox shipon_title_checkbox" value="1"  />
{/capture}

{include 'common/box_header.tpl' id=$id title=$lang.vehicle button=$button help_icon='1' width='100%'}
	<div class="shipon_fieldblock" style="width: 99%;">
            <div class="shipon_radio">
                <input type="radio" id="shipon_vehicle_car" name="shipon_equipment" value="CAR"/>
                <label for="shipon_vehicle_car">Car</label>
                <input type="radio" id="shipon_vehicle_van" name="shipon_equipment" value="VAN"/>
                <label for="shipon_vehicle_van">Van</label>
                <input type="radio" id="shipon_vehicle_5ton" name="shipon_equipment" value="St22"/>
                <label for="shipon_vehicle_5ton">Straight Truck</label>
                <input type="radio" id="shipon_vehicle_53" name="shipon_equipment" value="53v2"/>
                <label for="shipon_vehicle_53">53'</label>
            </div>
	</div>
{include 'common/box_footer.tpl'}

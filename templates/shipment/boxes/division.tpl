{* DIV ID of panel *}
{assign 'id' 'divisions'}

{include 'common/box_header.tpl' id=$id title=$lang.choose_division button='' help_icon='' width='100%'}
	<div class="shipon_fieldblock" style="width: 100%;">
            <div class="shipon_radio">
                <input type="radio" id="shipon_division_messenger" name="shipon_division" value="MES"/>
                <label for="shipon_division_messenger">Messenger</label>
                <input type="radio" id="shipon_division_courier" name="shipon_division" value="CUR"/>
                <label for="shipon_division_courier">Courier</label>
                <input type="radio" id="shipon_division_freight" name="shipon_division" value="FRT"/>
                <label for="shipon_division_freight">Freight</label>
            </div>
	</div>
{include 'common/box_footer.tpl'}

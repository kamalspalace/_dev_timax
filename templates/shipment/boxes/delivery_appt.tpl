{* DIV ID of panel *}
{assign 'id' 'delivery'}

{capture name='button' assign='button'}
	<label class='shipon_titlelabel' style="margin-top:7px; color: #eee;">{$lang.appointment} &raquo;</label>
        	<input type="checkbox" id="delivery_appointment" name="shipon_del_appt" class="shipon_checkbox shipon_title_checkbox" onclick="appointment_toggle(this);" value="1" />
{/capture}

{include 'common/box_header.tpl' id=$id title=$lang.delivery button=$button help_icon='' width='100%'}
        <div class='shipon_fieldblock' style='width: 40%;'>
            <label style="width: 40px;">{$lang.date}</label>
            <input type="text" id="shipon_del_date" name="shipon_del_date" class="shipon_input shipon_datepicker"/>
        </div>
	<div class='shipon_fieldblock' style='width: 30%;'>
            <label style="width: 40px;">{$lang.time_from}:</label>
            <input type="text" id="shipon_del_time_from" name="shipon_del_time_from" class="shipon_input shipon_timepicker" disabled="disabled"/>
	</div>
        <div class='shipon_fieldblock' style='width: 30%;'>
            <label style="width: 40px;">{$lang.time_to}:</label>
            <input type="text" id="shipon_del_time_to" name="shipon_del_time_to" class="shipon_input shipon_timepicker" disabled="disabled"/>
        </div>
{include 'common/box_footer.tpl'}

{* DIV ID of panel *}
{assign 'id' 'delivery_information'}

{include 'common/box_header.tpl' id=$id title=$lang.delivery_information button='' help_icon='1' width='100%'}
	<div class="shipon_fieldblock" style="width: 65%;">
            <label style="width: 140px; float: left; line-height: 26px;">{$lang.delivery_area}</label>
                        <select id="shipon_del_area" name="shipon_del_area" class="shipon_select" onChange="on_area_change(this);">
                                <option value=''>Please select</option>
                                <option value='Reception'>Reception</option>
                                <option value='Mailroom'>Mailroom</option>
                                <option value='Security'>Security</option>
                                <option value='Shipping'>Receiving</option>
                                <option value='Other' {if isset($preferences.shipon_settings_dad_del_area) && $preferences.shipon_settings_dad_del_area != ''}selected{/if}>Other:</option>
                        </select>
	</div>
	<div class="shipon_fieldblock" style="width: 35%;">
		<input type="text" id="shipon_del_area_other" name="shipon_del_area_other" class="shipon_input" {if isset($preferences.shipon_settings_dad_del_area) && $preferences.shipon_settings_dad_del_area != ''}value="{$preferences.shipon_settings_dad_del_area}"{else}disabled="disabled"{/if}/>
	</div>
	<div class="shipon_fieldblock" style="width: 100%;">
            <label style="width: 140px; float: left; line-height: 26px;">{$lang.delivery_instructions}</label>
            <textarea id="shipon_del_note" maxlength="60" name="shipon_del_note" class="shipon_input shipon_textarea">{$lang.del_note}</textarea>
	</div>
{include 'common/box_footer.tpl'}

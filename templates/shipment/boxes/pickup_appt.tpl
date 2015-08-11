{* DIV ID of panel *}
{assign 'id' 'pickup'}

{capture name='button' assign='button'}
{/capture}

{include 'common/box_header.tpl' id=$id title=$lang.pickup button=$button help_icon='' width='100%'}
        {* start settings field blocks *}
        <div class='shipon_fieldblock' style='width: 50%;'>
            <label style='width: 40px;'>{$lang.date}</label>
            <input type='text' id='shipon_pup_date' name='shipon_pup_date' class='shipon_input shipon_datepicker'/>
        </div>
	<div class='shipon_fieldblock' style='width: 5%;'>
	    <span class='filler'></span>
	</div>
        <div class='shipon_fieldblock' style='width: 45%;'>
            <label style='width: 70px;'>{$lang.ready_by}</label>
            <input type='text' id='shipon_pup_time' name='shipon_pup_time' class='shipon_input shipon_timepicker'/>
        </div>
{include 'common/box_footer.tpl'}

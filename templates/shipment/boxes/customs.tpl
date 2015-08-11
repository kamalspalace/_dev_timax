{* DIV ID of panel *}
{assign 'id' 'customs_broker'}

{include 'common/box_header.tpl' id=$id title=$lang.customs_broker button='' help_icon='' width='100%'}

        <div class="shipon_fieldblock" style="width: 100%;">
	  <input type="text" id="shipon_cust_broker" name="shipon_cust_broker" class="shipon_input"/>
	</div>

{include 'common/box_footer.tpl'}

{* DIV ID of panel *}
{assign 'id' 'reference_no'}

{include 'common/box_header.tpl' id=$id title=$lang.reference_no button='' help_icon='1' width='100%'}
        {* start settings field blocks *}
	<div class='shipon_fieldblock' style='width: 100%;'>
		<input type='text' id='shipon_reference' name='shipon_reference' class='shipon_input'/>
	</div>
{include 'common/box_footer.tpl'}

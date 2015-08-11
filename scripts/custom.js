function onload_custom()
{
	    var to = new Date();
	    var from = new Date(to.getTime() - 1000 * 60 * 60 * 24 * 14);

		// Don't initialize this if the object doesn't exist
		if(jQuery('.shipon_pod_sig').length)
		{
			jQuery('a.shipon_pod_sig').imgPreview({
				imgCSS: { width: 160 },
				distanceFromCursor: { top:-180,left:20 }
			});
		}

		if(jQuery('.shipon_ups_sig').length)
		{
			jQuery('a.shipon_ups_sig').imgPreview({
				imgCSS: { width: 300 },
				distanceFromCursor: { top:-80,left:-40 }
			});
		}

	    jQuery("span[class^='tracking_status_']").qtip({
		style: {classes: 'ui-tooltip-green'}

	    });
	    
	    jQuery("a[class^='con_']").qtip({
		style: {classes: 'ui-tooltip-green'}

	    });  

	    jQuery("a[class^='ship_']").qtip({
		style: {classes: 'ui-tooltip-green'}

	    });  
        
        jQuery('#datepicker-calendar').DatePicker({
          inline: true,
          date: [from, to],
          calendars: 3,
          mode: 'range',
          current: new Date(to.getFullYear(), to.getMonth() - 1, 1),
          onChange: function(dates,el) {
            // update the range display
            jQuery('#date-range-field span').text(dates[0].getDate()+' '+dates[0].getMonthName()+', '+dates[0].getFullYear()+' - '+
                                        dates[1].getDate()+' '+dates[1].getMonthName()+', '+dates[1].getFullYear());

		    window.tracking_from = eval(dates[0].getMonth()+1) + '/' + + dates[0].getDate() + '/' + dates[0].getFullYear();
		    window.tracking_to   = eval(dates[1].getMonth()+1) + '/' + dates[1].getDate() + '/' + dates[1].getFullYear();
          }
        });

 		jQuery('#datepicker-calendar').append('<div id="datepickerUpdate"><a id="datepickerBtUpdate" onclick="update_tracking();">Apply</a></div>');

        // initialize the special date dropdown field
        if(jQuery('#shipon_tracking_date_from').val() && jQuery('#shipon_tracking_date_to').val())
        {
        	var tracking_from = new Date(jQuery('#shipon_tracking_date_from').val());
            var tracking_to   = new Date(jQuery('#shipon_tracking_date_to').val());
			var tofrom = new Array(tracking_from,tracking_to);
			jQuery('#datepicker-calendar').DatePickerSetDate(tofrom);
        }
        else
        {
            var tracking_from = new Date(to.getTime() - 1000 * 60 * 60 * 24 * 14);
            var tracking_to   = new Date();
            var tofrom = new Array(tracking_from,tracking_to);
            jQuery('#datepicker-calendar').DatePickerSetDate(tofrom);
        }

        jQuery('#date-range-field span').text(tracking_from.getDate() + ' ' + tracking_from.getMonthName() + ', ' + tracking_from.getFullYear() + ' - ' +
                         				 tracking_to.getDate() + ' ' + tracking_to.getMonthName() + ', ' + tracking_to.getFullYear());

        jQuery('#date-range-field').bind('click', function(){
          jQuery('#datepicker-calendar').toggle();
          if(jQuery('#date-range-field a').text().charCodeAt(0) == 9660) { // switch to up-arrow
            jQuery('#date-range-field a').html('&#9650;');
            jQuery('#date-range-field').css({borderBottomLeftRadius:0, borderBottomRightRadius:0});
            jQuery('#date-range-field a').css({borderBottomRightRadius:0});
          } else { // switch to down-arrow
            jQuery('#date-range-field a').html('&#9660;');
            jQuery('#date-range-field').css({borderBottomLeftRadius:3, borderBottomRightRadius:3});
            jQuery('#date-range-field a').css({borderBottomRightRadius:3});
          }
          return false;
        });

		jQuery("#datepicker-calendar").bind( "clickoutside", function(event){
			jQuery(this).hide();
            jQuery('#date-range-field a').html('&#9660;');
            jQuery('#date-range-field').css({borderBottomLeftRadius:3, borderBottomRightRadius:3});
            jQuery('#date-range-field a').css({borderBottomRightRadius:3});
		});

		jQuery('.shipon_input_search').focus(function() {
			if(jQuery(this).val() == 'Search')
				jQuery(this).val('');
			else
				jQuery(this).select();
			jQuery(this).animate({color:"black"},100);
		    jQuery(this).animate({backgroundColor: "white"}, 300);
		}).blur(function() {
			if(jQuery(this).val() == '')
				jQuery(this).val('Search');
			jQuery(this).animate({color:"white"},100);
			jQuery(this).animate({backgroundColor: "black"}, 300);
		}).keydown(function() {
			if(jQuery(this).val() == 'Search')
				jQuery(this).val('');
		}).bind("clickoutside", function() {
			if(jQuery(this).val() == '')
			   jQuery(this).val('Search');
			jQuery(this).animate({color:"white"},100);
			jQuery(this).animate({backgroundColor: "black"}, 300);
		}).mouseup(function(e) {
			e.preventDefault();
		})	;

		jQuery('#shipon_history_search').keydown(function (e){
		    if(e.keyCode == 13){
		        history_search();
		    }
		});

		jQuery('#shipon_address_search').keydown(function (e){
		    if(e.keyCode == 13){
		        address_search();
		    }
		});

		jQuery('#shipon_tracking_search').keydown(function (e){
		    if(e.keyCode == 13){
		        update_tracking();
		    }
		});

    jQuery('.ui-dialog_titlebar-close', '.shipon_titlebutton').css('margin-top', '-14px !important');
    //session_timer();
}

function init_bol(action)
{
	window.goods_set_division = typeof(window.goods_set_division) == undefined ? "" : window.goods_set_division;

	jQuery("#shipon_shipper_address_content").find(".shipon_fieldblock").each(function ()
    {
        if (jQuery(this).children().length != 2) return true;
        var attr = jQuery(this).children()[1].name;
		mirror_payer_address(jQuery('#' + attr).val(), attr);
    });
	var date  = new Date();
	var date_string = date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();
	jQuery("#shipon_shipment_date").val(date_string);
	
    jQuery("#shipon_customs_broker").attr("disabled", "disabled");

	jQuery(".shipon_slider").find('a').html(jQuery(".shipon_slider").slider("value"));
	jQuery(".shipon_slider").find('a').addClass("shipon_slider_default");
	jQuery("#shipon_temp_slider" ).bind( "slide", function(event, ui)
	{
		jQuery(this).find('a').removeClass("shipon_slider_red shipon_slider_blue shipon_slider_default");
		if(ui.value > 0) jQuery(this).find('a').addClass("shipon_slider_red");
		else if(ui.value < 0)  jQuery(this).find('a').addClass("shipon_slider_blue");
		else  jQuery(this).find('a').addClass("shipon_slider_default");
	});
	
	jQuery(".shipon_slider" ).bind( "slide", function(event, ui)
	{
		jQuery(this).find('a').html(ui.value);
	});
	
	add_change_listener('#shipon_pup_date', handle_pickup_ready);
		
	jQuery("#shipon_ship_country").bind("change", handleCountryChange);
	jQuery("#shipon_cons_country").bind("change", handleCountryChange);
	
	jQuery("#shipon_ship_country").change();
	jQuery("#shipon_cons_country").change();
	
	jQuery("#shipon_pup_area").change();
	jQuery("#shipon_del_area").change();
	
	jQuery("input[name=shipon_division]").bind("click", handleDivisionChange);
	jQuery("input[name=shipon_units]").bind("click", handleUnitChange);
	
	jQuery("#shipon_pup_date").datepicker('option', 'minDate', new Date());
	//jQuery("#shipon_pickup_date").datepicker('option', 'beforeShowDay', handlePickupDates);
	jQuery("#shipon_del_date").datepicker('option', 'minDate', new Date());
	//jQuery("#shipon_delivery_date").datepicker('option', 'beforeShowDay', handlePickupDates);
	
	handle_pickup_ready();
}

function handle_section_1()
{
	if(get_selected_division() != window.goods_set_division && window.is_recall == false)
		fetch_goods_select(get_selected_division());
	

	var shipper_zone = get_zone(jQuery("#shipon_ship_postal").val());
	var consignee_zone = get_zone(jQuery("#shipon_cons_postal").val());


	jQuery("#shipon_choose_service_content").data('shipper_zone', shipper_zone);
	jQuery("#shipon_choose_service_content").data('consignee_zone', consignee_zone);
	
	jQuery('#shipon_goods_table tbody tr').each(function()
	{
		var return_serv = jQuery(this).find('td:nth-child(1) input');
		var packnum = jQuery(this).find('td:nth-child(2) input');		
		var commodity = jQuery(this).find('td:nth-child(4) select');
		
		jQuery(this).find('td:nth-child(3) select').change();
		
		jQuery(this).find('td:nth-child(4) select option:eq(1)').prop('disabled', false);
		jQuery(this).find('td:nth-child(4) select option:eq(3)').prop('disabled', false);
		jQuery(this).find('td:nth-child(4) select option:eq(4)').prop('disabled', false);
		jQuery(this).find('td:nth-child(4) select option:eq(5)').prop('disabled', false);
		jQuery(this).find('td:nth-child(4) select option:eq(6)').prop('disabled', false);
	
		return_serv.prop('disabled', true);
		packnum.prop('readonly', false);
		commodity.prop('disabled', false);
	});
	
	if(jQuery("#shipon_ship_country").val() != jQuery("#shipon_cons_country").val())
	{
		jQuery("#shipon_goods_table").find('input[id*="shipon"][id*="particulars"]').rules('add', 
		{
			required: true,
			minlength: 3
		});
	}
	else
		 jQuery("#shipon_goods_table").find('input[id*="shipon"][id*="particulars"]').rules('remove', 'required');	

	
	jQuery("#shipon_map_container").html('<a id="shipon_zone_map" class="shipon_button shipon_titlebutton map-trigger">GTA Zone Map</a>');

	jQuery('#shipon_dg_un').prop('disabled', false);
	jQuery('#shipon_templevel').prop('disabled', false);
	jQuery('#shipon_temp_slider').slider('option', 'disabled', false);
	jQuery('#shipon_skids_slider').slider('option', 'disabled', true);
	jQuery('#shipon_return_service').attr("disabled", true);
		
	switch(get_selected_division())
	{
		case 'MES':
			jQuery('#shipon_goods_table th:first').html('<a class="shipon_link" onclick="check_return()">Return Order?</a>');
			jQuery('#shipon_goods_table tr').each(function(i)
			{
				if(i > 1)
				{
					var return_serv = jQuery(this).find('td:nth-child(1) input');				
					return_serv.prop('disabled', false);
				}
				
				jQuery(this).find('td:nth-child(3) select option').prop('disabled', false);
				jQuery(this).find('td:nth-child(3) select option:eq(4)').prop('disabled', true);
			});

			handle_tender(false);

			jQuery('#shipon_goods_table tbody tr').each(function(i) {
				if(jQuery('select[name^="shipon\\[goods\\]\\[' + i + '\\]\\[commodity"]').val() == 'TND')			
					handle_tender(true);

			});			

            jQuery('#shipon_content').find('.shipon_slider').each(function ()
            {
                    var slider_min = parseInt(jQuery('#shipon_temp_slider').attr('min'));
                    var slider_max = parseInt(jQuery('#shipon_temp_slider').attr('max'));
                    jQuery(this).slider({min:slider_min, max:slider_max, change: shipon_slider_change});
            });
			
			jQuery('#shipon_return_service').attr("disabled", false);
	        //	jQuery('#shipon_skids_slider').slider('option', 'disabled', false);
	
			jQuery('#shipon_weight').rules('add', 
			{
				required: true,
				min: 1,
				max: 500
			});
		break;
		
		case 'CUR':
			jQuery('#shipon_goods_table tbody tr').each(function()
			{
				jQuery('#shipon_goods_table th:first').html('<span style="color: #e1e1e1;">Return Order?</span>');
				var packnum = jQuery(this).find('td:nth-child(2) input');
				var commodity = jQuery(this).find('td:nth-child(4) select');
				var return_serv = jQuery(this).find('td:nth-child(1) input');
				
				packnum.val(1);
				packnum.prop('readonly', true);
				
				commodity.val('gf');
				commodity.prop('disabled', false);
				jQuery(this).find('td:nth-child(4) select option:eq(1)').prop('disabled', true); //Tender
				jQuery(this).find('td:nth-child(4) select option:eq(3)').prop('disabled', true); //Cold Chain
				jQuery(this).find('td:nth-child(4) select option:eq(4)').prop('disabled', true); //Heated Freight
				jQuery(this).find('td:nth-child(4) select option:eq(5)').prop('disabled', true); //Food
				
				return_serv.prop('checked', false);
/*				
				jQuery(this).find('td:nth-child(3) select option').prop('disabled', false); //Package Type
				jQuery(this).find('td:nth-child(3) select option:eq(4)').prop('disabled', true); //Pallet
				jQuery(this).find('td:nth-child(3) select option:eq(5)').prop('disabled', true); //Empty Skid
				jQuery(this).find('td:nth-child(3) select option:eq(7)').prop('disabled', true); //Cooler
*/
			});
			
			jQuery("#shipon_map_container").html('');
			
			jQuery('#shipon_dg_un').prop('disabled', true);
			jQuery('#shipon_templevel').prop('disabled', true);
			
			jQuery('#shipon_temp_slider').slider('option', 'disabled', true);
			
			calculate_total_pieces();
			calculate_total_weight();
			
			jQuery('#shipon_weight').rules('add', 
			{
				required: true,
				min: 1,
				max: 150
			});
		break;
		
		case 'FRT':
			jQuery('#shipon_goods_table th:first').html('<a class="shipon_link" onclick="check_return()">Return Order?</a>');
            jQuery('#shipon_content').find('.shipon_slider').each(function ()
            {
                    var slider_min = parseInt(jQuery('#shipon_temp_slider').attr('min'));
                    var slider_max = parseInt(jQuery('#shipon_temp_slider').attr('max'));
                    jQuery(this).slider({min:slider_min, max:slider_max, change: shipon_slider_change});
            });

			jQuery('#shipon_weight').rules('remove', 'max');
			jQuery('#shipon_skids_slider').slider('option', 'disabled', false);
			
			jQuery('#shipon_goods_table tr').each(function()
			{
				jQuery(this).find('td:nth-child(4) select option:eq(1)').prop('disabled', true); //Tender
				
				jQuery(this).find('td:nth-child(3) select option').prop('disabled', false); //Package type
				jQuery(this).find('td:nth-child(3) select option:eq(7)').prop('disabled', true); //Cooler
				
				var return_serv = jQuery(this).find('td:nth-child(1) input');
				return_serv.prop('checked', false);
			});
		break;
	}
	
	handle_customs_broker();
	//check_return();		
	commodity_change();
	
	//generate_tooltip("#shipon_continue", "Terms and Conditions", "By clicking continue you agree that the rates are subject to change based on any information that has not been provided accurately.", "bottom right", "top right")
        generate_tooltip("#shipon_continue");
}       

function handle_section_2()
{
	window.goods_set_division = get_selected_division();
	//Start with tailgate as disabled.
    jQuery("#tailgate").prop("checked", false);
    jQuery("#tailgate").prop("disabled", true);

	var shipper_zone = jQuery("#shipon_choose_service_content").data('shipper_zone');
	var consignee_zone = jQuery("#shipon_choose_service_content").data('consignee_zone');
	goods_set_div = get_selected_division();	

	handle_services();

	jQuery("input[name=shipon_service]").bind("click", handleServiceChange);	
	jQuery("input[name=shipon_equipment]").bind("click", handleVehicleChange);

	handle_vehicles(shipper_zone, consignee_zone);
	
	clear_rates();

	switch(get_selected_division())
	{
		case 'CUR':
			jQuery('#shipon_choose_return_content').hide();
			jQuery('#shipon_vehicle_content').hide();
			jQuery('#shipon_delivery_content').hide();
			jQuery('#shipon_gps_email_content').hide();
			jQuery('#shipon_pod_email_content').hide();
		break
		default:
			jQuery('#shipon_choose_return_content').show();
			jQuery('#shipon_vehicle_content').show();
			jQuery('#shipon_delivery_content').show();
			jQuery('#shipon_gps_email_content').show();
			jQuery('#shipon_pod_email_content').show();
		break;
	}
	
	var count = jQuery('#shipon_goods_table').rowCount();
	var hasReturn = false;

    for (i = 0; i < count; i++)
    {
        var name = "#shipon\\[goods\\]\\[" + i + "\\]\\[return_good\\]";
        val = jQuery(name).attr("checked");
		if(val == 'checked') hasReturn = true;
    }
	
	if(hasReturn)
		jQuery('#shipon_return_service').prop("disabled", false)
	else
		jQuery('#shipon_return_service').prop("disabled", true)

	if(get_selected_division() == 'FRT') {
		appointment_toggle(jQuery('#delivery_appointment'));
		jQuery('#delivery_appointment').removeAttr('disabled');
	}
	
	jQuery(".map-trigger").click(function () {
        jQuery("#mask").fadeIn("slow").css({ display: "inline" });
        jQuery("#gta-map").fadeIn("slow").css({ display: "inline" });
    });

}

function handleDivisionChange()
{
	var division = get_selected_division();
	window.is_recall = false;
	
	switch(division)
	{
		case 'MES':
			jQuery('#shipon_pickup_type').attr('checked',false); handle_pickup_check();

			if(jQuery('#shipon_pup_note').prop('disabled') == true)
				jQuery('#shipon_pup_note').removeProp('disabled');
			
			if(jQuery('#shipon_del_note').prop('disabled') == true)
				jQuery('#shipon_del_note').removeProp('disabled');			
		break;

		case 'CUR':
			jQuery('#shipon_pickup_type').prop('checked',true); handle_pickup_check();

			if(jQuery('#shipon_pup_note').prop('disabled') === undefined || jQuery('#shipon_pup_note').prop('disabled') == false)
				jQuery('#shipon_pup_note').prop('disabled',true).val('');

			if(jQuery('#shipon_del_note').prop('disabled') === undefined || jQuery('#shipon_del_note').prop('disabled') == false)
				jQuery('#shipon_del_note').prop('disabled',true).val('');
		break;

		case 'FRT':
			jQuery('#shipon_pickup_type').attr('checked',false); handle_pickup_check();

                        if(jQuery('#shipon_pup_note').prop('disabled') == true)
                                jQuery('#shipon_pup_note').removeProp('disabled');
                
                        if(jQuery('#shipon_del_note').prop('disabled') == true)
                                jQuery('#shipon_del_note').removeProp('disabled'); 
		break;

	}
}

function handleUnitChange()
{
	var unit = jQuery('input[name=shipon_units]:checked').val();
	
	switch(unit)
	{
		case 'metric':
			jQuery('#shipon_dynamic_unit_weight').html('kg');
			jQuery('#shipon_dynamic_unit_weight1').html('kg');
			jQuery('#shipon_dynamic_unit_dim').html('cm');
		break;
		
		case 'imperial':
			jQuery('#shipon_dynamic_unit_weight').html('lbs');
			jQuery('#shipon_dynamic_unit_weight1').html('lbs');
			jQuery('#shipon_dynamic_unit_dim').html('in');
		break;
	}
}

function handleCountryChange(event)
{
	var id = "#" + event.target.id;
	var country = jQuery(id).val();
	var id_array = id.split('_');
	var province = "#shipon_" + id_array[1] + "_province";
	
	if(country == "US" || country == "CA") {
            jQuery(province).prop('maxlength', '2');
        }else {
		jQuery(province).removeAttr('maxlength');
        }       
}

function mirror_payer_address(val, attr)
{
//	var array = attr.split('_');
//	var name = array[array.length - 1];
//
//	var attr2 = "#shipon_payer_" + name;
//	jQuery(attr2).val(val);
}


function calculate_total_weight()
{
    window.goods_set_division = get_selected_division();
    jQuery('#shipon_weight').val(calculate_total_from_inputs('#shipon_goods_table', 'weight', ''));
    jQuery('#shipon_weight').change();
}


function commodity_change()
{
    window.goods_set_division = get_selected_division();
    var count = jQuery('#shipon_goods_table').rowCount();

	var isDNG = false;
	var isTemp = false;
	var isTender = false;

    for (i = 0; i < count; i++)
    {
        var name = "#shipon\\[goods\\]\\[" + i + "\\]\\[commodity\\]";
        val = jQuery(name).val();
		
		var type = jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[packaging\\]").val();
		jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[particulars\\]").prop('readonly', false);
		
		switch(val)
		{
			case 'DG':
				isDNG = true;
			break;
			
			case 'CC':
			case 'GFHT':
			case 'FDSTF':
				isTemp = true;
			break;

			case 'TND':
				isTender = true;
				jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[particulars\\]").val('Tender');
				jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[particulars\\]").prop('readonly', true);
			break;
			
			case 'other':
				if(type != 'other')
					jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[particulars\\]").rules('add', 
					{
						required: true,
						minlength: 3
					});
			break;
		}
		
		if(type != "other" && val != "other" && jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[particulars]\\").length != 0 && (jQuery("#shipon_ship_country").val() == jQuery("#shipon_cons_country").val()))
			jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[particulars\\]").rules('remove', 'required');
    }
	
	if(isDNG) jQuery("#shipon_dg_un").prop("disabled", false);
	else	  jQuery("#shipon_dg_un").prop("disabled", true);
	
	if(isTender)
		handle_tender(true);
	else
		handle_tender(false);

	if(isTemp)
	{
		jQuery("#shipon_templevel").prop("disabled", false);
		jQuery('#shipon_temp_slider').slider('option', 'disabled', false);
	}
	else
	{
		jQuery("#shipon_templevel").prop("disabled", true);
		jQuery('#shipon_temp_slider').slider('option', 'disabled', true);
	}
}

function package_type_change(reference)
{

	window.goods_set_division = get_selected_division();

	var commodity = jQuery(reference).parent().parent().parent().find('select[id*="shipon"][id*="commodity"]').val();	
	jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="weight"]').prop('readonly', false);	
	
	switch(jQuery(reference).val())
	{

		case 'E':
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="length"]').prop('disabled', true);
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="width"]').prop('disabled', true);
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="height"]').prop('disabled', true);
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="length"]').val('');
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="width"]').val('');
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="height"]').val('');
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="weight"]').prop('readonly', true);
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="weight"]').val(1);
		break;
		
		case 'other':
			if(commodity != "other")
				jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="particulars"]').rules('add', 
				{
					required: true,
					minlength: 3
				});
		break;
		
		default:
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="length"]').removeAttr('disabled');
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="width"]').removeAttr('disabled');
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="height"]').removeAttr('disabled');
	}
	
	if(commodity != "other" && jQuery(reference).val() != "other" && (jQuery("#shipon_ship_country").val() == jQuery("#shipon_cons_country").val()) && typeof(window.is_recall) == 'undefined')
			jQuery(reference).parent().parent().parent().find('input[id*="shipon"][id*="particulars"]').rules('remove', 'required');
		
}

function check_return()
{
	var count = jQuery('#shipon_goods_table tbody').rowCount();

	var hasReturn = false;
    for (i = 0; i < count; i++)
    {
        var name = "#shipon\\[goods\\]\\[" + i + "\\]\\[return_good\\]";
        val = jQuery(name).attr("checked");
		if(val == 'checked') hasReturn = true;
    }
	
	if(!hasReturn)
	{
		shipon_goods_add();
		jQuery('#shipon_goods_table tr:last-child td:first-child input').prop('checked', true).removeAttr('disabled');
	}
//	
//	//if(hasReturn) 	jQuery("#shipon_return_service").prop("disabled", false);
//	//else	  		jQuery("#shipon_return_service").prop("disabled", true);
}

function handle_return_validation()
{
//	var count = jQuery('#shipon_goods_table').find('tbody').children().size() - 1;
//
//	var hasReturn = false;
//    var i = 0;
//    for (i = 0; i < count; i++)
//    {
//        var name = "#shipon_goods_return-" + (i + 1);
//        val = jQuery(name).attr("checked");
//		if(val == 'checked') hasReturn = true;
//    }
//	
//	if(hasReturn)
//	{
//		jQuery('#shipon_return_service').rules('add', 
//		{
//			required: true,
//			messages: {required:'You need to select a return service to continue'}
//		});
//	}
//	else
//	{
//		jQuery('#shipon_return_service').rules('remove', 'required');
//		jQuery('#shipon_return_service').removeClass('shipon_error');
//	}
}

function handle_pickup_check()
{
	if(jQuery('#shipon_pickup_type').attr('checked') == 'checked')
	{
	 	jQuery("#shipon_pup_date").prop("disabled", true).removeClass('shipon_input').addClass('shipon_input_disabled');
		jQuery("#shipon_pup_time").prop("disabled", true);
	}
	else
	{
	 	jQuery("#shipon_pup_date").prop("disabled", false).removeClass('shipon_input_disabled').addClass('shipon_input');
		jQuery("#shipon_pup_time").prop("disabled", false);
	}
}

function handle_pickup_ready()
{
	var diff = get_date_difference_from_today(jQuery('#shipon_pup_date').val());

	if(diff != 0)
	{
		setMinTimepicker('#shipon_pup_time', new Date());
		jQuery('#shipon_pup_time').timeEntry('setTime', new Date());
	}
	else
	{
		setMinTimepicker('#shipon_pup_time', '08:00');
		jQuery('#shipon_pup_time').val('08:00');
		jQuery('#shipon_del_date').val(jQuery('#shipon_pup_date').val());		
	}
}

function get_date_difference(date1, date2)
{
	var begin = new Date(date1);
	var end = new Date(date2);
	
	return end.getTime() - begin.getTime();
}

function get_date_difference_from_today(date)
{
	var begin = new Date();
	begin.setHours(0,0,0,0);
	var end = new Date(date);
	end.setHours(0,0,0,0);
	if (end.getTime() == begin.getTime()) {
		return 1;
	} else {
		return 0;
	}
	return end.getTime() - begin.getTime();
}

function get_selected_service()
{
	return jQuery('input[name=shipon_service]:checked').val();
}

function get_selected_division()
{
	return jQuery('input[name=shipon_division]:checked').val();
}

function shipon_settings_dad_radio()
{
	var behavior = jQuery('input[name=shipon_settings_dad_beh]:checked').val();

	if(parseInt(behavior) > 0)
	{
		jQuery('.shipon_settings_left input:not([type=radio])').each(
		function()
		{
		  jQuery(this).removeAttr('disabled');
		  jQuery(this).removeAttr('value');
		});
	  jQuery('#shipon_settings_dad_country').removeAttr('disabled').attr('value','CA');
	}
	else
	{
		for(var input in window.session_address)
		{
			jQuery('#' + input).attr('value',window.session_address[input]);
			jQuery('#' + input).attr('disabled','');
		}
		
	}
}

function custom_goods_add()
{
	switch(get_selected_division())
	{
		case 'MES':
			jQuery('#shipon_goods_table tr:last-child td:first-child input').prop('disabled', false);
		break;
		
		case 'CUR':
			jQuery('#shipon_goods_table tr:last-child td:nth-child(2) input').val(1);
			calculate_total_pieces();
		break;
	}
}

function clear_rates()
{
	jQuery('#shipon_total_charge').val('');
	jQuery('#shipon_rate_fsc').val('');
	jQuery('#shipon_tax_charge').val('');
	jQuery('#shipon_rate_charge').val('');
}

function limitTimepicker(id, time_min, time_max)
{
	setMinTimepicker(id, time_min);
	setMaxTimepicker(id, time_max);
}

function setMinTimepicker(id, time_min)
{
	jQuery(id).timeEntry('change', 'minTime', time_min);
}

function setMaxTimepicker(id, time_max)
{
	jQuery(id).timeEntry('change', 'maxTime', time_max);
}

function handle_tender(is_tender)
{
    if (is_tender)
    {
        jQuery("#delivery_appointment").prop("checked", true);
        jQuery("#delivery_appointment").removeAttr("disabled");
        appointment_toggle(jQuery("#delivery_appointment"));
    }
    else
    {
        jQuery("#delivery_appointment").prop("checked", false);
        jQuery("#delivery_appointment").attr("disabled", true);
        appointment_toggle(jQuery("#delivery_appointment"));
    }
}

function handle_customs_broker()
{
    if (jQuery('#shipon_cons_country').val() != jQuery('#shipon_ship_country').val())
        jQuery("#shipon_cust_broker").removeAttr('disabled');
    else
        jQuery("#shipon_cust_broker").attr("disabled", "disabled");
}

function handle_vehicles(shipper_zone, consignee_zone)
{
	var goods_count = jQuery("#shipon_goods_table").rowCount();
	
	var volume = 0;
	
	var package_sizes = new Array();
	
	for(var i = 0; i < goods_count; i++)
	{
		var w = jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[width\\]").val();
		var h = jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[height\\]").val();
		var l = jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[length\\]").val();
		var pcs = jQuery("#shipon\\[goods\\]\\[" + i + "\\]\\[pieces\\]").val();
		
		volume += (w * h * l) * pcs;
		
		package_sizes[i] = new Array();
		package_sizes[i][0] = (w == '') ? 0 : w;
		package_sizes[i][1] = (h == '') ? 0 : h;
		package_sizes[i][2] = (l == '') ? 0 : l;
		package_sizes[i][3] = pcs;
	}

	if(volume == '') volume = 0;
	
	var vehicle_fit_level = 0;

	// car
	if (jQuery('#shipon_weight').val() > 300 || volume > 82944 || !fits(package_sizes, 48, 48, 36) || number_of_skids() > 0)
		vehicle_fit_level = 1;

		
 	// van
	if(jQuery('#shipon_weight').val() > 500 || volume > 110592 || !fits(package_sizes, 48, 48, 48))
		vehicle_fit_level = 2;
		
	// 5-ton
	if(jQuery('#shipon_weight').val() > 500 || volume > 110592 || !fits(package_sizes, 48, 96, 48) || number_of_skids() > 2)
		vehicle_fit_level = 3;
		
	// 53'
	if(jQuery('#shipon_weight').val() > 10000 || volume > 1327104 || number_of_skids() > 12)
		vehicle_fit_level = 4;
		
	jQuery("#shipon_choose_service_content").data('vehicle_fit_level', vehicle_fit_level);
	
	jQuery("#shipon_vehicle_car").button({ disabled: false });
	jQuery("#shipon_vehicle_van").button({ disabled: false });
	jQuery("#shipon_vehicle_5ton").button({ disabled: false });
	jQuery("#shipon_vehicle_53").button({ disabled: false });
	
	switch(get_selected_division())
	{
		case 'MES':
			jQuery("#shipon_vehicle_5ton").button({ disabled: true });
			jQuery("#shipon_vehicle_53").button({ disabled: true });
			
			if(vehicle_fit_level > 0)
				jQuery("#shipon_vehicle_car").button({ disabled: true });
			
			if(vehicle_fit_level > 1)
				jQuery("#shipon_vehicle_van").button({ disabled: true });
		break;
		
		case 'CUR':
			jQuery("#shipon_vehicle_car").button({ disabled: true });
			jQuery("#shipon_vehicle_van").button({ disabled: true });
			jQuery("#shipon_vehicle_5ton").button({ disabled: true });
			jQuery("#shipon_vehicle_53").button({ disabled: true });
		break;
		
		case 'FRT':

			jQuery("#shipon_vehicle_car").button({ disabled: true });
			
			if(vehicle_fit_level > 2)
			{
				jQuery("#shipon_vehicle_van").button({ disabled: true }).prop('checked',false).button('refresh');
				show_get_rates();
			}
			
			if(vehicle_fit_level > 3)
			{
				jQuery("#shipon_vehicle_5ton").button({ disabled: true }).prop('checked',false).button('refresh');
				hide_get_rates();
			}
                       
		break;
	}

	jQuery('input[name="shipon_equipment"]').prop('checked',false);

	if(get_selected_division() == 'FRT' && vehicle_fit_level == 1)
	{
		jQuery('#shipon_vehicle_5ton').prop('checked', true).trigger('click').button('refresh');
	}
	else
		jQuery('#shipon_vehicle_content :input:enabled:first').prop('checked', true).trigger('click').button('refresh');
}

function fits(package_sizes, w, h, d)
{
	var fits = true;
	
	var lowest_box = Math.min(w, h, d);
	var highest_box = Math.max(w, h, d);
	
	var dimensions_sum = w + h + d;
	
	for(var i in package_sizes)
	{
		var lowest_pack = Math.min(package_sizes[i][0], package_sizes[i][1], package_sizes[i][2]);
		var highest_pack = Math.max(package_sizes[i][0], package_sizes[i][1], package_sizes[i][2]);
		if(lowest_pack > lowest_box || highest_pack > highest_box)
			fits = false;
	}
		
	return fits;
}

function handleVehicleChange()
{       
	handleServiceChange();
}


function handleServiceChange(vehicleChange)
{
	var vehicle_fit_level = jQuery("#shipon_choose_service_content").data('vehicle_fit_level');
        
        if (get_selected_division() == 'FRT') {
			if (get_selected_service() == 'SDL') {
				var today = new Date();
				today.setHours(0,0,0,0)
				var ready_date = new Date(jQuery("#shipon_pup_date").val());
				ready_date.setHours(0,0,0,0);
				var ready_time = jQuery("#shipon_pup_time").val();

				if (today.getTime() == ready_date.getTime()) {
					var compareHourStr = new Array();
					compareHourStr = ready_time.split(':');
					if (compareHourStr[0] >= 10) {
						alert('WARNING - The cut-off time for this service was 10am. You may continue submitting your order but it may be rejected by dispatch or pushed to the next day.');
					}
				} 
			}	
			if (number_of_skids() < 3) {
                if(jQuery("input[name='shipon_equipment']:checked").val() == '53v2' || jQuery("input[name='shipon_equipment']:checked").val() == 'St22') {
                    jQuery("#shipon_freight_sameday").button({ disabled: false });
                    jQuery("#shipon_freight_rush").button({ disabled: false });
                    // jQuery("#shipon_freight_overnight").button({ disabled: false });
                } else if (jQuery("input[name='shipon_equipment']:checked").val() == 'VAN') {
                    jQuery("#shipon_freight_sameday").prop('checked',false).button({ disabled: true }).button("refresh");
                    jQuery("#shipon_freight_rush").prop('checked',false).button({ disabled: true }).button("refresh");
                    jQuery("#shipon_freight_expedite").trigger('click.button').button("refresh");
                    jQuery("#shipon_vehicle_content .shipon_radio").buttonset("refresh");
                    // jQuery("#shipon_freight_overnight").button({ disabled: true });
                }
            } 
            
        }
		//Tailgate handling
		if (get_selected_division() == 'FRT') {
			if(jQuery("input[name='shipon_equipment']:checked").val() == '53v2' || jQuery("input[name='shipon_equipment']:checked").val() == 'St22') {
				jQuery("#tailgate").prop("disabled", false);
			} else {
				if(jQuery("#tailgate").prop("checked") == true)
					jQuery("#tailgate").prop("checked", false);
				jQuery("#tailgate").prop("disabled", true);
			}	
		} else {
			if(jQuery("#tailgate").prop("checked") == true)
				jQuery("#tailgate").prop("checked", false);
			jQuery("#tailgate").prop("disabled", true);
			
		}
        
	switch(get_selected_service())
	{		
		case 'NF':			
			jQuery("#shipon_vehicle_car").button({ disabled: true }).removeAttr('checked').button("refresh");
			jQuery("#shipon_vehicle_van").button({ disabled: true }).removeAttr('checked').button("refresh");
			jQuery("#shipon_vehicle_5ton").button({ disabled: true }).removeAttr('checked').button("refresh");				
			disable_rating();
		break;

		case 'ND':
			disable_rating();
			jQuery("#shipon_vehicle_car").button({ disabled: false }).button("refresh");
			jQuery("#shipon_vehicle_van").button({ disabled: false }).button("refresh");
			jQuery("#shipon_vehicle_5ton").button({ disabled: false }).button("refresh");		
			
			jQuery("input[name='shipon_equipment'][disabled]:checked").removeAttr('checked');
			if(typeof(vehicleChange) != 'undefined'  && ! jQuery("input[name='shipon_equipment']:checked").val())
				jQuery("#shipon_vehicle_car").trigger('click.button');

        	if(typeof(vehicleChange) != 'undefined')
        		jQuery('#delivery_appointment').removeProp('disabled');
		break;

		case 'DT':
		case 'ADT':
			enable_rating();
			jQuery("#shipon_vehicle_car").button({ disabled: false }).button("refresh");
			jQuery("#shipon_vehicle_van").button({ disabled: false }).button("refresh");
			jQuery("#shipon_vehicle_5ton").button({ disabled: true }).button("refresh");
			jQuery("input[name='shipon_equipment'][disabled]:checked").removeAttr('checked');
			if(typeof(vehicleChange) != 'undefined' && ! jQuery("input[name='shipon_equipment']:checked").val())
				jQuery("#shipon_vehicle_car").trigger('click.button');
			jQuery("#shipon_vehicle_content .shipon_radio").buttonset("refresh");
		break;

		case 'EXP':
		case 'ONL':
		case 'SDL':
		case 'RSL':
			if(jQuery("input[name='shipon_equipment']:checked").val() == '53v2')
				disable_rating();
			else
				enable_rating();
		break;

		case '900':
        case '1030':
        case 'SAT':
        case 'OA':
        case 'EG':
             disable_rating();
        break; 

		default:
			enable_rating();
			
			if(get_selected_division() == 'MES')
			{
				jQuery("#shipon_vehicle_car").button({ disabled: false });
				jQuery("#shipon_vehicle_van").button({ disabled: false });
	
				if(vehicle_fit_level > 0)
					jQuery("#shipon_vehicle_car").button({ disabled: true });
				
				if(vehicle_fit_level > 1)
					jQuery("#shipon_vehicle_van").button({ disabled: true });
			}
		  break;
	}
	if(get_selected_division() == 'MES')
	{
		if(get_selected_service() != 'ND')
			handle_tender(false);
		else
			jQuery('#delivery_appointment').removeAttr('disabled');	

		jQuery('#shipon_goods_table tbody tr').each(function(i) {
			if(jQuery('select[name^="shipon\\[goods\\]\\[' + i + '\\]\\[commodity"]').val() == 'TND')			
				handle_tender(true);

		});
	}	

}

function handle_services()
{
	var shipper_zone = jQuery("#shipon_choose_service_content").data('shipper_zone');
	var consignee_zone = jQuery("#shipon_choose_service_content").data('consignee_zone');
	
	var services;
	
	if (shipper_zone != 0 && consignee_zone != 0)
	{
		var division = get_selected_division();
		services = get_local_services_for(division);
	}
	else
	{
		var division = get_selected_division();
		services = get_na_services_for(division);
	}

	jQuery("#shipon_services").html(services['radio']);
	jQuery('.shipon_radio').buttonset();
	
	handle_tooltips(services['tooltips']);
}

function number_of_skids()
{
	var skidCount = 0;	
	var goodsRows = jQuery('#shipon_goods_table').rowCount();
	for (i = 0; i < goodsRows; i++)
	{
		if(jQuery('#shipon\\[goods\\]\\[' + i + '\\]\\[packaging\\]').val() == 'S' && jQuery('#shipon\\[goods\\]\\[' + i + '\\]\\[return_good\\]').attr('checked') === undefined)
		  skidCount = skidCount + parseInt(jQuery('#shipon\\[goods\\]\\[' + i + '\\]\\[pieces\\]').val());
	}
	return skidCount;
}

function handle_tooltips(tooltips)
{ //, tooltips[i]['title'], tooltips[i]['text'], 'bottom center', 'top center' - generate_tooltop arguments
	if(typeof(tooltips) != 'undefined')
		for(var i in tooltips)
			generate_tooltip(tooltips[i]['selector']);
}

function enable_rating()
{
	if(jQuery("#shipon_rates_table_progress").length)
	     if(jQuery("#shipon_rates_table_progress").is(":visible"))
		jQuery("#shipon_rates_table_progress").hide();

        if(jQuery("#shipon_get_rates").is(":hidden"))
                jQuery("#shipon_get_rates").show();

	jQuery('#shipon_qte_only').attr('value','');

	clear_rates();
}

function disable_rating()
{
    if(jQuery("#shipon_rates_table_progress").length)
         if(jQuery("#shipon_rates_table_progress").is(":hidden"))
            jQuery("#shipon_rates_table_progress").show();
    else	
       jQuery("#shipon_rates_table_container").prepend('<div id="shipon_rates_table_progress"><img src="/shiponline/theme/px.gif" width="32" height="1"></div>');

	if(jQuery("#shipon_get_rates").is(":visible"))
		hide_get_rates();

	jQuery("#shipon_rate_fsc").val('N/A');
	jQuery("#shipon_rate_charge").val('N/A');
	jQuery("#shipon_tax_charge").val('N/A');
	jQuery("#shipon_total_charge").val('N/A');

  	alert('Shipments of this type cannot be rated online. Please continue with your order, and a customer service representative will contact you with a rate quote.');  

}

function show_get_rates()
{
		jQuery("#shipon_get_rates").show();
}

function hide_get_rates()
{
		jQuery("#shipon_get_rates").hide();
}

function get_local_services_for(division)
{
	var services;
	switch(division)
	{
		case 'MES':
			services = get_local_messenger_services();
		break;
		
		case 'CUR':
			services = get_na_curier_services();
		break;
		
		case 'FRT':
			services = get_local_freight_services();
		break;
	}
	return services;
}

function get_na_services_for(division)
{
	var services;
	switch(division)
	{
		case 'MES':
			services = get_na_messenger_services();
		break;
		
		case 'CUR':
			services = get_na_curier_services();
		break;
		
		case 'FRT':
			services = get_na_freight_services();
		break;
	}
	return services;
}

function get_local_freight_services()
{
	var services = new Array();

	services['radio'] = "";
	services['radio'] += generate_radio_button('shipon_freight_expedite', 'shipon_service', 'Expedite', 'EXP', "33%", false, true);
        
        jQuery('#shipon_return_service').empty();
        var serviceOptions = {
			''  : 'If you require a return, please choose a service',
            EXP : 'Expedite',
            RSL : 'Rush',
            SDL : 'Sameday'
            // ONL : 'Overnight'
        };
        var mySelect = jQuery('#shipon_return_service');
        jQuery.each(serviceOptions, function(val, text) {
            mySelect.append(
                jQuery('<option></option>').val(val).html(text)
            );
        });        

        if (number_of_skids() > 2) {
            services['radio'] += generate_radio_button('shipon_freight_rush', 'shipon_service', 'Rush', 'RSL', "33.1%", false, true);
            services['radio'] += generate_radio_button('shipon_freight_sameday', 'shipon_service', 'Sameday', 'SDL', "33%", false, true);
            // services['radio'] += generate_radio_button('shipon_freight_overnight', 'shipon_service', 'Overnight', 'ONL', "24.7%", false, true);
        }
        else {
            services['radio'] += generate_radio_button('shipon_freight_rush', 'shipon_service', 'Rush', 'RSL',"33%", false, false);
    	    services['radio'] += generate_radio_button('shipon_freight_sameday', 'shipon_service', 'Sameday', 'SDL', "33%", false, false);
            // services['radio'] += generate_radio_button('shipon_freight_overnight', 'shipon_service', 'Overnight', 'ONL', "24.7%", false, false);
        }

	services['tooltips'] = new Array();
	services['tooltips'][0] = generate_tooltip_data('label[for=shipon_freight_expedite]');
	services['tooltips'][1] = generate_tooltip_data('label[for=shipon_freight_rush]');
	services['tooltips'][2] = generate_tooltip_data('label[for=shipon_freight_sameday]');
	// services['tooltips'][3] = generate_tooltip_data('label[for=shipon_freight_overnight]');
	
	return services;
}

function get_na_freight_services()
{
	var services = new Array();
        jQuery('#shipon_return_service').empty();
        var serviceOptions = {
			''  : 'If you require a return, please choose a service',
            EXP : 'Expedite',
            // ONL : 'Overnight'
            SDL : 'Sameday'			
        };
        var mySelect = jQuery('#shipon_return_service');
        jQuery.each(serviceOptions, function(val, text) {
            mySelect.append(
                jQuery('<option></option>').val(val).html(text)
            );
        });        
	

	services['radio'] = "";
	if (number_of_skids() > 2) {
		services['radio'] += generate_radio_button('shipon_freight_expedite', 'shipon_service', 'Expedite', 'EXP', "49.5%", false, true);
		// services['radio'] += generate_radio_button('shipon_freight_overnight', 'shipon_service', 'Overnight', 'ONL', "33%", false, true);
		services['radio'] += generate_radio_button('shipon_freight_sameday', 'shipon_service', 'Sameday', 'SDL', "49.5%", false, true);
	} else {
		services['radio'] += generate_radio_button('shipon_freight_expedite', 'shipon_service', 'Expedite', 'EXP', "49.5%", true, true);
		// services['radio'] += generate_radio_button('shipon_freight_overnight', 'shipon_service', 'Overnight', 'ONL', "33%", false, false);
		services['radio'] += generate_radio_button('shipon_freight_sameday', 'shipon_service', 'Sameday', 'SDL', "49.5%", false, false);
	}		
	services['tooltips'] = new Array();
	services['tooltips'][0] = generate_tooltip_data('label[for=shipon_freight_expedite]');
	// services['tooltips'][1] = generate_tooltip_data('label[for=shipon_freight_overnight]');
	services['tooltips'][2] = generate_tooltip_data('label[for=shipon_freight_sameday]');
	
	return services;
}

function get_local_messenger_services()
{

    var services = new Array();
	
	var cutff = "";
	var rush = true;
	var regular = true;
	var sameday = true;
	var overnight = true;

	var ready_date = new Date(jQuery("#shipon_pup_date").val());
	var ready_time = jQuery("#shipon_pup_time").val();
	var shipper_zone = jQuery("#shipon_choose_service_content").data('shipper_zone');
	var consignee_zone = jQuery("#shipon_choose_service_content").data('consignee_zone');
	
	var within_a = shipper_zone > 7 && consignee_zone > 7 ? false : true;
	var within_b = shipper_zone > 7 && consignee_zone > 7 ? true : false;
	
	var shipper_within_a1 = shipper_zone < 4 && shipper_zone > 1 ? true : false;
	var consignee_within_a1 = consignee_within_a1 < 4 && consignee_within_a1 > 1 ? true : false;
	var within_a1 = shipper_within_a1 && consignee_within_a1 ? true : false;
	var within_a2 = shipper_within_a1 && consignee_within_a1 ? false : true;
	
	cutoff = within_a == true ? "15:00" :
			 within_b == true ? "14:30" : 
			 shipper_zone < 8 ? "14:30" : 
								"14:00";
								
	rush = ready_time < cutoff ? true : false;
	overnight = ready_time < cutoff ? true : false;
	
	cutoff = within_a == true ? "13:30" :
			 within_b == true ? "13:00" : 
			 shipper_zone < 8 ? "13:00" : 
								"12:30";
								
	regular = ready_time < cutoff ? true : false;
	
	cutoff = within_a1 == true ? "15:00" :
			 within_a2 == true ? "14:00" :
			 shipper_within_a1 ? "14:30" :
								 "13:30";
								 
	sameday = ready_time < "12:00" ? true : false;

	cutoff = within_a == true ? '16:00' : '15:30';
	
	var direct_code = ready_time < cutoff ? 'DR' : 'ADR';

	// is it a weekend?
	if(ready_date.getDay() == 6 || ready_date.getDay() == 0 || ready_time < '08:00')
	{
		rush      = false;
		regular   = false;
		sameday   = false;
		overnight = false;

		direct_code = 'ADR';
        	
        jQuery("#shipon_return_service option[value='RS']").attr("disabled","disabled");
        jQuery("#shipon_return_service option[value='RG']").attr("disabled","disabled");
        jQuery("#shipon_return_service option[value='SD']").attr("disabled","disabled");
        jQuery("#shipon_return_service option[value='ON']").attr("disabled","disabled");
	}
	jQuery('#shipon_return_service').empty();

	var serviceOptions = {};
	serviceOptions[''] = 'If you require a return, please choose a service';
	serviceOptions[direct_code] = 'Direct';
	serviceOptions['RS'] = 'Rush';
	serviceOptions['RG'] = 'Regular';
	serviceOptions['SD'] = 'Sameday';
	serviceOptions['ON'] = 'Overnight';

	var mySelect = jQuery('#shipon_return_service');
	jQuery.each(serviceOptions, function(val, text) {
		mySelect.append(
			jQuery('<option></option>').val(val).html(text)
		);
	});        
	
    services['radio'] = "";
    services['radio'] += generate_radio_button('#shipon_direct', 'shipon_service', 'Direct', direct_code, "19.8%", false, true);
    services['radio'] += generate_radio_button('#shipon_rush', 'shipon_service', 'Rush', 'RS', "19.8%", false, rush);
    services['radio'] += generate_radio_button('#shipon_regular', 'shipon_service', 'Regular', 'RG', "19.8%", false, regular);
    services['radio'] += generate_radio_button('#shipon_sameday', 'shipon_service', 'Sameday', 'SD', "19.8%", false, sameday);
    services['radio'] += generate_radio_button('#shipon_overnight', 'shipon_service', 'Overnight', 'ON', "19.8%", false, overnight);
	
	services['tooltips'] = new Array();
	services['tooltips'][0] = generate_tooltip_data('label[for=#shipon_direct]');
	services['tooltips'][1] = generate_tooltip_data('label[for=#shipon_rush]');
	services['tooltips'][2] = generate_tooltip_data('label[for=#shipon_regular]');
	services['tooltips'][3] = generate_tooltip_data('label[for=#shipon_sameday]');
	//services['tooltips'][4] = generate_tooltip_data('label[for=#shipon_overnight]', 'Overnight', 'test');
	
    return services;
}

function get_na_messenger_services()
{
	var services = new Array();
	
	var ready_date = new Date(jQuery("#shipon_pup_date").val());
	var ready_time = jQuery("#shipon_pup_time").val();
	var direct_code = 'DT';

	if(ready_date.getDay() == 6 || ready_date.getDay() == 0 || ready_time > "16:00" || ready_time < "08:30")
	{
		direct_code = 'ADT';
	}


	var next_flight_out = jQuery("#shipon_choose_service_content").data('isTender') == true ? false : true;
	jQuery('#shipon_return_service').empty();
	var serviceOptions = {};
	serviceOptions[''] = 'If you require a return, please choose a service';
	serviceOptions[direct_code] = 'Direct';
	serviceOptions['NF'] = 'Next Flight Out';

	var mySelect = jQuery('#shipon_return_service');
	jQuery.each(serviceOptions, function(val, text) {
		mySelect.append(
			jQuery('<option></option>').val(val).html(text)
		);
	});

	

	services['radio'] = "";
	services['radio'] += generate_radio_button('#shipon_direct', 'shipon_service', 'Direct', direct_code, "33.2%", false, true, '');
	services['radio'] += generate_radio_button('#shipon_nextday', 'shipon_service', 'Next Day', 'ND', "33.2%", false, true, '');
	services['radio'] += generate_radio_button('#shipon_nextflight', 'shipon_service', 'Next Flight Out', 'NF', "33.2%", false, next_flight_out, '');
	
	services['tooltips'] = new Array();
	services['tooltips'][0] = generate_tooltip_data('label[for=#shipon_direct]');
	services['tooltips'][1] = generate_tooltip_data('label[for=#shipon_nextflight]');
	
	return services;
}

function get_na_curier_services()
{
    var services = new Array();
	
    services['radio'] = "";
    services['radio'] += generate_radio_button('#shipon_9am', 'shipon_service', '9 AM', '900', "19.8%", false, true);
    services['radio'] += generate_radio_button('#shipon_10am', 'shipon_service', '10:30 AM', '1030', "19.8%", false, true);
    services['radio'] += generate_radio_button('#shipon_saturday', 'shipon_service', 'Saturday', 'SAT', "19.8%", false, true);
    services['radio'] += generate_radio_button('#shipon_noon', 'shipon_service', 'Air Express', 'OA', "19.8%", false, true);
    services['radio'] += generate_radio_button('#shipon_expedited', 'shipon_service', 'Ground', 'EG', "19.8%", false, true);

    services['tooltips'] = new Array();
    services['tooltips'][0] = generate_tooltip_data('label[for=#shipon_9am]');
    services['tooltips'][1] = generate_tooltip_data('label[for=#shipon_10am]');
    services['tooltips'][2] = generate_tooltip_data('label[for=#shipon_saturday]');
    services['tooltips'][3] = generate_tooltip_data('label[for=#shipon_noon]');
    services['tooltips'][4] = generate_tooltip_data('label[for=#shipon_expedited]');
    	
    return services;
}


function session_timer() {

jQuery('div.ui-dialog-buttonpane').appendTo(jQuery('#shipon_session_dialog'));

jQuery.idleTimeout('#shipon_session_dialog', 'div.ui-dialog-buttonpane button:first, .ui-dialog-titlebar-close', {
	idleAfter: 60, // user is considered idle after 5 minutes of no movement
	pollingInterval: 30, // a request to keepalive.php (below) will be sent to the server every minute
	warningLength: 60,
	keepAliveURL: '/shiponline/curl.php?action=session_ttl',
	serverResponseEquals: 'OK', // the response from keepalive.php must equal the text "OK"
	onTimeout: function(){
 
		// redirect the user when they timeout.
		jQuery('.ui-dialog-titlebar-close').click();
		shipon_logout();
		jQuery.idleTimer("destroy");
	},
	onIdle: function(){
 
		// show the dialog when the user idles
		jQuery(this).dialog("open");
 
	},
	onCountdown: function(counter){
 
		// update the counter span inside the dialog during each second of the countdown
		jQuery("#dialog-countdown").html(counter);
 
	},
	onResume: function(){
 
		// the dialog is closed by a button in the dialog
		// no need to do anything else
 
	}
});
}


function generate_radio_button(id, name, label, value, width, checked, enabled, onclick)
{
	checked_string = checked == true  ? "checked='checked'" : "";
	enabled_string = enabled == false ? " disabled='disabled'" : "";
	if(typeof(onclick) == "undefined")
	  onclick_string = "";
	else
	  onclick_string = " onclick='" + onclick + "'";

    return "<input type='radio' id='" + id + "' name='" + name + "' value='" + value + "' " + checked_string + enabled_string + onclick_string + "/><label for='" + id + "' style='width: " + width + "'>" + label + "</label>"
}
//selector, title, text, pos_my, pos_at
function generate_tooltip(selector) 
{   //alert(selector);
    jQuery.ajax({
      url: "/shiponline/curl.php?action=get_tooltip",
      type: "post",
      data: {'id':selector},
      dataType: "json",
      success: function(values){ //console.log(values); alert(values.id); 
	jQuery(selector).qtip(
	{
		content: 
		{
			text: values.text, 
			title: 
			{
				text: values.title, 
				button: false
			}
		}, 
		position: 
		{
			my: values.my,
			at: values.at
		},
		show:
		{
			target: jQuery(selector) 
		},
		style: {classes: 'ui-tooltip-green'}
	});          
      }
    }); 
}
//, title, text
function generate_tooltip_data(selector)
{
	var data = new Array();	
	data['selector'] = selector;
//	data['title'] = title;
//	data['text'] = text;
	
	return data;
}

function get_zone(postal_code)
{
    var zones = new Array();

    zones[1]  = ['L6H','L6Y','L6J','L6K','L6L','L6M'];
    zones[2]  = ['L4T','L4U','L4V','L5N','L5O','L5P','L5S','L5T','L5W','L7A','L6R','L6S','L6T','L6U','L6V','L6W','L6X','L6Y','L6Z'];
    zones[3]  = ['L4W','L4X','L4Y','L4Z','L5A','L5B','L5C','L5D','L5E','L5F','L5G','L5H','L5Y','L5J','L5K','L5L','L5M','L5R','L5V'];
    zones[4]  = ['L3T','L4B','M2K','L4J','L4K','L4L','M2M','M2N','M2R','M3H','M3Y','M3J','M3K','M3L','M3M','M3N'];
    zones[5]  = ['M2L','M2P','M3B','M3C','M4G','M4H','M4N','M4O','M4P','M4Q','M4R','M4S','M4T','M4U','M4V','M4W','M4X','M4Y',
                 'M5A','M5B','M5C','M5D','M5E','M5F','M5G','M5H','M5Y','M5J','M5K','M5L','M5M','M5N','M5O','M5P','M5Q','M5R','M5S','M5T','M5U','M5V','M5W','M5X',
                 'M6A','M6B','M6C','M6D','M6E','M6F','M6G','M6H','M6Y','M6J','M6K','M6L','M6M','M6N','M6O','M6P','M6Q','M6R','M6S',
                 'M7A','M7B','M7C','M7D','M7E','M7F','M7G','M7H','M7Y','M7J','M7K','M7L','M7M','M7N','M7O','M7P','M7Q','M7R','M7S','M7T','M7U','M7V','M7W','M7X','M7Y','M7Z',
                 'M8V','M8W','M8X','M8Y','M8Z','M9A','M9B','M9C','M9D','M9E','M9F','M9G','M9H','M9Y','M9J','M9K','M9L','M9M','M9N','M9O','M9P','M9Q','M9R','M9S','M9T','M9U','M9V','M9W'];
    zones[6]  = ['L3P','L3Q','L3R','L3S','L6B','L6G','M1B','M1S','M1T','M1U','M1V','M1W','M1X','M2H','M2Y','M2J'];
    zones[7]  = ['M1C','M1D','M1E','M1F','M1G','M1H','M1Y','M1J','M1K','M1L','M1M','M1N','M1O','M1P','M1Q','M1R','M3A','M4A','M4B','M4C','M4D','M4E','M4J','M4K','M4L','M4M'];
    zones[8]  = ['L4C','L4D','L4E','L4S','L6A','L6C','L6D','L6E'];
    zones[9]  = ['L1S','L1T','L1U','L1V','L1W','L1X','L1Y','L1Z'];
    zones[10] = ['L7L','L7M','L7N','L7O','L7P','L7Q','L7R','L7S','L7T','L7U','L7V','L7W','L7X','L7Y','L7Z'];
    zones[11] = ['L7G','L9T'];
    zones[12] = ['L4G'];
    zones[13] = ['L0J','L0K','L0L','L0M','L0N','L7E'];
    zones[14] = ['L8E','L8F','L8G','L8H','L8Y','L8J','L8K','L8L','L8M','L8N','L8O','L8P','L8Q','L8R','L8S','L8T','L8U','L8V','L8W','L9A','L9B','L9C','L9H','L9Y','L9J'];
    zones[15] = ['L3X','L3Y'];
    zones[16] = ['L1G','L1H','L1Y','L1J','L1K','L1L'];
    zones[17] = ['L1N', 'L1O', 'L1P', 'L1Q', 'L1R'];

    var zone = 0;

    var code = postal_code.substring(0, 3);
    code = code.toUpperCase();
    for (var i = 1; i < 18; i++)
    {
        for (var p in zones[i])
        {
            if (zones[i][p] == code) zone = i;
        }
    }

    return zone;
}

function get_location(order_id) {
    jQuery.ajax({
      url: "/shiponline/curl.php?action=get_location",
      type: "post",
      data: {'pbnum':order_id},
      dataType: "json",
      success: function(values){  
          var htmlstring = '<div id="map" style="width: 400px; height: 400px"></div>'; 

                    
          jQuery('#shipon_return').html(htmlstring);

          var myLatlng = new google.maps.LatLng(values.data.latitude, values.data.longitude);

          var myOptions = {
                zoom: 16,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById("map"), myOptions);
          var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
          });         
          
          init_google_popup();
          shipon_open_popup('#shipon_return');
      }
    });   
}

function init_google_popup()
{
    jQuery('#shipon_return').dialog({ autoOpen: false, modal: true, closeOnEscape: true, minHeight: 450, minWidth:450, resizable: false,
        open: function (event, ui) { jQuery(".ui-dialog-titlebar-close").show();}
    });
}

function init_order_email_popup()
{
    jQuery('#shipon_return').dialog({ autoOpen: false, modal: true, closeOnEscape: true, minHeight: 100, minWidth:450, resizable: false,
        open: function (event, ui) { jQuery(".ui-dialog-titlebar-close").show();}
    });
}

/* Please do not delet it. It initializes the google graphs */
function initialize() {
}

function email_order_summery(ext_id) {
    var htmlString  = '<div>';
    htmlString +=   '<label>Please enter recipitent Email address.</label><br />';
    htmlString +=   '<form id="orderEmail" name="orderEmail"><input  type="text"  id="order_info_email" name="order_info_email" />';
    htmlString +=   '<input type="button" onclick="validateEmail(\''+ext_id+ '\');" id="order_email" name="order_email" value="Send Order" />';
    htmlString +=   '</form>';
    htmlString +=   '</div>';  
    jQuery('#shipon_return').html(htmlString);
    init_order_email_popup();
    shipon_open_popup('#shipon_return');        
}

function validateEmail(ext_id){	 
    var inputEmail = jQuery('#order_info_email').val();
    var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    if(pattern.test(inputEmail)){ 
        jQuery('#error_message').css('display','none');
        jQuery('.ui-dialog-titlebar-close').click();
        var post = {
            view:'tracking',
            view_action: 'send_order_summery',
            data : {'id': ext_id,'email':inputEmail}
        };        
        load_content('view',post, function (data) {
          
        });
        
    }else{  
        jQuery('#order_info_email').addClass("shipon_error");
		jQuery('#order_info_email').qtip(
        {
            content: 
            {
                text: 'Please enter valid email address.', 
                title: 
                {
                    text: 'Error', 
                    button: false
                }
            }, 
            position: 
            {
                my: 'bottom center',
                at: 'top center'
            },
            show:
            {
                target: jQuery('#order_info_email') 
            },
            style: {classes: 'ui-tooltip-green'}
        });          
    }
}

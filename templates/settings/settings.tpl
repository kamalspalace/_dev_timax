{* DIV ID of panel *}
{assign 'id' 'account_setting'}

{literal}
<script type="text/javascript">
  window.session_address = [];
  window.session_address['shipon_settings_dad_company']  = '{/literal}{$session->bill_company}{literal}';
  window.session_address['shipon_settings_dad_contact']  = '{/literal}{$session->bill_contact}{literal}';
  window.session_address['shipon_settings_dad_phone']    = '{/literal}{$session->bill_phone}{literal}';
  window.session_address['shipon_settings_dad_ext']      = '';
  window.session_address['shipon_settings_dad_email']    = '';
  window.session_address['shipon_settings_dad_street1']  = '{/literal}{$session->bill_address}{literal}';
  window.session_address['shipon_settings_dad_street2']  = '';
  window.session_address['shipon_settings_dad_city']     = '{/literal}{$session->bill_city}{literal}';
  window.session_address['shipon_settings_dad_prov']     = '{/literal}{$session->bill_province}{literal}';
  window.session_address['shipon_settings_dad_postal']   = '{/literal}{$session->bill_postal}{literal}';
  setup_autocomplete();
</script>
{/literal}

<div class='shipon_field' id='shipon_settings_content' style='width: 100%;'>
  <div class='shipon_field_container'>
    <div class='shipon_title'>
      <div class='shipon_titletext'>{$lang.preferences}</div>
		</div>
	</div>
  <div id='shipon_settings_view_header'>
	  <span class="shipon_setting_option_selected">General</span>
	</div>

	<div id='shipon_settings_general'>
	<form name='shipon_account_settings' id='shipon_account_settings' class='shipon_form' method='post'>
	  <div class="shipon_settings_left">
          <div class='shipon_fieldblock' style='width: 475px;'>
            <label style='width: 485px; padding: 2px 0px; text-decoration: underline; font-weight: bold; float: left;'>Default Shipper Address:</label>
        	</div>

          <div class='shipon_fieldblock' style='width: 90px;'>
      		  <label style='width: 100px; float: left; padding: 2px 0px 3px 0px;'>Behaviour</label>
          </div>
          <div class='shipon_fieldblock' style='width: 170px; padding-top: 5px !important;'>
      		  <input type='radio' id='shipon_settings_dab' name='shipon_settings_dad_beh' value='0' style='width:20px !important; float: left;' onchange='shipon_settings_dad_radio();' {if ! isset($preferences->shipon_settings_dad_beh) || $preferences->shipon_settings_dad_beh < 1}checked="checked"{/if} />
            <label for='shipon_settings_dab' style='margin-top: 1px;'>&nbsp;Use Billing Address</label>
          </div>
          <div class='shipon_fieldblock' style='width: 170px; padding-top: 5px !important;'>
      		  <input type='radio' id='shipon_settings_dac' name='shipon_settings_dad_beh' value='1' style='width:20px !important; float: left;' onchange='shipon_settings_dad_radio()' {if isset($preferences->shipon_settings_dad_beh) && $preferences->shipon_settings_dad_beh == 1}checked="checked"{/if} />
            <label for='shipon_settings_dac' style='margin-top: 1px; float: left;'>&nbsp;Use Address Below</label>
          </div>
          <div class='shipon_fieldblock' style='width: 24px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Company</label>
            <input type='text' id='shipon_settings_dad_company' name='shipon_settings_dad_company' class='shipon_input' style='width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_company)}value='{$session->bill_company}' disabled{else}value='{$preferences->shipon_settings_dad_company}'{/if} />
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Contact</label>
            <input type='text' id='shipon_settings_dad_contact' name='shipon_settings_dad_contact' class='shipon_input' style='width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_contact)}value='{$session->bill_contact}' disabled{else}value='{$preferences->shipon_settings_dad_contact}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 270px;'>
            <label style='width: 100px; float: left;'>Phone</label>
            <input type='text' id='shipon_settings_dad_phone' name='shipon_settings_dad_phone' onKeyDown="formatTelNo (this);" class='shipon_input' {if ! isset($preferences->shipon_settings_dad_phone)}value='{$session->bill_phone}' disabled{else}value='{$preferences->shipon_settings_dad_phone}'{/if} />
          </div>

          <div class='shipon_fieldblock' style='width: 158px; margin-left: 2px;'>        
            <label style='width: 55px; float: left;'>Ext</label>
            <input type='text' id='shipon_settings_dad_ext' name='shipon_settings_dad_ext' class='shipon_input' maxlength='4' style='width:84px !important;' {if ! isset($preferences->shipon_settings_dad_company)}disabled{else}value='{$preferences->shipon_settings_dad_company}'{/if} />
          </div>

          <div class='shipon_fieldblock' style='width: 31px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Email</label>
            <input type='text' id='shipon_settings_dad_email' name='shipon_settings_dad_email' class='shipon_input' style='width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_email)}disabled{else}value='{$preferences->shipon_settings_dad_email}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>


          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Street 1</label>
            <input type='text' id='shipon_settings_dad_street1' name='shipon_settings_dad_street1' class='shipon_input' style='width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_street1)}value='{$session->bill_address}' disabled{else}value='{$preferences->shipon_settings_dad_street1}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>


          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Street 2</label>
            <input type='text' id='shipon_settings_dad_street2' name='shipon_settings_dad_street2' class='shipon_input' style='width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_street2)}disabled{else}value='{$preferences->shipon_settings_dad_street2}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>City</label>
            <input type='text' id='shipon_settings_dad_city' name='shipon_settings_dad_city' class='shipon_input' style='width: 318px !important;' {if ! isset($preferences->shipon_settings_dad_city)}value='{$session->bill_city}' disabled{else}value='{$preferences->shipon_settings_dad_city}'{/if}/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          



	        <div class='shipon_fieldblock' style='width: 260px;'>
        	   <label style='width: 100px; float: left;'>Province</label>
         	   <input type='text' id='shipon_settings_dad_prov' name='shipon_settings_dad_prov' class='shipon_input shipon_autocomplete' autocomplete_type='province' modifier='shipon_settings_dad_country' maxlength='2' {if ! isset($preferences->shipon_settings_dad_prov)}value='{$session->bill_province}' disabled{else}value='{$preferences->shipon_settings_dad_prov}'{/if}/>
          </div>
          <input type='hidden' id='shipon_settings_dad_country' name='shipon_settings_dad_country' value='CA' disabled />
          <div class='shipon_fieldblock' style='width: 169px; margin-left: 2px;'>                          
      		   <label style='width: 60px; float: left;'>Postal</label>
             <input type='text' id='shipon_settings_dad_postal' name='shipon_settings_dad_postal' class='shipon_input' maxlength='6' style='width:89px !important;' {if ! isset($preferences->shipon_settings_dad_postal)}value='{$session->bill_postal}' disabled{else}value='{$preferences->shipon_settings_dad_postal}'{/if} />
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          

          <div class='shipon_fieldblock' style='width: 210px;'>
             <label style='width: 100px; float: left;'>Pickup Area</label>
             <input type='text' id='shipon_settings_dad_pup_area' name='shipon_settings_dad_pup_area' class='shipon_input' {if ! isset($preferences->shipon_settings_dad_pup_area)}value=''{else}value='{$preferences->shipon_settings_dad_pup_area}'{/if} />
          </div>
          <div class='shipon_fieldblock' style='width: 210px; margin-left: 2px;'>                          
             <label style='width: 100px; float: left;'>Delivery Area</label>
             <input type='text' id='shipon_settings_dad_del_area' name='shipon_settings_dad_del_area' class='shipon_input' {if ! isset($preferences->shipon_settings_dad_del_area)}value=''{else}value='{$preferences->shipon_settings_dad_del_area}'{/if} />
          </div>
          <div class='shipon_fieldblock' style='width: 40px; padding-top: 10px !important;'>
            &nbsp;
          </div>  
          <div class='shipon_fieldblock' style='width: 475px;'>
            <label style='width: 100px; float: left;'>&nbsp;</label>
            <a class="address_save shipon_button" onclick="shipon_save_settings()" style='margin-bottom: 4px;'> Save </a>
          </div>
	  </div>
	  <div class="shipon_settings_right">
          <div class='shipon_fieldblock' style='width: 100%;'>
            <label style='width: 100%; padding: 2px 0px; text-decoration: underline; font-weight: bold; float: left;'>Email Recipients:</label>
      		</div>

          <div class='shipon_fieldblock' style='width: 100%;'>
            <label style='width: 100%; margin: 2px 0px 3px 0px; float: left;'>NOTE: Add multiple emails by seperating them with a comma.</label>
          </div>

	        <div class='shipon_fieldblock' style='width: 100%;'>
        	  <label style='width: 100px; float: left;'>{$lang.direct}</label>
     	   	  <input type='text' id='shipon_settings_mail_dr' name='shipon_settings_mail_dr' class='shipon_input shipon_settings_input' {if isset($preferences->shipon_settings_mail_dr)}value='{$preferences->shipon_settings_mail_dr}'{/if}/>
        	</div>

        	<div class='shipon_fieldblock' style='width: 100%;'>
        	  <label style='width: 100px; float: left;'>{$lang.rush}</label>
        	  <input type='text' id='shipon_settings_mail_rs' name='shipon_settings_mail_rs' class='shipon_input shipon_settings_input' {if isset($preferences->shipon_settings_mail_rs)}value='{$preferences->shipon_settings_mail_rs}'{/if} />
        	</div>

        	<div class='shipon_fieldblock' style='width: 100%;'>
        	  <label style='width: 100px; float: left;'>{$lang.regular}</label>
        	  <input type='text' id='shipon_settings_mail_rg' name='shipon_settings_mail_rg' class='shipon_input shipon_settings_input' {if isset($preferences->shipon_settings_mail_rg)}value='{$preferences->shipon_settings_mail_rg}'{/if} />
        	</div>

        	<div class='shipon_fieldblock' style='width: 100%;'>
          	  <label style='width: 100px; float: left;'>{$lang.sameday}</label>
          	  <input type='text' id='shipon_settings_mail_sd' name='shipon_settings_mail_sd' class='shipon_input shipon_settings_input' {if isset($preferences->shipon_settings_mail_sd)}value='{$preferences->shipon_settings_mail_sd}'{/if} />
        	</div>

        	<div class='shipon_fieldblock' style='width: 100%;'>
          	  <label style='width: 100px; float: left;'>{$lang.overnight}</label>
          	  <input type='text' id='shipon_settings_mail_on' name='shipon_settings_mail_on' class='shipon_input shipon_settings_input' {if isset($preferences->shipon_settings_mail_on)}value='{$preferences->shipon_settings_mail_on}'{/if} />
        	</div>

                <div class='shipon_fieldblock' style='width: 100%;'>
                  <label style='width: 100px; float: left;'>Next Day</label>
                  <input type='text' id='shipon_settings_mail_nd' name='shipon_settings_mail_nd' class='shipon_input shipon_settings_input' {if isset($preferences->shipon_settings_mail_nd)}value='{$preferences->shipon_settings_mail_nd}'{/if} />
                </div>

          <div class='shipon_fieldblock' style='width: 100%;'>
            <label style='width: 100px; float: left;'>{$lang.courier}</label>
            <input type='text' id='shipon_settings_mail_cur' name='shipon_settings_mail_cur' class='shipon_input shipon_settings_input' {if isset($preferences->shipon_settings_mail_cur)}value='{$preferences->shipon_settings_mail_cur}'{/if} />
          </div>

          <div class='shipon_fieldblock' style='width: 100%;'>
            <label style='width: 100px; float: left;'>{$lang.freight}</label>
            <input type='text' id='shipon_settings_mail_frt' name='shipon_settings_mail_frt' class='shipon_input shipon_settings_input' {if isset($preferences->shipon_settings_mail_frt)}value='{$preferences->shipon_settings_mail_frt}'{/if} />
          </div>

                <div class='shipon_fieldblock' style='width: 100%;'>
                  <label style='width: 100px; float: left;'>{$lang.all_delivered}</label>
                  <input type='text' id='shipon_settings_mail_all' name='shipon_settings_mail_all' class='shipon_input shipon_settings_input' {if isset($preferences->shipon_settings_mail_all)}value='{$preferences->shipon_settings_mail_all}'{/if} />
                </div>

          <div class='shipon_fieldblock' style='width: 100%;'>
            <label style='width: 103px; float: left;'>&nbsp;</label>
            <a class="address_save shipon_button" onclick="shipon_save_settings()" style='margin-bottom: 4px;'> Save </a>
          </div>

	</form>
{include 'common/box_footer.tpl'}
<div id="shipon_pages">&nbsp;</div>

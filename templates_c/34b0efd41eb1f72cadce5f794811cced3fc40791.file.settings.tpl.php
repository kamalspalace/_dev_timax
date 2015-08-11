<?php /* Smarty version Smarty-3.1.12, created on 2013-11-13 18:16:05
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/settings/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11872851335182e93504e654-85529418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b0efd41eb1f72cadce5f794811cced3fc40791' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/settings/settings.tpl',
      1 => 1384383248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11872851335182e93504e654-85529418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5182e9351300d4_92082786',
  'variables' => 
  array (
    'session' => 0,
    'lang' => 0,
    'preferences' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5182e9351300d4_92082786')) {function content_5182e9351300d4_92082786($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('account_setting', null, 0);?>


<script type="text/javascript">
  window.session_address = [];
  window.session_address['shipon_settings_dad_company']  = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_company;?>
';
  window.session_address['shipon_settings_dad_contact']  = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_contact;?>
';
  window.session_address['shipon_settings_dad_phone']    = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_phone;?>
';
  window.session_address['shipon_settings_dad_ext']      = '';
  window.session_address['shipon_settings_dad_email']    = '';
  window.session_address['shipon_settings_dad_street1']  = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_address;?>
';
  window.session_address['shipon_settings_dad_street2']  = '';
  window.session_address['shipon_settings_dad_city']     = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_city;?>
';
  window.session_address['shipon_settings_dad_prov']     = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_province;?>
';
  window.session_address['shipon_settings_dad_postal']   = '<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_postal;?>
';
  setup_autocomplete();
</script>


<div class='shipon_field' id='shipon_settings_content' style='width: 100%;'>
  <div class='shipon_field_container'>
    <div class='shipon_title'>
      <div class='shipon_titletext'><?php echo $_smarty_tpl->tpl_vars['lang']->value['preferences'];?>
</div>
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
      		  <input type='radio' id='shipon_settings_dab' name='shipon_settings_dad_beh' value='0' style='width:20px !important; float: left;' onchange='shipon_settings_dad_radio();' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_beh)||$_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_beh<1){?>checked="checked"<?php }?> />
            <label for='shipon_settings_dab' style='margin-top: 1px;'>&nbsp;Use Billing Address</label>
          </div>
          <div class='shipon_fieldblock' style='width: 170px; padding-top: 5px !important;'>
      		  <input type='radio' id='shipon_settings_dac' name='shipon_settings_dad_beh' value='1' style='width:20px !important; float: left;' onchange='shipon_settings_dad_radio()' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_beh)&&$_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_beh==1){?>checked="checked"<?php }?> />
            <label for='shipon_settings_dac' style='margin-top: 1px; float: left;'>&nbsp;Use Address Below</label>
          </div>
          <div class='shipon_fieldblock' style='width: 24px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Company</label>
            <input type='text' id='shipon_settings_dad_company' name='shipon_settings_dad_company' class='shipon_input' style='width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_company)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_company;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_company;?>
'<?php }?> />
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Contact</label>
            <input type='text' id='shipon_settings_dad_contact' name='shipon_settings_dad_contact' class='shipon_input' style='width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_contact)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_contact;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_contact;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 270px;'>
            <label style='width: 100px; float: left;'>Phone</label>
            <input type='text' id='shipon_settings_dad_phone' name='shipon_settings_dad_phone' onKeyDown="formatTelNo (this);" class='shipon_input' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_phone)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_phone;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_phone;?>
'<?php }?> />
          </div>

          <div class='shipon_fieldblock' style='width: 158px; margin-left: 2px;'>        
            <label style='width: 55px; float: left;'>Ext</label>
            <input type='text' id='shipon_settings_dad_ext' name='shipon_settings_dad_ext' class='shipon_input' maxlength='4' style='width:84px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_company)){?>disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_company;?>
'<?php }?> />
          </div>

          <div class='shipon_fieldblock' style='width: 31px; padding-top: 10px !important;'>
            &nbsp;
          </div>

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Email</label>
            <input type='text' id='shipon_settings_dad_email' name='shipon_settings_dad_email' class='shipon_input' style='width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_email)){?>disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_email;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>


          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Street 1</label>
            <input type='text' id='shipon_settings_dad_street1' name='shipon_settings_dad_street1' class='shipon_input' style='width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_street1)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_address;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_street1;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>


          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>Street 2</label>
            <input type='text' id='shipon_settings_dad_street2' name='shipon_settings_dad_street2' class='shipon_input' style='width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_street2)){?>disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_street2;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          

          <div class='shipon_fieldblock' style='width: 438px;'>
            <label style='width: 100px; float: left;'>City</label>
            <input type='text' id='shipon_settings_dad_city' name='shipon_settings_dad_city' class='shipon_input' style='width: 318px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_city)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_city;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_city;?>
'<?php }?>/>
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          



	        <div class='shipon_fieldblock' style='width: 260px;'>
        	   <label style='width: 100px; float: left;'>Province</label>
         	   <input type='text' id='shipon_settings_dad_prov' name='shipon_settings_dad_prov' class='shipon_input shipon_autocomplete' autocomplete_type='province' modifier='shipon_settings_dad_country' maxlength='2' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_prov)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_province;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_prov;?>
'<?php }?>/>
          </div>
          <input type='hidden' id='shipon_settings_dad_country' name='shipon_settings_dad_country' value='CA' disabled />
          <div class='shipon_fieldblock' style='width: 169px; margin-left: 2px;'>                          
      		   <label style='width: 60px; float: left;'>Postal</label>
             <input type='text' id='shipon_settings_dad_postal' name='shipon_settings_dad_postal' class='shipon_input' maxlength='6' style='width:89px !important;' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_postal)){?>value='<?php echo $_smarty_tpl->tpl_vars['session']->value->bill_postal;?>
' disabled<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_postal;?>
'<?php }?> />
          </div>

          <div class='shipon_fieldblock' style='width: 30px; padding-top: 10px !important;'>
            &nbsp;
          </div>          

          <div class='shipon_fieldblock' style='width: 210px;'>
             <label style='width: 100px; float: left;'>Pickup Area</label>
             <input type='text' id='shipon_settings_dad_pup_area' name='shipon_settings_dad_pup_area' class='shipon_input' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_pup_area)){?>value=''<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_pup_area;?>
'<?php }?> />
          </div>
          <div class='shipon_fieldblock' style='width: 210px; margin-left: 2px;'>                          
             <label style='width: 100px; float: left;'>Delivery Area</label>
             <input type='text' id='shipon_settings_dad_del_area' name='shipon_settings_dad_del_area' class='shipon_input' <?php if (!isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_del_area)){?>value=''<?php }else{ ?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_dad_del_area;?>
'<?php }?> />
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
        	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['direct'];?>
</label>
     	   	  <input type='text' id='shipon_settings_mail_dr' name='shipon_settings_mail_dr' class='shipon_input shipon_settings_input' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_dr)){?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_dr;?>
'<?php }?>/>
        	</div>

        	<div class='shipon_fieldblock' style='width: 100%;'>
        	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['rush'];?>
</label>
        	  <input type='text' id='shipon_settings_mail_rs' name='shipon_settings_mail_rs' class='shipon_input shipon_settings_input' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_rs)){?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_rs;?>
'<?php }?> />
        	</div>

        	<div class='shipon_fieldblock' style='width: 100%;'>
        	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['regular'];?>
</label>
        	  <input type='text' id='shipon_settings_mail_rg' name='shipon_settings_mail_rg' class='shipon_input shipon_settings_input' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_rg)){?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_rg;?>
'<?php }?> />
        	</div>

        	<div class='shipon_fieldblock' style='width: 100%;'>
          	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['sameday'];?>
</label>
          	  <input type='text' id='shipon_settings_mail_sd' name='shipon_settings_mail_sd' class='shipon_input shipon_settings_input' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_sd)){?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_sd;?>
'<?php }?> />
        	</div>

        	<div class='shipon_fieldblock' style='width: 100%;'>
          	  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['overnight'];?>
</label>
          	  <input type='text' id='shipon_settings_mail_on' name='shipon_settings_mail_on' class='shipon_input shipon_settings_input' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_on)){?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_on;?>
'<?php }?> />
        	</div>

                <div class='shipon_fieldblock' style='width: 100%;'>
                  <label style='width: 100px; float: left;'>Next Day</label>
                  <input type='text' id='shipon_settings_mail_nd' name='shipon_settings_mail_nd' class='shipon_input shipon_settings_input' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_nd)){?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_nd;?>
'<?php }?> />
                </div>

          <div class='shipon_fieldblock' style='width: 100%;'>
            <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['courier'];?>
</label>
            <input type='text' id='shipon_settings_mail_cur' name='shipon_settings_mail_cur' class='shipon_input shipon_settings_input' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_cur)){?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_cur;?>
'<?php }?> />
          </div>

          <div class='shipon_fieldblock' style='width: 100%;'>
            <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['freight'];?>
</label>
            <input type='text' id='shipon_settings_mail_frt' name='shipon_settings_mail_frt' class='shipon_input shipon_settings_input' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_frt)){?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_frt;?>
'<?php }?> />
          </div>

                <div class='shipon_fieldblock' style='width: 100%;'>
                  <label style='width: 100px; float: left;'><?php echo $_smarty_tpl->tpl_vars['lang']->value['all_delivered'];?>
</label>
                  <input type='text' id='shipon_settings_mail_all' name='shipon_settings_mail_all' class='shipon_input shipon_settings_input' <?php if (isset($_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_all)){?>value='<?php echo $_smarty_tpl->tpl_vars['preferences']->value->shipon_settings_mail_all;?>
'<?php }?> />
                </div>

          <div class='shipon_fieldblock' style='width: 100%;'>
            <label style='width: 103px; float: left;'>&nbsp;</label>
            <a class="address_save shipon_button" onclick="shipon_save_settings()" style='margin-bottom: 4px;'> Save </a>
          </div>

	</form>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="shipon_pages">&nbsp;</div>
<?php }} ?>
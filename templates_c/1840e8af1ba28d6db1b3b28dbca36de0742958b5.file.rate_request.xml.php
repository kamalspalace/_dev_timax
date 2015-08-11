<?php /* Smarty version Smarty-3.1.12, created on 2013-09-07 22:12:56
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/integration/degama/rate_request.xml" */ ?>
<?php /*%%SmartyHeaderCode:61286525516479d9006dd2-54794435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1840e8af1ba28d6db1b3b28dbca36de0742958b5' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/integration/degama/rate_request.xml',
      1 => 1375065313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61286525516479d9006dd2-54794435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516479d9299122_24042728',
  'variables' => 
  array (
    'shipment' => 0,
    'good' => 0,
    'total_pieces' => 0,
    'total_weight' => 0,
    'total_skids' => 0,
    'division' => 0,
    'service' => 0,
    'is_tender' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516479d9299122_24042728')) {function content_516479d9299122_24042728($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["division"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipment']->value['division'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["service"] = new Smarty_variable($_smarty_tpl->tpl_vars['shipment']->value['service'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["total_pieces"] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars["total_weight"] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars["total_skids"] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars["is_tender"] = new Smarty_variable(0, null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('goods', null, null); ob_start(); ?>
  <?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipment']->value['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['good']->key;
?>
     <GOOD>
         <return><?php echo $_smarty_tpl->tpl_vars['good']->value['return_good'];?>
</return>
         <pieces><?php echo $_smarty_tpl->tpl_vars['good']->value['pieces'];?>
</pieces>
         <commodity><?php echo $_smarty_tpl->tpl_vars['good']->value['commodity'];?>
</commodity>
         <packaging><?php echo $_smarty_tpl->tpl_vars['good']->value['packaging'];?>
</packaging>
         <description><?php echo $_smarty_tpl->tpl_vars['good']->value['particulars'];?>
</description>
         <length><?php if ($_smarty_tpl->tpl_vars['good']->value['length']>0){?><?php echo $_smarty_tpl->tpl_vars['good']->value['length'];?>
<?php }?></length>
         <width><?php if ($_smarty_tpl->tpl_vars['good']->value['width']>0){?><?php echo $_smarty_tpl->tpl_vars['good']->value['width'];?>
<?php }?></width>
         <height><?php if ($_smarty_tpl->tpl_vars['good']->value['height']>0){?><?php echo $_smarty_tpl->tpl_vars['good']->value['height'];?>
<?php }?></height>
         <weight><?php if ($_smarty_tpl->tpl_vars['good']->value['weight']>0){?><?php echo $_smarty_tpl->tpl_vars['good']->value['weight'];?>
<?php }?></weight>
         <?php $_smarty_tpl->tpl_vars["total_pieces"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['total_pieces']->value+$_smarty_tpl->tpl_vars['good']->value['pieces']), null, 0);?>
         <?php $_smarty_tpl->tpl_vars["total_weight"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['total_weight']->value+$_smarty_tpl->tpl_vars['good']->value['weight']), null, 0);?>
         <?php if ($_smarty_tpl->tpl_vars['good']->value['packaging']=='S'){?><?php $_smarty_tpl->tpl_vars["total_skids"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['total_skids']->value+$_smarty_tpl->tpl_vars['good']->value['pieces']), null, 0);?><?php }?>
         <?php if ($_smarty_tpl->tpl_vars['good']->value['commodity']=='TND'){?><?php $_smarty_tpl->tpl_vars["is_tender"] = new Smarty_variable(1, null, 0);?><?php }?>
     </GOOD>
  <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>




 
<?php if ($_smarty_tpl->tpl_vars['total_skids']->value>0&&$_smarty_tpl->tpl_vars['total_skids']->value<3&&$_smarty_tpl->tpl_vars['shipment']->value['equipment']=='VAN'){?>

   
   <?php if ($_smarty_tpl->tpl_vars['shipment']->value['service']=='EXP'){?><?php $_smarty_tpl->tpl_vars['service'] = new Smarty_variable("DR", null, 0);?><?php }?>

   
   <?php if ($_smarty_tpl->tpl_vars['shipment']->value['service']=='RSL'){?><?php $_smarty_tpl->tpl_vars['service'] = new Smarty_variable("RS", null, 0);?><?php }?>

   
   <?php if ($_smarty_tpl->tpl_vars['shipment']->value['service']=='SDL'){?><?php $_smarty_tpl->tpl_vars['service'] = new Smarty_variable("SD", null, 0);?><?php }?>

   
   <?php if ($_smarty_tpl->tpl_vars['shipment']->value['service']=='ONL'){?><?php $_smarty_tpl->tpl_vars['service'] = new Smarty_variable("ON", null, 0);?><?php }?>

   
   <?php $_smarty_tpl->tpl_vars['division'] = new Smarty_variable("MES", null, 0);?>
<?php }?>

<REQUEST>
	<NEW_ORDER>
		<?php if (isset($_smarty_tpl->tpl_vars['shipment']->value['ext_id'])){?><PBNUM><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ext_id'];?>
</PBNUM>
		<?php }?><DETAILS>
			<division><?php echo $_smarty_tpl->tpl_vars['division']->value;?>
</division>
			<service><?php echo $_smarty_tpl->tpl_vars['service']->value;?>
</service>
         <reference_no><?php echo $_smarty_tpl->tpl_vars['shipment']->value['reference'];?>
</reference_no>
			<return_service><?php echo $_smarty_tpl->tpl_vars['shipment']->value['service_ret'];?>
</return_service>
			<declared_value><?php echo $_smarty_tpl->tpl_vars['shipment']->value['dec_value'];?>
</declared_value>
			<pod_email><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pod_email'];?>
</pod_email>
			<gps_email><?php echo $_smarty_tpl->tpl_vars['shipment']->value['gps_email'];?>
</gps_email>
		</DETAILS>
		<SHIPPER>
                        <name><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_name'];?>
</name>
                        <contact><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_contact'];?>
</contact>
                        <address1><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_street1'];?>
</address1>
                        <address2><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_street2'];?>
</address2>
                        <city><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_city'];?>
</city>
                        <province><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_province'];?>
</province>
                        <country><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_country'];?>
</country>
                        <postal><?php echo substr($_smarty_tpl->tpl_vars['shipment']->value['ship_postal'],0,3);?>
 <?php echo substr($_smarty_tpl->tpl_vars['shipment']->value['ship_postal'],3,3);?>
</postal>
                        <phone><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_phone'];?>
</phone>
                        <ext><?php echo $_smarty_tpl->tpl_vars['shipment']->value['ship_ext'];?>
</ext>
		</SHIPPER>
		<CONSIGNEE>
                        <name><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_name'];?>
</name>
                        <contact><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_contact'];?>
</contact>
                        <address1><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_street1'];?>
</address1>
                        <address2><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_street2'];?>
</address2>
                        <city><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_city'];?>
</city>
                        <province><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_province'];?>
</province>
                        <country><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_country'];?>
</country>
                        <postal><?php echo substr($_smarty_tpl->tpl_vars['shipment']->value['cons_postal'],0,3);?>
 <?php echo substr($_smarty_tpl->tpl_vars['shipment']->value['cons_postal'],3,3);?>
</postal>
                        <phone><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_phone'];?>
</phone>
                        <ext><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cons_ext'];?>
</ext>
		</CONSIGNEE>
		<BILL_TO>
			<bill_to_code><?php echo $_smarty_tpl->tpl_vars['shipment']->value['bill_account'];?>
</bill_to_code>
		</BILL_TO>
		<FREIGHT_DETAILS>
			<GOODS>	
			  <?php echo Smarty::$_smarty_vars['capture']['goods'];?>

			</GOODS>			
			<DETAILS>
				<equipment><?php if ($_smarty_tpl->tpl_vars['shipment']->value['service']!='NF'){?><?php echo $_smarty_tpl->tpl_vars['shipment']->value['equipment'];?>
<?php }?></equipment>
            <tailgate><?php echo $_smarty_tpl->tpl_vars['shipment']->value['tailgate'];?>
</tailgate>
				<temp><?php echo $_smarty_tpl->tpl_vars['shipment']->value['temp_value'];?>
</temp>
				<level_of_temp><?php echo $_smarty_tpl->tpl_vars['shipment']->value['temp_level'];?>
</level_of_temp>
				<broker><?php if ($_smarty_tpl->tpl_vars['shipment']->value['cust_broker']!=0){?><?php echo $_smarty_tpl->tpl_vars['shipment']->value['cust_broker'];?>
<?php }?></broker>
				<total_pieces><?php echo $_smarty_tpl->tpl_vars['total_pieces']->value;?>
</total_pieces>
				<total_weight><?php echo $_smarty_tpl->tpl_vars['total_weight']->value;?>
</total_weight>
				<number_of_skids><?php echo $_smarty_tpl->tpl_vars['total_skids']->value;?>
</number_of_skids>
				<un_number><?php if ($_smarty_tpl->tpl_vars['shipment']->value['dg_un']!=0){?><?php echo $_smarty_tpl->tpl_vars['shipment']->value['dg_un'];?>
<?php }?></un_number>
				<UOM>imperial</UOM>
			</DETAILS>
		</FREIGHT_DETAILS>
		<PICKUP>
                        <appointment_required>1</appointment_required>
                        <date><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pup_date'];?>
</date>
                        <time_from><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pup_time'];?>
</time_from>
                        <area><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pup_area'];?>
</area>
                        <instructions><?php echo $_smarty_tpl->tpl_vars['shipment']->value['pup_note'];?>
</instructions>
		</PICKUP>
		<DELIVERY>
                        <appointment_required><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_appt'];?>
</appointment_required>
                        <date><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_date'];?>
</date>
                        <time_from><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_time_from'];?>
</time_from>
                        <time_to><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_time_to'];?>
</time_to>
                        <area><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_area'];?>
</area>
                        <instructions><?php echo $_smarty_tpl->tpl_vars['shipment']->value['del_note'];?>
<?php if ($_smarty_tpl->tpl_vars['is_tender']->value>0){?>THIS IS A TENDER<?php }?></instructions>
		</DELIVERY>
	</NEW_ORDER>
</REQUEST>
<?php }} ?>
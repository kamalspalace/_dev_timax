<?php /* Smarty version Smarty-3.1.12, created on 2013-04-04 09:52:23
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/goods/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82384619650f8e3403ec6f6-64626719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '938c42f642959412b57c23ae5fad6390f8740abd' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/goods/table.tpl',
      1 => 1365083521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82384619650f8e3403ec6f6-64626719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f8e340416d60_70111728',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f8e340416d60_70111728')) {function content_50f8e340416d60_70111728($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('goods_table', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['goods_table'],'button'=>'','help_icon'=>'','width'=>'100%'), 0);?>


        <div class="shipon_fieldblock" style="width: 100%;">
		<table id='shipon_goods_table'>
		  <thead>
		    <tr>
		      <th width='5%'><?php echo $_smarty_tpl->tpl_vars['lang']->value['return'];?>
</th>
		      <th width='10%'><?php echo $_smarty_tpl->tpl_vars['lang']->value['num_of_packages'];?>
</th>
		      <th width='15%'><?php echo $_smarty_tpl->tpl_vars['lang']->value['package_type'];?>
</th>
		      <th width='15%'><?php echo $_smarty_tpl->tpl_vars['lang']->value['commodity_type'];?>
</th>
		      <th width='24%'>Description of goods</th>
		      <th width='18%'><?php echo $_smarty_tpl->tpl_vars['lang']->value['dimensions'];?>
</th>
		      <th width='8%'><?php echo $_smarty_tpl->tpl_vars['lang']->value['total_weight'];?>
</th>
	              <th width='10px'></th>
		    </tr>
		  </thead>
		  <tbody>
	        <tr>
	        <td>
		  <div class='shipon_td_container'>
		    <input type="checkbox" id="shipon[goods][0][return_good]" name="shipon[goods][0][return_good]" class="shipon_input shipon_table_input" onclick="handle_return_validation()"/>
		  </div>
		</td>
		<td>
		  <div class='shipon_td_container'>
		    <input type="text" id="shipon[goods][0][pieces]" name="shipon[goods][0][pieces]" class="shipon_input shipon_table_input" style="width: 100%;" onkeyup="calculate_total_pieces()" />
		  </div>
		</td>
		<td>
		  <div class='shipon_td_container'>
		    <select name="shipon[goods][0][packaging]" id="shipon[goods][0][packaging]" class="shipon_select shipon_good_type" onchange="package_type_change(this)">
      	       	      <option value="E">Envelope</option>
	              <option value="B">Box</option>
	              <option value="crate">Crate</option>
	              <option value="pack">Package</option>
	              <option value="S">Pallet/Skid</option>
	              <option value="empty_skid">Empty Skid</option>
	              <option value="R">Roll</option>
	              <option value="cooler">Cooler</option>
	              <option value="fjacket">Film Jacket</option>
	              <option value="other">Other</option>
	            </select>
		  </div>
		</td>
		<td>
		  <div class='shipon_td_container'>
		    <select id="shipon[goods][0][commodity]" name="shipon[goods][0][commodity]" class="shipon_select" onchange="commodity_change()">
      	      	      <option value="GF">General Freight</option>
              	      <option value="TND">Tender</option>
               	      <option value="DG">Dangerous Goods</option>
              	      <option value="CC">Cold Chain</option>
              	      <option value="GFHT">Heated Freight</option>
                      <option value="FDSTF">Food</option>
                      <option value="OTHER">Other</option>
            	    </select>
	  	  </div>
	        </td>
		<td>
	  	  <div class='shipon_td_container'>
	    	    <input type="text" id="shipon[goods][0][particulars]" name="shipon[goods][0][particulars]" class="shipon_input shipon_table_input" style="width: 100%;" />
	  	  </div>
	       </td>
	       <td>
	         <div class='shipon_td_container'>
            	   <input type="text" id="shipon[goods][0][length]" name="shipon[goods][0][length]" class="shipon_input shipon_table_input" style="width: 33%;" maxlength="5" /><input type="text" id="shipon[goods][0][width]" name="shipon[goods][0][width]" class="shipon_input shipon_table_input" style="width: 33%;" maxlength="5" /><input type="text" id="shipon[goods][0][height]" name="shipon[goods][0][height]" class="shipon_input shipon_table_input" style="width: 33%;" maxlength="5" />
	        </div>
	      </td>
              <td>
	        <div class='shipon_td_container'>
	          <input type="text" id="shipon[goods][0][weight]" name="shipon[goods][0][weight]" class="shipon_input shipon_table_input" style="width: 100%;" maxlength="5" onkeyup="calculate_total_weight()" />
	       </div>
	     </td>
	     <td></td>
           </tr>
         </tbody>
	</table>
	</div>

	<a class='shipon_button' id='shipon_goods_add' onclick='shipon_goods_add()'> Add </a>
	<input type='hidden' id='shipon_goods_max_rows' value='3' />

        <div class="shipon_fieldblock" style="width: 100%;">
	  <hr />
	</div>

        <div class="shipon_fieldblock" style="width: 20%;">
            <label style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['total_pieces'];?>
:</label>
            <input type="text" id="shipon_pieces" name="shipon_pieces" class="shipon_input" readonly="readonly"/>
	</div>

	<div class="shipon_fieldblock" style="width: 5.25%;">
	  <span class="filler"></span>
	</div>

        <div class="shipon_fieldblock" style="width: 30.5%;">
          <label style="width: 120px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['equipment'];?>
:</label>
          <select name="shipon_equipment" id="shipon_equipment" class="shipon_select">
            <option value="0">None</option>
            <option value="flatbed">Flat Bed</option>
            <option value="rack_tarp">Rack and Tarp</option>
            <option value="floats">Floats</option>
            <option value="rester">Rester</option>
            <option value="stepdeck">Step Deck</option>
            <option value="container">Container</option>
            <option value="lowboy">LowBoy/RGN</option>
            <option value="streight">Straight Truck</option>
            <option value="doubledrop">Double Drop</option>
            <option value="superb">Super B</option>
            <option value="other">Other</option>
          </select>
	</div>

        <div class="shipon_fieldblock" style="width: 5.25%;">
          <span class="filler"></span>
        </div>

        <div class="shipon_fieldblock" style="width: 19%;">
	  <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['total_weight'];?>
:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" id="shipon_weight" name="shipon_weight" class="shipon_input" style="color: #222;" readonly="readonly"/>
	</div>

        <div class="shipon_fieldblock" style="width: 5%;">
	  <span id="shipon_dynamic_unit_weight">lbs</span>  
	</div>

        <div class="shipon_fieldblock" style="width: 15%;">
	  <div class="shipon_radio">
            <input type="radio" id="shipon_unit_metric" name="shipon_units" value="metric"/>
            <label for="shipon_unit_metric">Metric</label>
            <input type="radio" id="shipon_unit_imperial" name="shipon_units" value="imperial" checked="checked"/>
            <label for="shipon_unit_imperial">Imperial</label>
          </div>
	</div>

        <div class="shipon_fieldblock" style="width: 20%; clear: both;">
          <label style="width: 100px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['un_number'];?>
:</label>
          <input type="text" id="shipon_unnumber" name="shipon_dg_un" class="shipon_input" maxlength="6" disabled="disabled" />
	</div>

        <div class="shipon_fieldblock" style="width: 5.25%;">
          <span class="filler"></span>
        </div>

	<div class="shipon_fieldblock" style="width: 30.5%;">
        	<label style="width: 120px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['level_of_temp'];?>
:</label>
                <select id="shipon_templevel" name="shipon_temp_level" class="shipon_select">
                  <option value="fresh">Fresh</option>
                  <option value="frozen">Frozen</option>
                  <option value="ambient">Ambient</option>
                  <option value="2-8">2-8</option>
                </select>
	</div>

        <div class="shipon_fieldblock" style="width: 5.25%;">
          <span class="filler"></span>
        </div>

	<div class="shipon_fieldblock" style="width: 39%;">
            <label style="width:100px;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['temperature'];?>
:</label>
            <div class="shipon_slider" id="shipon_temp_slider" name="shipon_temp" min="-20" max="35"></div>
            <input type="hidden" id="shipon_temp" name="shipon_temp_value"></input>
	</div>
	

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
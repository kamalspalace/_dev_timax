{* DIV ID of panel *}
{assign 'id' 'goods_table'}

{include 'common/box_header.tpl' id=$id title=$lang.goods_table button='' help_icon='' width='100%'}

        <div class="shipon_fieldblock" style="width: 100%;">
		<table id='shipon_goods_table'>
		  <thead>
		    <tr>
		      <th width='5%'>{$lang.return}</th>
		      <th width='10%'>{$lang.num_of_packages}</th>
		      <th width='15%'>{$lang.package_type}</th>
		      <th width='15%'>{$lang.commodity_type}</th>
		      <th width='23%'>Description of goods</th>
		      <th width='18%'>{$lang.dimensions}</br><span id='shipon_dynamic_unit_dim'>in</span></th>
		      <th width='8%'>{$lang.total_weight}</br><span id='shipon_dynamic_unit_weight1'>lbs</span></th>
	              <th width='16px'></th>
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
		    <input type="text" id="shipon[goods][0][pieces]" name="shipon[goods][0][pieces]" class="shipon_input shipon_table_input emptyCheck0" style="width: 100%;" onkeyup="calculate_total_pieces()" />
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
	     <td><a class='shipon_icon' onclick='shipon_goods_add();'><img src='images/btnAddPkg.png'></a></td>
           </tr>
         </tbody>
	</table>
	</div>

	<!--a class='shipon_button' id='shipon_goods_add' onclick='shipon_goods_add()'> Add </a-->
	<input type='hidden' id='shipon_goods_max_rows' value='4' />

        <div class="shipon_fieldblock" style="width: 100%;">
	  <hr />
	</div>

        <div class="shipon_fieldblock" style="width: 20%;">
            <label style="width: 100px;">{$lang.total_pieces}:</label>
            <input type="text" id="shipon_pieces" name="shipon_pieces" class="shipon_input" readonly="readonly"/>
	</div>

	<div class="shipon_fieldblock" style="width: 5.25%;">
	  <span class="filler"></span>
	</div>

        <div class="shipon_fieldblock" style="width: 30.5%;">
		 <label style="width: 120px;">&nbsp;</label>	
          <!--label style="width: 120px;">{$lang.equipment}:</label>
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
          </select-->
	</div>

        <div class="shipon_fieldblock" style="width: 5.25%;">
          <span class="filler"></span>
        </div>

        <div class="shipon_fieldblock" style="width: 19%;">
	  <label>{$lang.total_weight}:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
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
          <label style="width: 100px;">{$lang.un_number}:</label>
          <input type="text" id="shipon_dg_un" name="shipon_dg_un" class="shipon_input" maxlength="6" disabled="disabled" />
	</div>

        <div class="shipon_fieldblock" style="width: 5.25%;">
          <span class="filler"></span>
        </div>

	<div class="shipon_fieldblock" style="width: 30.5%;">
        	<label style="width: 120px;">{$lang.level_of_temp}:</label>
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
            <label style="width:100px;">{$lang.temperature}:</label>
            <div class="shipon_slider" id="shipon_temp_slider" name="shipon_temp" min="-20" max="35"></div>
            <input type="hidden" id="shipon_temp" name="shipon_temp_value"></input>
	</div>
	

{include 'common/box_footer.tpl'}

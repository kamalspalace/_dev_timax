<?php /* Smarty version Smarty-3.1.12, created on 2013-01-17 17:17:59
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/box_division.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55600163250f871c70700d6-49489649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad07d1a4cb37e6b6b911600b4819f662701a848' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/box_division.tpl',
      1 => 1358461051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55600163250f871c70700d6-49489649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f871c70888f9_48575051',
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f871c70888f9_48575051')) {function content_50f871c70888f9_48575051($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('divisions', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['choose_division'],'button'=>'','help_icon'=>'','width'=>'100%'), 0);?>

	<div class="shipon_fieldblock" style="width: 100%;">
            <div class="shipon_radio">
                <input type="radio" id="shipon_division_messenger" name="shipon_division" value="MES"/>
                <label for="shipon_division_messenger">Messenger</label>
                <input type="radio" id="shipon_division_courier" name="shipon_division" value="CUR"/>
                <label for="shipon_division_courier">Courier</label>
                <input type="radio" id="shipon_division_freight" name="shipon_division" value="FRT"/>
                <label for="shipon_division_freight">Freight</label>
            </div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
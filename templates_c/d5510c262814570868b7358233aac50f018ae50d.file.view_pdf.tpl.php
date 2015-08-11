<?php /* Smarty version Smarty-3.1.12, created on 2013-10-14 23:41:47
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/tracking/view_pdf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23048590525cb97b373766-45467593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5510c262814570868b7358233aac50f018ae50d' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/tracking/view_pdf.tpl',
      1 => 1381808359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23048590525cb97b373766-45467593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bill_id' => 0,
    'shipment' => 0,
    'ext_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_525cb97b3afd49_33155042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525cb97b3afd49_33155042')) {function content_525cb97b3afd49_33155042($_smarty_tpl) {?><div class='shipon_field' id='shipon_tracking_content' style='width: 100%;'>
	<div class='shipon_field_container' style='background-color: #CCC; background-image: none;'>
		<div class='shipon_title'>
			<div class='shipon_titletext'>Order Review</div>

			<div class="shipon_titlebuttons">
				
			</div>
		</div>
        <div id='shipon_tracking_view_header' style='margin-bottom: 20px;'>
       		<span id='tracking_view_h2'>ORDER #<?php echo $_smarty_tpl->tpl_vars['bill_id']->value;?>
</span>
       		<?php if ($_smarty_tpl->tpl_vars['shipment']->value['sent']<1){?>
       		<a onclick="shipon_send(<?php echo $_smarty_tpl->tpl_vars['shipment']->value['id'];?>
);" id="shipon_submit_order"><span class="icomoon">&#xe01c;</span>Submit Order</a>
       		<img src="shiponline/theme/icon_loader.gif" id="shipon_submit_loader" style="float: right; margin: 10px 8px 0px 0px; display: none;">
		<a href="#bol#edit-<?php echo $_smarty_tpl->tpl_vars['shipment']->value['id'];?>
" id="shipon_edit_order"><span class="icomoon">&#xe033;</span>Edit Order</a>
       		<?php }?>
		</div>

		<object data='shiponline/api?action=generate_pdf&bill_id=<?php echo $_smarty_tpl->tpl_vars['ext_id']->value;?>
' type='application/pdf' width='960' height='750'></object>

<?php }} ?>
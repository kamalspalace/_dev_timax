<?php /* Smarty version Smarty-3.1.12, created on 2013-01-18 02:13:14
         compiled from "/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/declared_value.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169406253950f8f60a17eb37-50535433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33ac1d73890a48ec610affa04a76f8a7878d5f11' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/shipment/boxes/declared_value.tpl',
      1 => 1358493152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169406253950f8f60a17eb37-50535433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f8f60a197470_97207489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f8f60a197470_97207489')) {function content_50f8f60a197470_97207489($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable('declared_value', null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['declared_value'],'button'=>'','help_icon'=>'','width'=>'100%'), 0);?>


        <div class="shipon_fieldblock" style="width: 100%;">
	  <label>$</label>
          <input type="text" id="shipon_declared_value" name="shipon_dec_value" class="shipon_input"/>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/box_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>
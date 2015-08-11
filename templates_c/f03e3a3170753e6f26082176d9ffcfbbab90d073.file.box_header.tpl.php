<?php /* Smarty version Smarty-3.1.12, created on 2013-10-09 13:34:00
         compiled from "/home/shipon/public_html/new_bol/_pro-timax/templates/common/box_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59410290052559388dc6406-64539813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f03e3a3170753e6f26082176d9ffcfbbab90d073' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_pro-timax/templates/common/box_header.tpl',
      1 => 1381339968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59410290052559388dc6406-64539813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'width' => 0,
    'title' => 0,
    'help_icon' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52559388de7308_27273260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52559388de7308_27273260')) {function content_52559388de7308_27273260($_smarty_tpl) {?><div class='shipon_field' id='shipon_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_content' style='width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
;'>
  <div class='shipon_field_container'>
    <div class='shipon_title'>
      <div class='shipon_titletext'><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['help_icon']->value){?>
  	<span id='shipon_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_tip' class='shipon_help_icon'>?</span>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['button']->value){?>
	<div class='shipon_titlebuttons'><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</div>
	<?php }?>	
       </div>
       <div class='shipon_field_content'>
<?php }} ?>
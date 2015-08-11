<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 21:07:00
         compiled from "/home/shipon/public_html/new_bol/timax/templates/common/box_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208291257550f48a0346c650-23926883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2b873fa539aaebef0cc614977b23bd71c8f5afd' => 
    array (
      0 => '/home/shipon/public_html/new_bol/timax/templates/common/box_header.tpl',
      1 => 1358215614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208291257550f48a0346c650-23926883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f48a034995d4_92936546',
  'variables' => 
  array (
    'id' => 0,
    'width' => 0,
    'title' => 0,
    'help_icon' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f48a034995d4_92936546')) {function content_50f48a034995d4_92936546($_smarty_tpl) {?><div class='shipon_field' id='shipon_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_content' style='width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
;'>
  <div class='shipon_field_container'>
    <div class='shipon_title'>
      <div class='shipon_titletext'><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['help_icon']->value){?>
  	<span id='shipon_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_tip' class='shipon_icon shipon_help_icon'>?</span>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['button']->value){?>
	<div class='shipon_titlebuttons'><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</div>
	<?php }?>	
       </div>
       <div class='shipon_field_content'>
<?php }} ?>
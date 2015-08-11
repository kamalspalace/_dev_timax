<?php /* Smarty version Smarty-3.1.12, created on 2013-04-09 16:39:00
         compiled from "/home/shipon/public_html/new_bol/_dev-timax/templates/emails/email_title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86401988651647c6408f893-43403793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64cc447deb006443ae88a2242d44be65bf95da1f' => 
    array (
      0 => '/home/shipon/public_html/new_bol/_dev-timax/templates/emails/email_title.tpl',
      1 => 1365526598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86401988651647c6408f893-43403793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subject' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51647c64097f79_08296886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51647c64097f79_08296886')) {function content_51647c64097f79_08296886($_smarty_tpl) {?><a href="http://www.timax.com"><img style="float: left; clear: both; width: 240px; height: 60px;" border="0" target="_new" src="cid:logo"></a>
<div class="spacer" style="font-size: 1px; height: 1px;">
  &nbsp;
</div>
<table cellspacing="0" cellpadding="0" style="width: 625px; clear: both;" border="0">
   <tr>
	<td style="float: left; color: #fff; width: 621px; text-align: left; margin-left: 0px; background-color: #b2a169; font-weight: bold; padding: 3px 0px 4px 4px;"><?php echo strtoupper($_smarty_tpl->tpl_vars['subject']->value);?>
</td>
   </tr>
</table>
<?php }} ?>
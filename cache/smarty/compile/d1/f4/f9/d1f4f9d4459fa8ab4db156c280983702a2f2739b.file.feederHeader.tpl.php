<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 18:39:40
         compiled from "C:\wamp\www\prestashop\modules\feeder\feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2679251a23acceef6f6-56177323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1f4f9d4459fa8ab4db156c280983702a2f2739b' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\feeder\\feederHeader.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2679251a23acceef6f6-56177323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a23acd00b136_00294016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a23acd00b136_00294016')) {function content_51a23acd00b136_00294016($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>
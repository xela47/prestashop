<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 19:38:59
         compiled from "C:\wamp\www\prestashop\admin3984\themes\default\template\controllers\stats\stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:777951a248b397ff97-43748025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc4d9d607447cdb3d54da13b0e8e9821f9fa8de8' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin3984\\themes\\default\\template\\controllers\\stats\\stats.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777951a248b397ff97-43748025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a248b3a415b7_52159739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a248b3a415b7_52159739')) {function content_51a248b3a415b7_52159739($_smarty_tpl) {?>

<div>
	<?php if ($_smarty_tpl->tpl_vars['module_name']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active){?>
			<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

		<?php }?>
	<?php }else{ ?>
		<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
	<?php }?>
</div>
</div>
</div>


<?php }} ?>
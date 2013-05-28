<?php /* Smarty version Smarty-3.1.13, created on 2013-05-27 14:14:07
         compiled from "C:\wamp\www\prestashop\modules\blockcustomerprivacy\blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167851a34e0fbca322-18513730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d48f64ba38974ec785d6200862b22f11689c748' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockcustomerprivacy\\blockcustomerprivacy.tpl',
      1 => 1366892590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167851a34e0fbca322-18513730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a34e0fcaa3d5_30503054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a34e0fcaa3d5_30503054')) {function content_51a34e0fcaa3d5_30503054($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>
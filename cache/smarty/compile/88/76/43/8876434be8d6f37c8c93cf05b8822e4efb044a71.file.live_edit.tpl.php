<?php /* Smarty version Smarty-3.1.13, created on 2013-05-27 13:48:54
         compiled from "C:\wamp\www\prestashop\themes\live_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3064651a348268ac877-10401753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8876434be8d6f37c8c93cf05b8822e4efb044a71' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\live_edit.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3064651a348268ac877-10401753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad' => 0,
    'id_shop' => 0,
    'hook_list' => 0,
    'hook_id' => 0,
    'hook_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a34826befff1_63467144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a34826befff1_63467144')) {function content_51a34826befff1_63467144($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<script type="text/javascript">
	<?php if (isset($_GET['ad'])&&isset($_GET['live_edit'])){?>
		var ad = "<?php echo $_GET['ad'];?>
";
	<?php }?>
	var lastMove = '';
	var saveOK = '<?php echo smartyTranslate(array('s'=>'Module position saved','js'=>1),$_smarty_tpl);?>
';
	var confirmClose = "<?php echo smartyTranslate(array('s'=>"Are you sure? If you close this window, its position won't be saved",'js'=>1),$_smarty_tpl);?>
";
	var close = '<?php echo smartyTranslate(array('s'=>'Close','js'=>1),$_smarty_tpl);?>
';
	var cancel = '<?php echo smartyTranslate(array('s'=>'Cancel','js'=>1),$_smarty_tpl);?>
';
	var confirm = '<?php echo smartyTranslate(array('s'=>'Confirm','js'=>1),$_smarty_tpl);?>
';
	var add = '<?php echo smartyTranslate(array('s'=>'Add this module','js'=>1),$_smarty_tpl);?>
';
	var unableToUnregisterHook = '<?php echo smartyTranslate(array('s'=>'Unable to unregister hook','js'=>1),$_smarty_tpl);?>
';
	var unableToSaveModulePosition = '<?php echo smartyTranslate(array('s'=>'Unable to save module position','js'=>1),$_smarty_tpl);?>
';
	var loadFail = '<?php echo smartyTranslate(array('s'=>'Failed to load module list','js'=>1),$_smarty_tpl);?>
';
</script>

<div style=" background-color:000; background-color: rgba(0,0,0, 0.7); border-bottom: 1px solid #000; width:100%;height:30px; padding:5px 10px; position:fixed;top:0;left:0;z-index:9999;">
<form id="liveEdit-action-form" action="./<?php echo $_smarty_tpl->tpl_vars['ad']->value;?>
/index.php" method="post">
	<input type="hidden" name="ajax" value="1" />
	<input type="hidden" name="id_shop" value="<?php echo $_smarty_tpl->tpl_vars['id_shop']->value;?>
" />
	<input type="hidden" name="token" value="<?php echo smarty_modifier_escape($_GET['liveToken'], 'htmlall', 'UTF-8');?>
" />
	<input type="hidden" name="tab" value="AdminModulesPositions" />
	<input type="hidden" name="action" value="saveHook" />
	<?php  $_smarty_tpl->tpl_vars['hook_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hook_name']->_loop = false;
 $_smarty_tpl->tpl_vars['hook_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hook_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hook_name']->key => $_smarty_tpl->tpl_vars['hook_name']->value){
$_smarty_tpl->tpl_vars['hook_name']->_loop = true;
 $_smarty_tpl->tpl_vars['hook_id']->value = $_smarty_tpl->tpl_vars['hook_name']->key;
?>
		<input class="hook_list" type="hidden" name="hook_list[<?php echo $_smarty_tpl->tpl_vars['hook_id']->value;?>
]" 
			value="<?php echo $_smarty_tpl->tpl_vars['hook_name']->value;?>
" />
	<?php } ?>
<div >
	<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" name="saveHook" id="saveLiveEdit" class="exclusive" style="color:#fff;float:right; text-shadow: 0 -1px 0 #157402; margin-right:20px;">
	<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Close Live edit'),$_smarty_tpl);?>
" id="closeLiveEdit" class="button" style="background: #333 none; color:#fff; border:1px solid #000; float:right; margin-right:10px;">

</div>
</form>
	<div style="float:right;margin-right:20px;" id="live_edit_feed_back"></div>
</div>
<a href="#" style="display:none;" id="fancy"></a>
<div id="live_edit_feedback" style="width:400px"> 
	<p id="live_edit_feedback_str">
	</p> 
	<!-- <a href="javascript:;" onclick="$.fancybox.close();"><?php echo smartyTranslate(array('s'=>'Close'),$_smarty_tpl);?>
</a> --> 
</div>	
<?php }} ?>
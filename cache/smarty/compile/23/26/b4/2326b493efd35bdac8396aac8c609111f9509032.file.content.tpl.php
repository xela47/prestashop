<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 16:04:36
         compiled from "C:\wamp\www\prestashop\admin\themes\default\template\controllers\emails\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243851a23294c71270-24488467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2326b493efd35bdac8396aac8c609111f9509032' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\emails\\content.tpl',
      1 => 1366892586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243851a23294c71270-24488467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'token' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a23294d26469_08266224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a23294d26469_08266224')) {function content_51a23294d26469_08266224($_smarty_tpl) {?>

<script type="text/javascript">
	var textMsg = "<?php echo smartyTranslate(array('s'=>'This is a test message. Your server is now configured to send email.','js'=>1),$_smarty_tpl);?>
";
	var textSubject = "<?php echo smartyTranslate(array('s'=>'Test message -- Prestashop','js'=>1),$_smarty_tpl);?>
";
	var textSendOk = "<?php echo smartyTranslate(array('s'=>'A test email has been sent to the email address you provided.','js'=>1),$_smarty_tpl);?>
";
	var textSendError= "<?php echo smartyTranslate(array('s'=>'Error: Please check your configuration','js'=>1),$_smarty_tpl);?>
";
	var token_mail = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
	var errorMail = "<?php echo smartyTranslate(array('s'=>'This email address is not valid','js'=>1),$_smarty_tpl);?>
";
	$(document).ready(function() {
		if ($('input[name=PS_MAIL_METHOD]:checked').val() == 2)
			$('#smtp').show();
	});
</script>
<script type="text/javascript" src="../js/sendMailTest.js"></script>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>



<?php }} ?>
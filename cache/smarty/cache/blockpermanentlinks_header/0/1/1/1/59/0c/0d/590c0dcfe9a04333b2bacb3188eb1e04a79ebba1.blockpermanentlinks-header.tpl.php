<?php /*%%SmartyHeaderCode:170351a23acd5f43d3-70793212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '590c0dcfe9a04333b2bacb3188eb1e04a79ebba1' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\blockpermanentlinks\\blockpermanentlinks-header.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170351a23acd5f43d3-70793212',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a23acd771780_06499278',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a23acd771780_06499278')) {function content_51a23acd771780_06499278($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://localhost/prestashop/index.php?controller=contact" title="contact">contact</a></li>
	<li id="header_link_sitemap"><a href="http://localhost/prestashop/index.php?controller=sitemap" title="plan du site">plan du site</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://localhost/prestashop/index.php', 'DJ-Shopi', 'favoris');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>
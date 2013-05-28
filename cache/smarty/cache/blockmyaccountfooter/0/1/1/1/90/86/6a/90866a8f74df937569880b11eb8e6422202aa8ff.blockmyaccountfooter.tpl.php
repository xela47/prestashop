<?php /*%%SmartyHeaderCode:1924951a23ad01e7e32-50796197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90866a8f74df937569880b11eb8e6422202aa8ff' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1924951a23ad01e7e32-50796197',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a23ad054d428_28868795',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a23ad054d428_28868795')) {function content_51a23ad054d428_28868795($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost/prestashop/index.php?controller=my-account" title="Gérer mon compte client" rel="nofollow">Mon compte</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost/prestashop/index.php?controller=history" title="Voir mes commandes" rel="nofollow">Mes commandes</a></li>
						<li><a href="http://localhost/prestashop/index.php?controller=order-slip" title="Voir mes avoirs" rel="nofollow">Mes avoirs</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=addresses" title="Voir mes adresses" rel="nofollow">Mes adresses</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=identity" title="Gérer mes informations personnelles" rel="nofollow">Mes informations personnelles</a></li>
						
<li class="favoriteproducts">
	<a href="http://localhost/prestashop/index.php?fc=module&amp;module=favoriteproducts&amp;controller=account" title="Mes produits favoris">
				Mes produits favoris
	</a>
</li>

		</ul>
		<p class="logout"><a href="http://localhost/prestashop/index.php?mylogout" title="Se déconnecter" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
<?php /*%%SmartyHeaderCode:940851a23ace7c4a54-51947890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87d7d3716c22cf1e1711874ab1043b2b8ddb0f7' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\modules\\blockcategories\\blockcategories.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
    '3f5e3b80c6b317231034a7785558b516ad3d0d9c' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\modules\\blockcategories\\category-tree-branch.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '940851a23ace7c4a54-51947890',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a23aceba6917_86350626',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a23aceba6917_86350626')) {function content_51a23aceba6917_86350626($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Catégories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost/prestashop/index.php?id_category=3&amp;controller=category"  title="Il est temps, pour le meilleur lecteur de musique, de remonter sur sc&egrave;ne pour un rappel. Avec le nouvel iPod, le monde est votre sc&egrave;ne.">iPods</a>
	</li>

												
<li >
	<a href="http://localhost/prestashop/index.php?id_category=4&amp;controller=category"  title="Tous les accessoires &agrave; la mode pour votre iPod">Accessoires</a>
	</li>

												
<li class="last">
	<a href="http://localhost/prestashop/index.php?id_category=5&amp;controller=category"  title="Le tout dernier processeur Intel, un disque dur plus spacieux, de la m&eacute;moire &agrave; profusion et d&#039;autres nouveaut&eacute;s. Le tout, dans &agrave; peine 2,59 cm qui vous lib&egrave;rent de toute entrave. Les nouveaux portables Mac r&eacute;unissent les performances, la puissance et la connectivit&eacute; d&#039;un ordinateur de bureau. Sans la partie bureau.">Portables</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>
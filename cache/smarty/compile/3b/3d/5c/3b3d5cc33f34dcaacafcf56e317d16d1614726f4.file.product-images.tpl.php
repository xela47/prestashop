<?php /* Smarty version Smarty-3.1.13, created on 2013-05-26 16:05:05
         compiled from "C:\wamp\www\prestashop\themes\default\mobile\product-images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1732951a232b1cc4a39-68624075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b3d5cc33f34dcaacafcf56e317d16d1614726f4' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default\\mobile\\product-images.tpl',
      1 => 1366892592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732951a232b1cc4a39-68624075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'product' => 0,
    'image_cover' => 0,
    'imageIds' => 0,
    'link' => 0,
    'image' => 0,
    'mediumSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51a232b20e7277_18601919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a232b20e7277_18601919')) {function content_51a232b20e7277_18601919($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<div class="view_product">
	<?php if (isset($_smarty_tpl->tpl_vars['images']->value)&&count($_smarty_tpl->tpl_vars['images']->value)>0){?>
	<!-- thumbnails -->
	<div data-role="header" class="ui-bar-a list_view">
		<?php $_smarty_tpl->tpl_vars['image_cover'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->getCover($_smarty_tpl->tpl_vars['product']->value->id), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image_cover']->value['id_image']), null, 0);?>
		<img id="bigpic" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'htmlall', 'UTF-8');?>
" />
		<div class="thumbs_list">
			<ul id="gallery" class="thumbs_list_frame clearfix">
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['imageIds'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']), null, 0);?>
				<li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
">
					<img id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'medium_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend']);?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" data-large="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default');?>
" />
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>
	<?php }?>
</div>
<?php }} ?>
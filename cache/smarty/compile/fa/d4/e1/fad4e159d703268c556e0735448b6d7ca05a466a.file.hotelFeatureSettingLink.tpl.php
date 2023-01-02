<?php /* Smarty version Smarty-3.1.19, created on 2022-10-20 18:14:50
         compiled from "/home/qloapps/www/hotelcommerce/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureSettingLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1107743536635173fa000445-17716300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad4e159d703268c556e0735448b6d7ca05a466a' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/wkhotelfeaturesblock/views/templates/hook/hotelFeatureSettingLink.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1107743536635173fa000445-17716300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'features_setting_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635173fa002f33_63912273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635173fa002f33_63912273')) {function content_635173fa002f33_63912273($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['features_setting_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-th-list"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Hotel Amenities Block','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Features Module Setting','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure Hotels Amenities settings. You can display hotel Amenities images using this block. This block will be displayed in home page.','mod'=>'wkhotelfeaturesblock'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>

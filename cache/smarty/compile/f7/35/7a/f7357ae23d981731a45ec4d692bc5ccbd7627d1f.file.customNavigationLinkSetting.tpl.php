<?php /* Smarty version Smarty-3.1.19, created on 2022-10-20 18:14:50
         compiled from "/home/qloapps/www/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/customNavigationLinkSetting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86877633635173fa018939-48617787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7357ae23d981731a45ec4d692bc5ccbd7627d1f' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/customNavigationLinkSetting.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86877633635173fa018939-48617787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'custom_navigation_link_setting_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635173fa01b821_74907153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635173fa01b821_74907153')) {function content_635173fa01b821_74907153($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['custom_navigation_link_setting_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-chain"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Custom Navigation Link','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Custom Links Setting','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Create custom links which will display at footer navigation block and navigation menu.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>

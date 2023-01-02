<?php /* Smarty version Smarty-3.1.19, created on 2022-10-20 18:14:50
         compiled from "/home/qloapps/www/hotelcommerce/modules/wktestimonialblock/views/templates/hook/hotelTestimonialSettingLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2010369823635173fa00cd41-01239180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2732de81c43d550ded9f968e4bdf58631b995d42' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/wktestimonialblock/views/templates/hook/hotelTestimonialSettingLink.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2010369823635173fa00cd41-01239180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'testimonials_setting_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635173fa00f8d3_60445834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635173fa00f8d3_60445834')) {function content_635173fa00f8d3_60445834($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['testimonials_setting_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-quote-left"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Hotel Testimonial','mod'=>'wktestimonialblock'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Hotel Testimonials Setting','mod'=>'wktestimonialblock'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Configure Hotel Testimonials settings using this link.','mod'=>'wktestimonialblock'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2023-01-02 19:04:35
         compiled from "/home/qloapps/www/hotelcommerce/modules/wkfooteraboutblock/views/templates/hook/wkFooterAboutBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130933136663b31cb3534329-19153892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '441f22ace946d01226883c29abffbab8bad075ad' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/wkfooteraboutblock/views/templates/hook/wkFooterAboutBlock.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130933136663b31cb3534329-19153892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_SHORT_DESC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63b31cb35369c5_05108226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63b31cb35369c5_05108226')) {function content_63b31cb35369c5_05108226($_smarty_tpl) {?>

<div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo smartyTranslate(array('s'=>'About','mod'=>'wkfooteraboutblock'),$_smarty_tpl);?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-about-hotel">
			<p><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['WK_HTL_SHORT_DESC']->value,220,'',true), ENT_QUOTES, 'UTF-8', true);?>
</p>
		</div>
	</section>
</div><?php }} ?>

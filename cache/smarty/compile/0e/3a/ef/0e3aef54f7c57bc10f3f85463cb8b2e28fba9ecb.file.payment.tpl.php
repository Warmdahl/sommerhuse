<?php /* Smarty version Smarty-3.1.19, created on 2022-10-22 09:03:10
         compiled from "/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:842820269635395ae6030b6-90624415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3aef54f7c57bc10f3f85463cb8b2e28fba9ecb' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '842820269635395ae6030b6-90624415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635395ae60c3e3_11073285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635395ae60c3e3_11073285')) {function content_635395ae60c3e3_11073285($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>

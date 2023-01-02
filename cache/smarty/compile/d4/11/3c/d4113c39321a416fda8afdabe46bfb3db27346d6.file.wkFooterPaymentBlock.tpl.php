<?php /* Smarty version Smarty-3.1.19, created on 2023-01-02 19:04:35
         compiled from "/home/qloapps/www/hotelcommerce/modules/wkfooterpaymentblock/views/templates/hook/wkFooterPaymentBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113567159463b31cb35416f5-46719914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4113c39321a416fda8afdabe46bfb3db27346d6' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/wkfooterpaymentblock/views/templates/hook/wkFooterPaymentBlock.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113567159463b31cb35416f5-46719914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allPaymentBlocks' => 0,
    'module_dir' => 0,
    'paymentBlock' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63b31cb3545ef7_57459671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63b31cb3545ef7_57459671')) {function content_63b31cb3545ef7_57459671($_smarty_tpl) {?>

<div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo smartyTranslate(array('s'=>'payment accepted','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-payment-block">
			<?php if (isset($_smarty_tpl->tpl_vars['allPaymentBlocks']->value)&&$_smarty_tpl->tpl_vars['allPaymentBlocks']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['paymentBlock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['paymentBlock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allPaymentBlocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['paymentBlock']->key => $_smarty_tpl->tpl_vars['paymentBlock']->value) {
$_smarty_tpl->tpl_vars['paymentBlock']->_loop = true;
?>
					<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."views/img/payment_img/".((string)$_smarty_tpl->tpl_vars['paymentBlock']->value['id_payment_block']).".jpg");?>
">
				<?php } ?>
			<?php }?>
		</div>
	</section>
</div><?php }} ?>

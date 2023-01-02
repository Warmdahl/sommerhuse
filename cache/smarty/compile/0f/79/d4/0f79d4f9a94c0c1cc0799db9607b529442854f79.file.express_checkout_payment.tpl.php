<?php /* Smarty version Smarty-3.1.19, created on 2022-10-18 22:17:28
         compiled from "/home/qloapps/www/hotelcommerce/modules/paypal/views/templates/hook/express_checkout_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:966981607634f09d8991073-95262234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f79d4f9a94c0c1cc0799db9607b529442854f79' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/paypal/views/templates/hook/express_checkout_payment.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '966981607634f09d8991073-95262234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'use_paypal_in_context' => 0,
    'use_mobile' => 0,
    'base_dir_ssl' => 0,
    'PayPal_lang_code' => 0,
    'logos' => 0,
    'PayPal_payment_method' => 0,
    'PayPal_integral' => 0,
    'braintreeToken' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634f09d8d211c3_20411607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634f09d8d211c3_20411607')) {function content_634f09d8d211c3_20411607($_smarty_tpl) {?>

<?php if (@constant('_PS_VERSION_')>=1.6) {?>

<div class="row">
	<div class="col-xs-12 col-md-12">
        <p class="payment_module paypal">
        	<?php if ($_smarty_tpl->tpl_vars['use_paypal_in_context']->value) {?>
				<a href="javascript:void(0)" onclick="" id="paypal_process_payment" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
			<?php } else { ?>
				<a href="javascript:void(0)" onclick="$('#paypal_payment_form_payment').submit();" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
			<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value) {?>
					<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
modules/paypal/views/img/logos/express_checkout_mobile/CO_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_lang_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_orange_295x43.png" />
				<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'])&&$_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_integral']->value) {?>
						<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo smartyTranslate(array('s'=>'Pay with your card or your PayPal account','mod'=>'paypal'),$_smarty_tpl);?>
}" height="48px" />
					<?php } else { ?>
						<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalLogoMedium'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo smartyTranslate(array('s'=>'Pay with your card or your PayPal account','mod'=>'paypal'),$_smarty_tpl);?>
" />
					<?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['braintreeToken']->value)) {?>
                    <?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>

                    <?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Pay with your card or your PayPal account','mod'=>'paypal'),$_smarty_tpl);?>

                    <?php }?>
				<?php }?>

			</a>
		</p>
    </div>
</div>

<style>
	p.payment_module.paypal a
	{
		padding-left:17px;
	}
</style>
<?php } else { ?>
<p class="payment_module">
		<a href="javascript:void(0)" id="paypal_process_payment" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
">
		<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value) {?>
			<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
modules/paypal/views/img/logos/express_checkout_mobile/CO_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_lang_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_orange_295x43.png" />
		<?php } else { ?>
			<?php if (isset($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'])&&$_smarty_tpl->tpl_vars['PayPal_payment_method']->value==$_smarty_tpl->tpl_vars['PayPal_integral']->value) {?>
				<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalHorizontalSolutionPP'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo smartyTranslate(array('s'=>'Pay with your card or your PayPal account','mod'=>'paypal'),$_smarty_tpl);?>
" height="48px" />
			<?php } else { ?>
				<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['LocalPayPalLogoMedium'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo smartyTranslate(array('s'=>'Pay with your card or your PayPal account','mod'=>'paypal'),$_smarty_tpl);?>
" />
			<?php }?>
			<?php echo smartyTranslate(array('s'=>'Pay with your card or your PayPal account','mod'=>'paypal'),$_smarty_tpl);?>

        <?php }?>
	</a>
</p>

<?php }?>


<?php if ($_smarty_tpl->tpl_vars['use_paypal_in_context']->value) {?>
	<input type="hidden" id="in_context_checkout_enabled" value="1">
<?php } else { ?>
<script>
	$(document).ready(function(){
		$('#paypal_process_payment').click(function(){
			$('#paypal_payment_form_payment').submit();
		})
	});
</script>
<?php }?>
<form id="paypal_payment_form_payment" class="paypal_payment_form" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['base_dir_ssl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
modules/paypal/express_checkout/payment.php" data-ajax="false" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post">
	<input type="hidden" name="express_checkout" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_payment_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_current_page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
	<input type="hidden" name="bn" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_tracking_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
</form><?php }} ?>

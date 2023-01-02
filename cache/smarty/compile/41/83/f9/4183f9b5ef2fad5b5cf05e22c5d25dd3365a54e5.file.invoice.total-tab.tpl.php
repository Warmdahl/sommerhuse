<?php /* Smarty version Smarty-3.1.19, created on 2022-10-22 09:06:25
         compiled from "/home/qloapps/www/hotelcommerce/pdf/invoice.total-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:816128854635396713913e2-63651847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4183f9b5ef2fad5b5cf05e22c5d25dd3365a54e5' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/pdf/invoice.total-tab.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '816128854635396713913e2-63651847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635396713a8aa0_99950651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635396713a8aa0_99950651')) {function content_635396713a8aa0_99950651($_smarty_tpl) {?>
<table id="total-tab" width="100%">

	<tr>
		<td class="grey" width="70%">
			<?php echo smartyTranslate(array('s'=>'Total Rooms Cost (tax excl.)','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white" width="30%">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['products_before_discounts_tax_excl']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php if (isset($_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te'])&&$_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te']) {?>
		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Extra Demands Cost (tax excl.)','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te']),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['footer']->value['product_taxes'])&&$_smarty_tpl->tpl_vars['footer']->value['product_taxes']) {?>
		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Rooms Tax','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['footer']->value['product_taxes'])),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te'])&&$_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te']) {?>
		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Extra Demands Tax','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_ti']-$_smarty_tpl->tpl_vars['footer']->value['total_extra_demands_te'])),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>
	<tr class="bold">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total (Tax excl.)','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_paid_tax_excl']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['footer']->value['total_taxes']>0) {?>
	<tr class="bold">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Total Tax','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_taxes']),$_smarty_tpl);?>

		</td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['footer']->value['product_discounts_tax_excl']>0) {?>
		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Total Discounts','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['product_discounts_tax_excl']),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>

	<tr class="bold big">
		<td class="grey">
			<?php echo smartyTranslate(array('s'=>'Final Booking Amount','pdf'=>'true'),$_smarty_tpl);?>

		</td>
		<td class="white">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['footer']->value['total_paid_tax_incl']),$_smarty_tpl);?>

		</td>
	</tr>

	<?php if ($_smarty_tpl->tpl_vars['order']->value->total_paid-$_smarty_tpl->tpl_vars['order']->value->total_paid_real>0) {?>
		<tr class="bold big">
			<td class="grey">
				<?php echo smartyTranslate(array('s'=>'Due Amount','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid-$_smarty_tpl->tpl_vars['order']->value->total_paid_real)),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>
</table>
<?php }} ?>

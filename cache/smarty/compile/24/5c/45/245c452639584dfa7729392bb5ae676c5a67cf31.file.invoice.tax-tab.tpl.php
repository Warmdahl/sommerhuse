<?php /* Smarty version Smarty-3.1.19, created on 2022-10-22 09:06:25
         compiled from "/home/qloapps/www/hotelcommerce/pdf/invoice.tax-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:550235318635396712889a3-73634745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '245c452639584dfa7729392bb5ae676c5a67cf31' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/pdf/invoice.tax-tab.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '550235318635396712889a3-73634745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tax_exempt' => 0,
    'tax_breakdowns' => 0,
    'showTaxName' => 0,
    'th_rows' => 0,
    'display_tax_bases_in_breakdowns' => 0,
    'bd' => 0,
    'line' => 0,
    'label_printed' => 0,
    'label' => 0,
    'is_order_slip' => 0,
    'order' => 0,
    'has_line' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635396712adb85_54209057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635396712adb85_54209057')) {function content_635396712adb85_54209057($_smarty_tpl) {?>

<!--  TAX DETAILS -->

<?php if ($_smarty_tpl->tpl_vars['tax_exempt']->value) {?>
	<?php echo smartyTranslate(array('s'=>'Exempt of VAT according to section 259B of the General Tax Code.','pdf'=>'true'),$_smarty_tpl);?>

<?php } elseif ((isset($_smarty_tpl->tpl_vars['tax_breakdowns']->value)&&$_smarty_tpl->tpl_vars['tax_breakdowns']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['th_rows'] = new Smarty_variable(3, null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['showTaxName']->value)&&$_smarty_tpl->tpl_vars['showTaxName']->value) {?>
		<?php $_smarty_tpl->tpl_vars['th_rows'] = new Smarty_variable($_smarty_tpl->tpl_vars['th_rows']->value+1, null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['display_tax_bases_in_breakdowns']->value) {?>
		<?php $_smarty_tpl->tpl_vars['th_rows'] = new Smarty_variable($_smarty_tpl->tpl_vars['th_rows']->value+1, null, 0);?>
	<?php }?>
	<table class="bordered-table" id="tax-tab" width="100%">
		<thead>
			<tr>
				<th colspan="<?php echo $_smarty_tpl->tpl_vars['th_rows']->value;?>
" class="header"><?php echo smartyTranslate(array('s'=>'Tax Details','pdf'=>'true'),$_smarty_tpl);?>
</th>
			</tr>
			<tr>
				<th class="header-left small"><?php echo smartyTranslate(array('s'=>'Tax Detail','pdf'=>'true'),$_smarty_tpl);?>
</th>
				<?php if (isset($_smarty_tpl->tpl_vars['showTaxName']->value)&&$_smarty_tpl->tpl_vars['showTaxName']->value) {?>
					<th class="header-left small"><?php echo smartyTranslate(array('s'=>'Tax Name','pdf'=>'true'),$_smarty_tpl);?>
</th>
				<?php }?>
				<th class="header-left small"><?php echo smartyTranslate(array('s'=>'Tax Rate','pdf'=>'true'),$_smarty_tpl);?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['display_tax_bases_in_breakdowns']->value) {?>
					<th class="header-left small"><?php echo smartyTranslate(array('s'=>'Base price','pdf'=>'true'),$_smarty_tpl);?>
</th>
				<?php }?>
				<th class="header-left small"><?php echo smartyTranslate(array('s'=>'Total Tax','pdf'=>'true'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>

		<?php $_smarty_tpl->tpl_vars['has_line'] = new Smarty_variable(false, null, 0);?>

		<?php  $_smarty_tpl->tpl_vars['bd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bd']->_loop = false;
 $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tax_breakdowns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bd']->key => $_smarty_tpl->tpl_vars['bd']->value) {
$_smarty_tpl->tpl_vars['bd']->_loop = true;
 $_smarty_tpl->tpl_vars['label']->value = $_smarty_tpl->tpl_vars['bd']->key;
?>
			<?php $_smarty_tpl->tpl_vars['label_printed'] = new Smarty_variable(false, null, 0);?>

			<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['line']->value['rate']==0) {?>
					<?php continue 1?>
				<?php }?>
				<?php $_smarty_tpl->tpl_vars['has_line'] = new Smarty_variable(true, null, 0);?>
				<tr class="<?php if (!$_smarty_tpl->tpl_vars['label_printed']->value) {?>tr-border-top<?php }?>">
					<?php if (!$_smarty_tpl->tpl_vars['label_printed']->value) {?>
						<td class="white" rowspan="<?php echo count($_smarty_tpl->tpl_vars['bd']->value);?>
">
							<?php if ($_smarty_tpl->tpl_vars['label']->value=='product_tax') {?>
								<?php echo smartyTranslate(array('s'=>'Rooms','pdf'=>'true'),$_smarty_tpl);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['label']->value=='extra_demands_tax') {?>
								<?php echo smartyTranslate(array('s'=>'Extra Demands','pdf'=>'true'),$_smarty_tpl);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['label']->value=='shipping_tax') {?>
								<?php echo smartyTranslate(array('s'=>'Shipping','pdf'=>'true'),$_smarty_tpl);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['label']->value=='ecotax_tax') {?>
								<?php echo smartyTranslate(array('s'=>'Ecotax','pdf'=>'true'),$_smarty_tpl);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['label']->value=='wrapping_tax') {?>
								<?php echo smartyTranslate(array('s'=>'Wrapping','pdf'=>'true'),$_smarty_tpl);?>

							<?php }?>
							<?php $_smarty_tpl->tpl_vars['label_printed'] = new Smarty_variable(true, null, 0);?>
						</td>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['showTaxName']->value)&&$_smarty_tpl->tpl_vars['showTaxName']->value) {?>
						<td class="white">
							<?php if (isset($_smarty_tpl->tpl_vars['line']->value['name'])&&$_smarty_tpl->tpl_vars['line']->value['name']) {?>
								<?php echo $_smarty_tpl->tpl_vars['line']->value['name'];?>

							<?php } else { ?>
								<?php echo smartyTranslate(array('s'=>'tax','pdf'=>'true'),$_smarty_tpl);?>

							<?php }?>
						</td>
					<?php }?>
					<td class="white">
						<?php echo $_smarty_tpl->tpl_vars['line']->value['rate'];?>
 %
					</td>

					<?php if ($_smarty_tpl->tpl_vars['display_tax_bases_in_breakdowns']->value) {?>
						<td class="white">
							<?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['line']->value['total_tax_excl']),$_smarty_tpl);?>

						</td>
					<?php }?>

					<td class="white">
						<?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['line']->value['total_amount']),$_smarty_tpl);?>

					</td>
				</tr>
			<?php } ?>
		<?php } ?>
		<?php if (!$_smarty_tpl->tpl_vars['has_line']->value) {?>
			<tr>
				<td class="white" colspan="<?php if ($_smarty_tpl->tpl_vars['display_tax_bases_in_breakdowns']->value) {?>4<?php } else { ?>3<?php }?>">
					<?php echo smartyTranslate(array('s'=>'No taxes','pdf'=>'true'),$_smarty_tpl);?>

				</td>
			</tr>
		<?php }?>

		</tbody>
	</table>
<?php }?>
<!--  / TAX DETAILS --><?php }} ?>

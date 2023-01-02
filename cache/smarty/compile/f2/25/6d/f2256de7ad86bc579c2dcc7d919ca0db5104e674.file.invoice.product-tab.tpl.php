<?php /* Smarty version Smarty-3.1.19, created on 2022-10-22 09:06:25
         compiled from "/home/qloapps/www/hotelcommerce/pdf/invoice.product-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13580466826353967130f029-82753845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2256de7ad86bc579c2dcc7d919ca0db5104e674' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/pdf/invoice.product-tab.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13580466826353967130f029-82753845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_product_images' => 0,
    'layout' => 0,
    'cart_htl_data' => 0,
    'data_v' => 0,
    'bgcolor_class' => 0,
    'order' => 0,
    'rm_v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63539671325ba7_40222018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63539671325ba7_40222018')) {function content_63539671325ba7_40222018($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/qloapps/www/hotelcommerce/tools/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/qloapps/www/hotelcommerce/tools/smarty/plugins/modifier.date_format.php';
?>
<table class="product" width="100%" cellpadding="4" cellspacing="0">
	<thead>
		<tr>
			<?php if ($_smarty_tpl->tpl_vars['display_product_images']->value) {?>
				<th class="product header small"><?php echo smartyTranslate(array('s'=>'Room Image','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<?php }?>
			<th class="product header small"><?php echo smartyTranslate(array('s'=>'Room Description','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="product header small"><?php echo smartyTranslate(array('s'=>'Hotel','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="product header small"><?php echo smartyTranslate(array('s'=>'Room Capcity','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="product header small"><?php echo smartyTranslate(array('s'=>'Tax Rate(s)','pdf'=>'true'),$_smarty_tpl);?>
</th>
			

			<th class="product header small" width="<?php echo $_smarty_tpl->tpl_vars['layout']->value['unit_price_tax_excl']['width'];?>
%"><?php echo smartyTranslate(array('s'=>'Unit Price','pdf'=>'true'),$_smarty_tpl);?>
 <br /> <?php echo smartyTranslate(array('s'=>'(Tax excl.)','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="product header small"><?php echo smartyTranslate(array('s'=>'Rooms Qty','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="product header small"><?php echo smartyTranslate(array('s'=>'Check-in Date','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="product header small"><?php echo smartyTranslate(array('s'=>'Check-out Date','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="product header small"><?php echo smartyTranslate(array('s'=>'Total','pdf'=>'true'),$_smarty_tpl);?>
 <br /> <?php echo smartyTranslate(array('s'=>'(Tax excl.)','pdf'=>'true'),$_smarty_tpl);?>
</th>
		</tr>
	</thead>
	<tbody>
		<?php if (isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['data_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_v']->_loop = false;
 $_smarty_tpl->tpl_vars['data_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_htl_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_v']->key => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->_loop = true;
 $_smarty_tpl->tpl_vars['data_k']->value = $_smarty_tpl->tpl_vars['data_v']->key;
?>
				<?php  $_smarty_tpl->tpl_vars['rm_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rm_v']->_loop = false;
 $_smarty_tpl->tpl_vars['rm_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data_v']->value['date_diff']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rm_v']->key => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->_loop = true;
 $_smarty_tpl->tpl_vars['rm_k']->value = $_smarty_tpl->tpl_vars['rm_v']->key;
?>
					<?php echo smarty_function_cycle(array('values'=>array("color_line_even","color_line_odd"),'assign'=>'bgcolor_class'),$_smarty_tpl);?>

					<tr class="product <?php echo $_smarty_tpl->tpl_vars['bgcolor_class']->value;?>
">
						<?php if ($_smarty_tpl->tpl_vars['display_product_images']->value) {?>
							<td class="cart_product">
								<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="thumbnail" />
							</td>
						<?php }?>
						<td class="product center">
							<p class="product-name">
								<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>

							</p>
						</td>
						<td class="product center">
							<p>
								<?php echo $_smarty_tpl->tpl_vars['data_v']->value['hotel_name'];?>

							</p>
						</td>
						<td>
							<p class="text-left">
								<?php echo $_smarty_tpl->tpl_vars['data_v']->value['adult'];?>
 <?php echo smartyTranslate(array('s'=>'Adults'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['data_v']->value['children'];?>
 <?php echo smartyTranslate(array('s'=>'Children'),$_smarty_tpl);?>

							</p>
						</td>
						<td class="product center">
							<?php echo $_smarty_tpl->tpl_vars['data_v']->value['order_detail_tax_label'];?>

						</td>
						<td class="product center">
							<p class="text-center">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['rm_v']->value['paid_unit_price_tax_incl']),$_smarty_tpl);?>

							</p>
						</td>
						<td class="product center">
							<p class="text-left">
								<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];?>

							</p>
						</td>
						<td class="product center">
							<p>
								<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d-%m-%Y");?>

							</p>
						</td>
						<td class="product center">
							<p>
								<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d-%m-%Y");?>

							</p>
						</td>
						<td class="product center">
							<p>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['rm_v']->value['amount']),$_smarty_tpl);?>

							</p>
						</td>
					</tr>
				<?php } ?>
			<?php } ?>
		<?php }?>
		
		
		
	</tbody>
</table>
<?php }} ?>

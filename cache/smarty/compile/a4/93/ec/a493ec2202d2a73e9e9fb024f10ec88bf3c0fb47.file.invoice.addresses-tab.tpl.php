<?php /* Smarty version Smarty-3.1.19, created on 2022-10-22 09:06:25
         compiled from "/home/qloapps/www/hotelcommerce/pdf/invoice.addresses-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:917360335635396712e2442-78513271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a493ec2202d2a73e9e9fb024f10ec88bf3c0fb47' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/pdf/invoice.addresses-tab.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '917360335635396712e2442-78513271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'delivery_address' => 0,
    'invoice_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635396712eba36_15256539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635396712eba36_15256539')) {function content_635396712eba36_15256539($_smarty_tpl) {?>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<!-- <td width="33%"><span class="bold"> </span><br/><br/>
			<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value)) {?><?php echo $_smarty_tpl->tpl_vars['order_invoice']->value->shop_address;?>
<?php }?>
		</td> -->
		<!-- <td width="33%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

			<?php }?>
		</td> -->
		<td width="33%"></td>
		<td  width="33%"></td>
		<td width="33%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Customer Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

		</td>
	</tr>
</table>
<?php }} ?>

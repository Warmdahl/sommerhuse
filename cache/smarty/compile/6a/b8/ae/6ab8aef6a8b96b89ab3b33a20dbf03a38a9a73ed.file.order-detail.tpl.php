<?php /* Smarty version Smarty-3.1.19, created on 2022-10-18 21:55:46
         compiled from "/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/order-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1457783016634f04c274fc61-32630027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ab8aef6a8b96b89ab3b33a20dbf03a38a9a73ed' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/order-detail.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1457783016634f04c274fc61-32630027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'reorderingAllowed' => 0,
    'opc' => 0,
    'link' => 0,
    'carrier' => 0,
    'shop_name' => 0,
    'invoice' => 0,
    'invoiceAllowed' => 0,
    'is_guest' => 0,
    'currency' => 0,
    'order_history' => 0,
    'state' => 0,
    'followup' => 0,
    'address_invoice' => 0,
    'guestInformations' => 0,
    'HOOK_ORDERDETAILDISPLAYED' => 0,
    'refundReqBookings' => 0,
    'refund_allowed' => 0,
    'hasCompletelyRefunded' => 0,
    'id_cms_refund_policy' => 0,
    'priceDisplay' => 0,
    'use_tax' => 0,
    'total_demands_price_te' => 0,
    'total_demands_price_ti' => 0,
    'refundedAmount' => 0,
    'cart_htl_data' => 0,
    'data_v' => 0,
    'rm_v' => 0,
    'id_htl_booking' => 0,
    'key' => 0,
    'group_use_tax' => 0,
    'discounts' => 0,
    'discount' => 0,
    'non_requested_rooms' => 0,
    'any_back_order' => 0,
    'shw_bo_msg' => 0,
    'back_ord_msg' => 0,
    'carriers' => 0,
    'line' => 0,
    'messages' => 0,
    'message' => 0,
    'errors' => 0,
    'error' => 0,
    'message_confirmation' => 0,
    'products' => 0,
    'product' => 0,
    'THEME_DIR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634f04c2811552_23949052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634f04c2811552_23949052')) {function content_634f04c2811552_23949052($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/qloapps/www/hotelcommerce/tools/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/home/qloapps/www/hotelcommerce/tools/smarty/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_replace')) include '/home/qloapps/www/hotelcommerce/tools/smarty/plugins/modifier.replace.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['order']->value)) {?>
<div class="box box-small clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['reorderingAllowed']->value)&&$_smarty_tpl->tpl_vars['reorderingAllowed']->value) {?>
	<form id="submitReorder" action="<?php if (isset($_smarty_tpl->tpl_vars['opc']->value)&&$_smarty_tpl->tpl_vars['opc']->value) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
<?php }?>" method="post" class="submit">
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" name="id_order"/>
		<input type="hidden" value="" name="submitReorder"/>

		
	</form>
	<?php }?>
	<p class="dark">
		<strong><?php echo smartyTranslate(array('s'=>'Order Reference %s - placed on','sprintf'=>$_smarty_tpl->tpl_vars['order']->value->getUniqReference()),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</strong>
	</p>
</div>
<div class="info-order box">
	<?php if ($_smarty_tpl->tpl_vars['carrier']->value->id) {?><p><strong class="dark"><?php echo smartyTranslate(array('s'=>'Carrier'),$_smarty_tpl);?>
</strong> <?php if ($_smarty_tpl->tpl_vars['carrier']->value->name=="0") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></p><?php }?>
	<p><strong class="dark"><?php echo smartyTranslate(array('s'=>'Payment method'),$_smarty_tpl);?>
</strong> <span class="color-myaccount"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>
</span></p>
	<?php if ($_smarty_tpl->tpl_vars['invoice']->value&&$_smarty_tpl->tpl_vars['invoiceAllowed']->value) {?>
	<p>
		<i class="icon-file-text"></i>
		<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
<?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>&amp;secure_key=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->secure_key, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"><?php echo smartyTranslate(array('s'=>'Download your invoice as a PDF file.'),$_smarty_tpl);?>
</a>
	</p>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->recyclable) {?>
	<p><i class="icon-repeat"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'You have given permission to receive your order in recycled packaging.'),$_smarty_tpl);?>
</p>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['order']->value->gift) {?>
		<p><i class="icon-gift"></i>&nbsp;<?php echo smartyTranslate(array('s'=>'You have requested gift wrapping for this order.'),$_smarty_tpl);?>
</p>
		<p><strong class="dark"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</strong> <?php echo nl2br($_smarty_tpl->tpl_vars['order']->value->gift_message);?>
</p>
	<?php }?>
</div>


<?php if ($_smarty_tpl->tpl_vars['order']->value->is_advance_payment&&$_smarty_tpl->tpl_vars['order']->value->advance_paid_amount>0) {?>
	<div class="info-order box">
		<strong><p><?php echo smartyTranslate(array('s'=>'Please pay'),$_smarty_tpl);?>
 <span class="advance_paid_amount"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->advance_paid_amount,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'as an Advance Payment amount for the bookings of this order.'),$_smarty_tpl);?>
</p></strong>
		<p class="back_o_msg">** <?php echo smartyTranslate(array('s'=>'Please ignore if already paid'),$_smarty_tpl);?>
</p>
	</div>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['order_history']->value)) {?>
	<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Follow your order\'s status step-by-step'),$_smarty_tpl);?>
</h1>
	<div class="table_block">
		<table class="detail_step_by_step table table-bordered">
			<thead>
				<tr>
					<th class="first_item"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
					<th class="last_item"><?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['state']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['state']->iteration=0;
 $_smarty_tpl->tpl_vars['state']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
 $_smarty_tpl->tpl_vars['state']->iteration++;
 $_smarty_tpl->tpl_vars['state']->index++;
 $_smarty_tpl->tpl_vars['state']->first = $_smarty_tpl->tpl_vars['state']->index === 0;
 $_smarty_tpl->tpl_vars['state']->last = $_smarty_tpl->tpl_vars['state']->iteration === $_smarty_tpl->tpl_vars['state']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['first'] = $_smarty_tpl->tpl_vars['state']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["orderStates"]['last'] = $_smarty_tpl->tpl_vars['state']->last;
?>
				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['last']) {?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['orderStates']['index']%2) {?>alternate_item<?php } else { ?>item<?php }?>">
					<td class="step-by-step-date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['state']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
					<td><span<?php if (isset($_smarty_tpl->tpl_vars['state']->value['color'])&&$_smarty_tpl->tpl_vars['state']->value['color']) {?> style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
; border-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?> class="label<?php if (isset($_smarty_tpl->tpl_vars['state']->value['color'])&&Tools::getBrightness($_smarty_tpl->tpl_vars['state']->value['color'])>128) {?> dark<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'UTF-8', true);?>
</span></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['followup']->value)) {?>
	<p class="bold"><?php echo smartyTranslate(array('s'=>'Click the following link to track the delivery of your order'),$_smarty_tpl);?>
</p>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['followup']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['followup']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
<?php }?>

<div class="adresses_bloc">
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<ul class="address item <?php if ($_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>full_width<?php }?> box">
				<li><h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Customer Details'),$_smarty_tpl);?>
</h3></li>
				<?php if (isset($_smarty_tpl->tpl_vars['address_invoice']->value->firstname)&&$_smarty_tpl->tpl_vars['address_invoice']->value->firstname) {?>
					<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</div></li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value['email'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['email']) {?>
					<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</div></li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile)&&$_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile) {?>
					<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo smartyTranslate(array('s'=>'Mobile Number'),$_smarty_tpl);?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true);?>
</div></li>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['address_invoice']->value->phone)&&$_smarty_tpl->tpl_vars['address_invoice']->value->phone) {?>
					<li class="row"><div class="col-sm-3 col-md-2 col-xs-6"><?php echo smartyTranslate(array('s'=>'Phone Number'),$_smarty_tpl);?>
</div><div class="col-sm-9 col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</div></li>
				<?php }?>
			</ul>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDERDETAILDISPLAYED']->value;?>

<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post"><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)&&$_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
	<div class="alert alert-warning-light cancel_requests_link_wrapper">
		<i class="icon-info-circle"></i> <?php echo smartyTranslate(array('s'=>'You have booking cancelation requests from this order. To see the cancelation request status'),$_smarty_tpl);?>
 <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow'), ENT_QUOTES, 'UTF-8', true);?>
?id_order=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Click Here'),$_smarty_tpl);?>
</a>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
	<div class="row totalOrdercancellation_div">
		<div class="col-xs-12 col-sm-12">
			<?php if (!$_smarty_tpl->tpl_vars['hasCompletelyRefunded']->value) {?>
				<a refund_fields_on="0" id="order_refund_request" class="btn btn-default pull-right" href="#" title=<?php echo smartyTranslate(array('s'=>'Proceed to refund'),$_smarty_tpl);?>
><span><?php echo smartyTranslate(array('s'=>'Cancel Bookings'),$_smarty_tpl);?>
</span></a>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value)&&$_smarty_tpl->tpl_vars['id_cms_refund_policy']->value) {?><a target="_blank" class="btn btn-default pull-right refund_policy_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Refund Policies'),$_smarty_tpl);?>
</a><?php }?>
		</div>
	</div>
<?php }?>


<form id="order-detail-content">

	<div class="table_block table-responsive wk_booking_details_wrapper">
		<table class="table table-bordered">
			<thead>
				<tr>
					<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
						<th class="standard_refund_fields"></th>
					<?php }?>
					<th class="cart_product"><?php echo smartyTranslate(array('s'=>'Room Image'),$_smarty_tpl);?>
</th>
					<th class="cart_description"><?php echo smartyTranslate(array('s'=>'Room Description'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Hotel Name'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Room Capacity'),$_smarty_tpl);?>
</th>
					<th class="cart_unit"><?php echo smartyTranslate(array('s'=>'Unit Price'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Rooms'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Check-in Date'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Check-out Date'),$_smarty_tpl);?>
</th>
					<th class="cart_total"><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tfoot>
				<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value&&$_smarty_tpl->tpl_vars['use_tax']->value) {?>
					<tr class="item">
						<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
							<td class="standard_refund_fields"></td>
						<?php }?>
						<td colspan="4"></td>
						<td colspan="3">
							<strong><?php echo smartyTranslate(array('s'=>'Items (tax excl.)'),$_smarty_tpl);?>
</strong>
						</td>
						<td colspan="2" class="text-right">
							<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
						</td>
					</tr>
				<?php }?>
				<tr class="item">
					<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
						<td class="standard_refund_fields"></td>
					<?php }?>
					<td colspan="4"></td>
					<td colspan="3">
						<strong><?php echo smartyTranslate(array('s'=>'Items'),$_smarty_tpl);?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {?><?php echo smartyTranslate(array('s'=>'(tax incl.)'),$_smarty_tpl);?>
<?php }?> </strong>
					</td>
					<td colspan="2" class="text-right">
						<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
					</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['total_demands_price_te']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value&&$_smarty_tpl->tpl_vars['use_tax']->value) {?>
						<tr class="item">
							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
								<td class="standard_refund_fields"></td>
							<?php }?>
							<td colspan="4"></td>
							<td colspan="3">
								<strong><?php echo smartyTranslate(array('s'=>'Additional facilities Cost (tax excl.)'),$_smarty_tpl);?>
</strong>
							</td>
							<td colspan="2" class="text-right">
								<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['total_demands_price_te']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
							</td>
						</tr>
					<?php }?>
					<tr class="item">
						<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
							<td class="standard_refund_fields"></td>
						<?php }?>
						<td colspan="4"></td>
						<td colspan="3">
							<strong><?php echo smartyTranslate(array('s'=>'Additional facilities Cost (tax incl.)'),$_smarty_tpl);?>
</strong>
						</td>
						<td colspan="2" class="text-right">
							<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['total_demands_price_ti']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl);?>
</span>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['order']->value->total_wrapping>0) {?>
				<tr class="item">
					<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
						<td class="standard_refund_fields"></td>
					<?php }?>
					<td colspan="4"></td>
					<td colspan="3">
						<strong><?php echo smartyTranslate(array('s'=>'Total gift wrapping cost'),$_smarty_tpl);?>
</strong>
					</td>
					<td colspan="2" class="text-right">
						<span class="price-wrapping"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_wrapping,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
					</td>
				</tr>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts>0) {?>
					<tr class="item">
						<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
							<td class="standard_refund_fields"></td>
						<?php }?>
						<td colspan="4"></td>
						<td colspan="3">
							<strong><?php echo smartyTranslate(array('s'=>'Total vouchers'),$_smarty_tpl);?>
</strong>
						</td>
						<td colspan="2" class="text-right">
							<span class="price-discount">-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl);?>
</span>
						</td>
					</tr>
				<?php }?>
				<tr class="totalprice item">
					<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
						<td class="standard_refund_fields"></td>
					<?php }?>
					<td colspan="4"></td>
					<td colspan="3">
						<strong><?php echo smartyTranslate(array('s'=>'Final Order Total'),$_smarty_tpl);?>
</strong>
					</td>
					<td colspan="2" class="text-right">
						<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
					</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl>$_smarty_tpl->tpl_vars['order']->value->total_paid_real) {?>
					<tr class="totalprice item">
						<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
							<td class="standard_refund_fields"></td>
						<?php }?>
						<td colspan="4"></td>
						<td colspan="3">
							<strong><?php echo smartyTranslate(array('s'=>'Due Amount'),$_smarty_tpl);?>
</strong>
						</td>
						<td colspan="2" class="text-right">
							<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_real),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
						</td>
					</tr>
				<?php }?>
				

				<?php if (isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)&&$_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
					<tr class="totalprice item">
						<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
							<td class="standard_refund_fields"></td>
						<?php }?>
						<td colspan="4"></td>
						<td colspan="3">
							<strong>*<?php echo smartyTranslate(array('s'=>'Refunded Amount'),$_smarty_tpl);?>
</strong>
						</td>
						<td colspan="2" class="text-right">
							<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['refundedAmount']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</span>
						</td>
					</tr>
				<?php }?>
			</tfoot>

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
							<tr class="table_body">
								<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
									<td class="booking_refund_fields standard_refund_fields">
										<?php if (isset($_smarty_tpl->tpl_vars['rm_v']->value['ids_htl_booking_detail'])&&$_smarty_tpl->tpl_vars['rm_v']->value['ids_htl_booking_detail']) {?>
											<?php  $_smarty_tpl->tpl_vars['id_htl_booking'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id_htl_booking']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rm_v']->value['ids_htl_booking_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id_htl_booking']->key => $_smarty_tpl->tpl_vars['id_htl_booking']->value) {
$_smarty_tpl->tpl_vars['id_htl_booking']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['id_htl_booking']->key;
?>
												<div class="checkbox">
													<label for="bookings_to_refund">
														<input class="bookings_to_refund" type="checkbox" name="bookings_to_refund[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_htl_booking']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)&&(in_array($_smarty_tpl->tpl_vars['id_htl_booking']->value,$_smarty_tpl->tpl_vars['refundReqBookings']->value))) {?>disabled<?php }?>/> &nbsp;<?php echo smartyTranslate(array('s'=>'Room'),$_smarty_tpl);?>
-<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>

													</label>
												</div>
											<?php } ?>
										<?php }?>
									</td>
								<?php }?>
								<td class="cart_product">
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']), ENT_QUOTES, 'UTF-8', true);?>
">
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['cover_img'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive"/>
									</a>
								</td>
								<td class="cart_description">
									<p class="product-name">
										<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

										</a>
									</p>
									<?php if (isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])&&$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) {?>
										<p class="room_extra_demands">
											<a date_from="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rm_v']->value['data_form'], ENT_QUOTES, 'UTF-8', true);?>
" date_to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rm_v']->value['data_to'], ENT_QUOTES, 'UTF-8', true);?>
" id_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
" id_order="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" class="open_rooms_extra_demands" href="#rooms_type_extra_demands">
												<?php echo smartyTranslate(array('s'=>'Additional Facilities'),$_smarty_tpl);?>

											</a>
										</p>
										<p>
											<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

											<?php } else { ?>
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

											<?php }?>
										</p>
									<?php }?>
								</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
								<td>
									<p class="text-left">
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['adult'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo smartyTranslate(array('s'=>'Adults'),$_smarty_tpl);?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['children'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo smartyTranslate(array('s'=>'Children'),$_smarty_tpl);?>

									</p>
								</td>
								<td class="cart_unit">
									<p class="text-center">
										<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
											<p class="text-center">
												<span class="product_original_price <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff']>0) {?>room_type_old_price<?php }?>" <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff']<0) {?> style="display:none;"<?php }?>>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['product_price_without_reduction_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

												</span>&nbsp;
												<span class="room_type_current_price" <?php if (!$_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff']) {?>style="display:none;"<?php }?>>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['paid_unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

												</span>
											</p>
										<?php } else { ?>
											<p class="text-center">
												<span class="product_original_price <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff']>0) {?>room_type_old_price<?php }?>" <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff']<0) {?> style="display:none;"<?php }?>>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['product_price_without_reduction_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

												</span>&nbsp;
												<span class="room_type_current_price" <?php if (!$_smarty_tpl->tpl_vars['rm_v']->value['feature_price_diff']) {?>style="display:none;"<?php }?>>
													<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['paid_unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

												</span>
											</p>
										<?php }?>
									</p>
								</td>
								<td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rm_v']->value['num_rm'], ENT_QUOTES, 'UTF-8', true);?>
</td>
								<td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d-%m-%Y");?>
</td>
								<td class="text-center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d-%m-%Y");?>
</td>
								<td class="cart_total text-left">
									<p class="text-left">
										<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0][0]->displayWtPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>

										<?php }?>
									</p>
								</td>
							</tr>
						<?php } ?>
					<?php } ?>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
					<tr class="item">
						<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
							<td class="standard_refund_fields"></td>
						<?php }?>
						<td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td class="text-center"><?php echo smartyTranslate(array('s'=>'Voucher'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td class="text-center" colspan="5"><span class="order_qte_span editable">1</span></td>
						<td class="text-right" colspan="2"><?php if ($_smarty_tpl->tpl_vars['discount']->value['value']!=0.00) {?>-<?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPriceWithCurrency'][0][0]->convertPriceWithCurrency(array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl);?>
</td>
						
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value&&$_smarty_tpl->tpl_vars['non_requested_rooms']->value) {?>
		<div class="alert alert-info-light standard_refund_fields">
			<i class="icon-info-circle"></i> <?php echo smartyTranslate(array('s'=>'Select rooms which bookings you want to cancel. Attached additional facilities with the room will be cancelled with room cancellation.'),$_smarty_tpl);?>

		</div>
		<?php if (!$_smarty_tpl->tpl_vars['hasCompletelyRefunded']->value) {?>
			<div class="row standard_refund_fields">
				<div class="col-sm-12">
					<button type="button" id="order_refund_request_submit" class="btn pull-right"><span><?php echo smartyTranslate(array('s'=>'Submit'),$_smarty_tpl);?>
</span></button>
				</div>
			</div>
		<?php }?>
	<?php }?>
</form>

<?php if ($_smarty_tpl->tpl_vars['any_back_order']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['shw_bo_msg']->value) {?>
		<p class="back_o_msg"><strong><sup>*</sup><?php echo smartyTranslate(array('s'=>'Some of your rooms are on back order. Please read the following message for rooms with status on backorder'),$_smarty_tpl);?>
</strong></p>
		<p>
			-&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['back_ord_msg']->value;?>

		</p>
	<?php }?>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?></form><?php }?>
<?php $_smarty_tpl->tpl_vars['carriers'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->getShipping(), null, 0);?>
<?php if (count($_smarty_tpl->tpl_vars['carriers']->value)>0&&isset($_smarty_tpl->tpl_vars['carriers']->value[0]['carrier_name'])&&$_smarty_tpl->tpl_vars['carriers']->value[0]['carrier_name']) {?>
	<table class="table table-bordered footab">
		<thead>
			<tr>
				<th class="first_item"><?php echo smartyTranslate(array('s'=>'Date'),$_smarty_tpl);?>
</th>
				<th class="item" data-sort-ignore="true"><?php echo smartyTranslate(array('s'=>'Carrier'),$_smarty_tpl);?>
</th>
				<th data-hide="phone" class="item"><?php echo smartyTranslate(array('s'=>'Weight'),$_smarty_tpl);?>
</th>
				<th data-hide="phone" class="item"><?php echo smartyTranslate(array('s'=>'Shipping cost'),$_smarty_tpl);?>
</th>
				<th data-hide="phone" class="last_item" data-sort-ignore="true"><?php echo smartyTranslate(array('s'=>'Tracking number'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
			<tr class="item">
				<td data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['line']->value['date_add'],"/[\-\:\ ]/",'');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['line']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['line']->value['carrier_name'];?>
</td>
				<td data-value="<?php if ($_smarty_tpl->tpl_vars['line']->value['weight']>0) {?><?php echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);?>
<?php } else { ?>0<?php }?>"><?php if ($_smarty_tpl->tpl_vars['line']->value['weight']>0) {?><?php echo sprintf("%.3f",$_smarty_tpl->tpl_vars['line']->value['weight']);?>
 <?php echo Configuration::get('PS_WEIGHT_UNIT');?>
<?php } else { ?>-<?php }?></td>
				<td data-value="<?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod()==@constant('PS_TAX_INC')) {?><?php echo $_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'];?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod()==@constant('PS_TAX_INC')) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['line']->value['shipping_cost_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl);?>
<?php }?></td>
				<td>
					<span class="shipping_number_show"><?php if ($_smarty_tpl->tpl_vars['line']->value['tracking_number']) {?><?php if ($_smarty_tpl->tpl_vars['line']->value['url']&&$_smarty_tpl->tpl_vars['line']->value['tracking_number']) {?><a href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['line']->value['url'],'@',$_smarty_tpl->tpl_vars['line']->value['tracking_number']);?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
</a><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
<?php }?><?php } else { ?>-<?php }?></span>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value)) {?>
		<h3 class="page-heading"><?php echo smartyTranslate(array('s'=>'Messages'),$_smarty_tpl);?>
</h3>
		<div class="table_block">
			<table class="detail_step_by_step table table-bordered">
				<thead>
					<tr>
						<th class="first_item" style="width:150px;"><?php echo smartyTranslate(array('s'=>'From'),$_smarty_tpl);?>
</th>
						<th class="last_item"><?php echo smartyTranslate(array('s'=>'Message'),$_smarty_tpl);?>
</th>
					</tr>
				</thead>
				<tbody>
				<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['message']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['message']->iteration=0;
 $_smarty_tpl->tpl_vars['message']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['message']->iteration++;
 $_smarty_tpl->tpl_vars['message']->index++;
 $_smarty_tpl->tpl_vars['message']->first = $_smarty_tpl->tpl_vars['message']->index === 0;
 $_smarty_tpl->tpl_vars['message']->last = $_smarty_tpl->tpl_vars['message']->iteration === $_smarty_tpl->tpl_vars['message']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['first'] = $_smarty_tpl->tpl_vars['message']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["messageList"]['last'] = $_smarty_tpl->tpl_vars['message']->last;
?>
					<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['last']) {?>last_item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['messageList']['index']%2) {?>alternate_item<?php } else { ?>item<?php }?>">
						<td>
							<strong class="dark">
								<?php if (isset($_smarty_tpl->tpl_vars['message']->value['elastname'])&&$_smarty_tpl->tpl_vars['message']->value['elastname']) {?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['efirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['elastname'], ENT_QUOTES, 'UTF-8', true);?>

								<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['clastname']) {?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['cfirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['clastname'], ENT_QUOTES, 'UTF-8', true);?>

								<?php } else { ?>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>

								<?php }?>
							</strong>
							<br />
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>1),$_smarty_tpl);?>

						</td>
						<td><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true));?>
</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value) {?>
			<div class="alert alert-danger">
				<p><?php if (count($_smarty_tpl->tpl_vars['errors']->value)>1) {?><?php echo smartyTranslate(array('s'=>'There are %d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There is %d error','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }?></p>
				<ol>
				<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
				<?php } ?>
				</ol>
			</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['message_confirmation']->value)&&$_smarty_tpl->tpl_vars['message_confirmation']->value) {?>
		<p class="alert alert-success">
			<?php echo smartyTranslate(array('s'=>'Message successfully sent'),$_smarty_tpl);?>

		</p>
		<?php }?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std" id="sendOrderMessage">
			<h3 class="page-heading bottom-indent"><?php echo smartyTranslate(array('s'=>'Add a message'),$_smarty_tpl);?>
</h3>
			<p><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it in the field below.'),$_smarty_tpl);?>
</p>
			<p class="form-group">
			<label for="id_product"><?php echo smartyTranslate(array('s'=>'Room Type'),$_smarty_tpl);?>
</label>
				<select name="id_product" class="form-control">
					<option value="0"><?php echo smartyTranslate(array('s'=>'-- Choose --'),$_smarty_tpl);?>
</option>
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
					<?php } ?>
				</select>
			</p>
			<p class="form-group">
				<textarea class="form-control" cols="67" rows="3" name="msgText"></textarea>
			</p>
			<div class="submit">
				<input type="hidden" name="id_order" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['order']->value->id), ENT_QUOTES, 'UTF-8', true);?>
" />
				<input type="submit" class="unvisible" name="submitMessage" value="<?php echo smartyTranslate(array('s'=>'Send'),$_smarty_tpl);?>
"/>
				<button type="submit" name="submitMessage" class="button btn btn-default button-medium"><span><?php echo smartyTranslate(array('s'=>'Send'),$_smarty_tpl);?>
<i class="icon-chevron-right right"></i></span></button>
			</div>
		</form>
	<?php } else { ?>
		<p class="alert alert-info"><i class="icon-info-sign"></i> <?php echo smartyTranslate(array('s'=>'You cannot request refund with a guest account'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?>



<div style="display:none;" id="rooms_extra_demands">
	<div id="rooms_type_extra_demands">
		<div class="panel">
			<div class="rooms_extra_demands_head">
				<h3><?php echo smartyTranslate(array('s'=>'Additional Facilities'),$_smarty_tpl);?>
</h3>
				<p class="rooms_extra_demands_text"><?php echo smartyTranslate(array('s'=>'Below are the additional facilities chosen by you in this booking'),$_smarty_tpl);?>
</p>
			</div>
			<div id="room_type_demands_desc"></div>
		</div>
	</div>
</div>


<div style="display: none;" id="reason_fancybox_content">
	<div id="htlRefundReasonForm">
		<h2 class="refund_reason_head">
			<?php echo smartyTranslate(array('s'=>'Mention a reason for cancelation'),$_smarty_tpl);?>

		</h2>
		<div class="refundReasonFormContent">
			<input type="hidden" id="bookings_to_refund">
			<textarea class="form-control reasonForRefund" rows="4" name="reasonForRefund" placeholder="<?php echo smartyTranslate(array('s'=>'Type here....'),$_smarty_tpl);?>
"></textarea>
			<div>
				<p class="required required_err" style="color:#AA1F00; display:none"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>
</p><br>
				<p class="reason_submit_wrapper">
					<button  name="submit_refund_reason" type="button" id="submit_refund_reason" class="btn"  data-id_order="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['order']->value->id), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php echo smartyTranslate(array('s'=>'Submit'),$_smarty_tpl);?>
</span></button>
				</p>
			</div>
		</div>
	</div>
</div>

<div class="loading_overlay">
	<img src="<?php echo $_smarty_tpl->tpl_vars['THEME_DIR']->value;?>
img/ajax-loader.gif" class="loading-img"/>
</div>
<?php }} ?>

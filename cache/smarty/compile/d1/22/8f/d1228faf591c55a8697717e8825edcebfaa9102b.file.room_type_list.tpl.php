<?php /* Smarty version Smarty-3.1.19, created on 2022-10-17 23:56:45
         compiled from "/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/_partials/room_type_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224198121634dcf9dc17191-44531286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1228faf591c55a8697717e8825edcebfaa9102b' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/_partials/room_type_list.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224198121634dcf9dc17191-44531286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'booking_data' => 0,
    'room_v' => 0,
    'foo' => 0,
    'ratting_img' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'order_date_restrict' => 0,
    'warning_num' => 0,
    'feat_img_dir' => 0,
    'feat_v' => 0,
    'link' => 0,
    'booking_date_from' => 0,
    'booking_date_to' => 0,
    'num_days' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634dcf9dc3d365_69364200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dcf9dc3d365_69364200')) {function content_634dcf9dc3d365_69364200($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['booking_data']->value['rm_data'])&&$_smarty_tpl->tpl_vars['booking_data']->value['rm_data']) {?>
	<?php  $_smarty_tpl->tpl_vars['room_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['room_v']->_loop = false;
 $_smarty_tpl->tpl_vars['room_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['booking_data']->value['rm_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['room_v']->key => $_smarty_tpl->tpl_vars['room_v']->value) {
$_smarty_tpl->tpl_vars['room_v']->_loop = true;
 $_smarty_tpl->tpl_vars['room_k']->value = $_smarty_tpl->tpl_vars['room_v']->key;
?>
		<div class="col-sm-12 room_cont">
			<div class="row">
				<div class="col-sm-4">
					<a href="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['product_link'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['image'];?>
" class="img-responsive">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayRoomTypeListImageAfter','product'=>$_smarty_tpl->tpl_vars['room_v']->value),$_smarty_tpl);?>

					</a>
				</div>
				<div class="col-sm-8">
					<p class="rm_heading"><?php echo $_smarty_tpl->tpl_vars['room_v']->value['name'];?>
</p>
					<div class="rm_desc"><?php echo $_smarty_tpl->tpl_vars['room_v']->value['description'];?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['product_link'];?>
"><?php echo smartyTranslate(array('s'=>'View More'),$_smarty_tpl);?>
....</a></div>

					<p><span class="capa_txt"><?php echo smartyTranslate(array('s'=>'Max Capacity:'),$_smarty_tpl);?>
</span><span class="capa_data"> <?php echo $_smarty_tpl->tpl_vars['room_v']->value['adult'];?>
 <?php echo smartyTranslate(array('s'=>'Adults'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['room_v']->value['children'];?>
 <?php echo smartyTranslate(array('s'=>'child'),$_smarty_tpl);?>
</span></p>
					<?php if (isset($_smarty_tpl->tpl_vars['room_v']->value['num_review'])) {?>
						<div class="rm_review_cont pull-left">
							<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
								<?php if ($_smarty_tpl->tpl_vars['foo']->value<=$_smarty_tpl->tpl_vars['room_v']->value['ratting']) {?>
									<div class="rm_ratting_yes" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);"></div>
								<?php } else { ?>
									<div class="rm_ratting_no" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);"></div>
								<?php }?>
							<?php }} ?>
							<span class="rm_review"><?php echo $_smarty_tpl->tpl_vars['room_v']->value['num_review'];?>
 <?php echo smartyTranslate(array('s'=>'Reviews'),$_smarty_tpl);?>
</span>
						</div>
					<?php }?>

					<?php if (!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&!$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
						<span class="rm_left pull-right" <?php if ($_smarty_tpl->tpl_vars['room_v']->value['room_left']>$_smarty_tpl->tpl_vars['warning_num']->value) {?>  style="display:none"<?php }?>><?php echo smartyTranslate(array('s'=>'Hurry!'),$_smarty_tpl);?>
 <span class="cat_remain_rm_qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
"><?php echo $_smarty_tpl->tpl_vars['room_v']->value['room_left'];?>
</span> <?php echo smartyTranslate(array('s'=>'rooms left'),$_smarty_tpl);?>
</span>
					<?php }?>

					<?php if (!empty($_smarty_tpl->tpl_vars['room_v']->value['feature'])) {?>
						<div class="rm_amenities_cont">
							<?php  $_smarty_tpl->tpl_vars['feat_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feat_v']->_loop = false;
 $_smarty_tpl->tpl_vars['feat_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['room_v']->value['feature']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feat_v']->key => $_smarty_tpl->tpl_vars['feat_v']->value) {
$_smarty_tpl->tpl_vars['feat_v']->_loop = true;
 $_smarty_tpl->tpl_vars['feat_k']->value = $_smarty_tpl->tpl_vars['feat_v']->key;
?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['feat_img_dir']->value).((string)$_smarty_tpl->tpl_vars['feat_v']->value['value']));?>
" class="rm_amen"> 
								
							<?php } ?>
						</div>
					<?php }?>
					<div class="row margin-lr-0 pull-left rm_price_cont">
						<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff']>=0) {?>
							<span class="pull-left rm_price_val <?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff']>0) {?>room_type_old_price<?php }?>">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>floatVal(round($_smarty_tpl->tpl_vars['room_v']->value['price_without_reduction'],2))),$_smarty_tpl);?>

							</span>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff']) {?>
							<span class="pull-left rm_price_val">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>floatVal(round($_smarty_tpl->tpl_vars['room_v']->value['feature_price'],2))),$_smarty_tpl);?>

							</span>
						<?php }?>
						<span class="pull-left rm_price_txt">/<?php echo smartyTranslate(array('s'=>'Per Night'),$_smarty_tpl);?>
</span>
					</div>

					<?php if (!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&!$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
						<a cat_rm_check_in="<?php echo $_smarty_tpl->tpl_vars['booking_date_from']->value;?>
" cat_rm_check_out="<?php echo $_smarty_tpl->tpl_vars['booking_date_to']->value;?>
" href="" rm_product_id="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" cat_rm_book_nm_days="<?php echo $_smarty_tpl->tpl_vars['num_days']->value;?>
" data-id-product-attribute="0" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['room_v']->value['id_product']);?>
" class="btn btn-default button button-medium ajax_add_to_cart_button pull-right"><span><?php echo smartyTranslate(array('s'=>'Book Now'),$_smarty_tpl);?>
</span></a>

						<!-- ################################################ -->

						<div class="rm_qty_cont pull-right clearfix" id="cat_rm_quantity_wanted_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
">
							<span class="qty_txt"><?php echo smartyTranslate(array('s'=>'Qty.'),$_smarty_tpl);?>
:</span>
							<div class="qty_sec_cont row">
								<div class="qty_input_cont row margin-lr-0">
									<input autocomplete="off" type="text" min="1" name="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" id="cat_quantity_wanted_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="text-center form-control cat_quantity_wanted" value="1" id_room_product="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
">
								</div>
								<div class="qty_direction">
									<a href="#" data-room_id_product="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" data-field-qty="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="btn btn-default cat_rm_quantity_up">
										<span>
											<i class="icon-plus"></i>
										</span>
									</a>
									<a href="#" data-field-qty="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="btn btn-default cat_rm_quantity_down">
										<span>
											<i class="icon-minus"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
					<?php }?>


					<!-- <div id="cat_rm_quantity_wanted_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
">
						<a href="#" data-field-qty="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="btn btn-default button-minus cat_rm_quantity_down">
							<span>
								<i class="icon-minus"></i>
							</span>
						</a>
						<input autocomplete="off" type="text" min="1" name="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" id="cat_quantity_wanted_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="text" value="1" />

						<a href="#" data-room_id_product="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" data-field-qty="qty_<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" class="btn btn-default button-plus cat_rm_quantity_up">
							<span><i class="icon-plus"></i></span>
						</a>
					</div> -->


					<!-- ################################################ -->
				</div>
			</div>
		</div>
	<?php } ?>
<?php } else { ?>
	<div class="noRoomsAvailAlert">
		<span><?php echo smartyTranslate(array('s'=>'No room available for this hotel!'),$_smarty_tpl);?>
</span>
	</div>
<?php }?>
<?php }} ?>

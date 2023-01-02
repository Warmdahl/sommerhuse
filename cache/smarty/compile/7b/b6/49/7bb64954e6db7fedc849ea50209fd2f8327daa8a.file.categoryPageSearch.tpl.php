<?php /* Smarty version Smarty-3.1.19, created on 2022-10-17 23:56:45
         compiled from "/home/qloapps/www/hotelcommerce/modules/wkroomsearchblock/views/templates/hook/categoryPageSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724044577634dcf9daeee09-83980225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb64954e6db7fedc849ea50209fd2f8327daa8a' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/wkroomsearchblock/views/templates/hook/categoryPageSearch.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724044577634dcf9daeee09-83980225',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hotels_info' => 0,
    'location_enabled' => 0,
    'search_data' => 0,
    'show_hotel_name' => 0,
    'max_order_date' => 0,
    'error' => 0,
    'name_val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634dcf9db0ddb1_73581894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dcf9db0ddb1_73581894')) {function content_634dcf9db0ddb1_73581894($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['hotels_info']->value)&&count($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
	<div class="header-rmsearch-wrapper">
        <div class="filter_header">
            <p><?php echo smartyTranslate(array('s'=>'Search Rooms','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
</p>
            <hr class="header-bottom-hr">
        </div>
		<form method="POST" id="search_hotel_block_form">
			<?php if (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&$_smarty_tpl->tpl_vars['location_enabled']->value) {?>
				<div class="form-group">
					<input type="text" class="form-control header-rmsearch-input" id="hotel_location" name="hotel_location" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Hotel location','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['location'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" city_cat_id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['parent_data']['id_category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
					<div class="dropdown">
						<ul class="location_search_results_ul dropdown-menu"></ul>
					</div>
				</div>
			<?php }?>
			<div class="form-group <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value)<=1&&!$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?> hidden <?php }?>">
				<?php if (!$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
					<input type="hidden" id="max_order_date" name="max_order_date" value="<?php if (isset($_smarty_tpl->tpl_vars['hotels_info']->value[0]['max_order_date'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotels_info']->value[0]['max_order_date'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>">
					<input type="hidden" id="hotel_cat_id" name="hotel_cat_id" value="<?php echo $_smarty_tpl->tpl_vars['hotels_info']->value[0]['id_category'];?>
">
					<input type="hidden" id="id_hotel" name="id_hotel" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotels_info']->value[0]['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
					<input type="text" id="htl_name" class="form-control header-rmsearch-input" value="<?php echo $_smarty_tpl->tpl_vars['hotels_info']->value[0]['hotel_name'];?>
" readonly>
				<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['hotels_info']->value)&&count($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
						<div class="dropdown">
							<input type="hidden" id="hotel_cat_id" name="hotel_cat_id" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['id_category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
                            <input type="hidden" id="id_hotel" name="id_hotel" <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
                            <input type="hidden" id="max_order_date" name="max_order_date" value="<?php if (isset($_smarty_tpl->tpl_vars['max_order_date']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['max_order_date']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>">

							<button class="form-control header-rmsearch-input <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value==1) {?>error_border<?php }?>" type="button" data-toggle="dropdown" id="id_hotel_button">
								<?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>
                                <span id="hotel_cat_name" class="pull-left"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['htl_dtl']['hotel_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                            <?php } else { ?>
                                <span id="hotel_cat_name" class="pull-left"><?php echo smartyTranslate(array('s'=>'Select Hotel','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
</span>
                            <?php }?>
							</button>
							<ul class="dropdown-menu hotel_dropdown_ul">
								<?php if (isset($_smarty_tpl->tpl_vars['hotels_info']->value)&&$_smarty_tpl->tpl_vars['hotels_info']->value) {?>
									<?php  $_smarty_tpl->tpl_vars['name_val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name_val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotels_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name_val']->key => $_smarty_tpl->tpl_vars['name_val']->value) {
$_smarty_tpl->tpl_vars['name_val']->_loop = true;
?>
										<li tabindex="-1" class="search_result_li" data-id-hotel="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-hotel-cat-id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['id_category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-max_order_date="<?php echo $_smarty_tpl->tpl_vars['name_val']->value['max_order_date'];?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
									<?php } ?>
								<?php }?>
							</ul>
						</div>
					<?php }?>
				<?php }?>
			</div>
            <div class="form-group check_in_field_block">
                <input type="text" class="form-control header-rmsearch-input input-date" id="check_in_time" name="check_in_time" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Check-In','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
"  <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['date_from'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> readonly>
            </div>
            <div class="form-group check_out_field_block">
                <input type="text" class="form-control header-rmsearch-input input-date" id="check_out_time" name="check_out_time" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Check-Out','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
"  <?php if (isset($_smarty_tpl->tpl_vars['search_data']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_data']->value['date_to'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> readonly>
            </div>
			<div class="form-group">
				<button type="submit" class="btn btn btn-lg btn-primary" name="search_room_submit" id="search_room_submit">
					<span><?php echo smartyTranslate(array('s'=>'Search Rooms','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
</span> <i class="icon-arrow-right pull-right"></i>
				</button>
			</div>
		</form>
	</div>
<?php }?><?php }} ?>

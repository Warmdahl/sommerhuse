<?php /* Smarty version Smarty-3.1.19, created on 2022-10-17 14:52:56
         compiled from "/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/order_restrict_settings/helpers/form/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2063305928634d502877d0c7-79576466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa7f22a8aaa719aac0cf92ee4cc2fe81452b9747' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/order_restrict_settings/helpers/form/form.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2063305928634d502877d0c7-79576466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'table' => 0,
    'current' => 0,
    'submit_action' => 0,
    'token' => 0,
    'style' => 0,
    'id_hotel' => 0,
    'ordr_restrict_hotel_data' => 0,
    'hotels_list' => 0,
    'list' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634d5028796285_67507149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634d5028796285_67507149')) {function content_634d5028796285_67507149($_smarty_tpl) {?><div class="panel">
	<div class="panel-heading">
		<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
			<i class='icon-pencil'></i>&nbsp<?php echo smartyTranslate(array('s'=>'Edit Order Restrict Date','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

		<?php } else { ?>
			<i class='icon-plus'></i>&nbsp<?php echo smartyTranslate(array('s'=>'Add New Order Restrict Date','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

		<?php }?>
	</div>
	<form id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_form" class="defaultForm form-horizontal" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['submit_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>&token=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" enctype="multipart/form-data" <?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?>style="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['style']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_hotel']->value;?>
" name="id_hotel" />
			<div class="form-group">
				<label class="control-label col-sm-3 required"><?php echo smartyTranslate(array('s'=>'Hotel Name :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
				<div class="col-sm-6">
					<p class="form-control-static"><?php echo $_smarty_tpl->tpl_vars['ordr_restrict_hotel_data']->value['hotel_name'];?>
</p>
					<input type="hidden" class="form-control" name="hotel_id" value="<?php echo $_smarty_tpl->tpl_vars['ordr_restrict_hotel_data']->value['id_hotel'];?>
" />
				</div>
			</div>
		<?php } else { ?>
			<div class="form-group">
				<label class="control-label col-sm-3 required" for="resticted_hotel_id"><?php echo smartyTranslate(array('s'=>'Select Hotel :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
				<div class="col-sm-6">
					<div style="width: 195px;">
						<select class="form-control" name="hotel_id" id="resticted_hotel_id" value="">
							<option value='0' selected><?php echo smartyTranslate(array('s'=>'Select Hotel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
							<?php if (isset($_smarty_tpl->tpl_vars['hotels_list']->value)&&$_smarty_tpl->tpl_vars['hotels_list']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotels_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['list']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['hotel_name'];?>
</option>
								<?php } ?>
							<?php }?>
						</select>
					</div>
				</div>
			</div>
		<?php }?>
		<div class="form-group">
			<label class="col-sm-3 control-label required" for="max_htl_book_date">
				<?php echo smartyTranslate(array('s'=>'Maximun date For Booking :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</label>
			<div class="col-sm-2">
				<input autocomplete="off" type="text" class="form-control" id="max_htl_book_date" name="max_htl_book_date" <?php if (isset($_smarty_tpl->tpl_vars['ordr_restrict_hotel_data']->value['max_date'])&&$_smarty_tpl->tpl_vars['ordr_restrict_hotel_data']->value['max_date']) {?>value="<?php echo $_smarty_tpl->tpl_vars['ordr_restrict_hotel_data']->value['max_date'];?>
"<?php }?> readonly/>
				<input autocomplete="off" type="hidden" class="form-control" id="max_htl_book_date_hidden" name="max_htl_book_date_hidden" <?php if (isset($_smarty_tpl->tpl_vars['ordr_restrict_hotel_data']->value['max_date'])&&$_smarty_tpl->tpl_vars['ordr_restrict_hotel_data']->value['hidden_max_date']) {?>value="<?php echo $_smarty_tpl->tpl_vars['ordr_restrict_hotel_data']->value['hidden_max_date'];?>
"<?php }?>/>
			</div>
		</div>
		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrderRestrictSettings'), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default">
				<i class="process-icon-cancel"></i><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</a>
			<button type="submit" name="submitAdd<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</button>
			<button type="submit" name="submitAdd<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true);?>
AndStay" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</button>
		</div>
	</form>
</div>
<?php }} ?>

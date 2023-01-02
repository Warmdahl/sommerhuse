<?php /* Smarty version Smarty-3.1.19, created on 2022-10-20 07:00:21
         compiled from "/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/add_hotel/helpers/form/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14551334096350d5e5da5ac1-77937507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe4ef11c551ff1823b346d4a667cb7d8bcf0192' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/add_hotel/helpers/form/form.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14551334096350d5e5da5ac1-77937507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'table' => 0,
    'name_controller' => 0,
    'current' => 0,
    'submit_action' => 0,
    'token' => 0,
    'style' => 0,
    'languages' => 0,
    'currentLang' => 0,
    'language' => 0,
    'hotel_info' => 0,
    'hotel_name' => 0,
    'short_desc_name' => 0,
    'description' => 0,
    'country_var' => 0,
    'countr' => 0,
    'link' => 0,
    'state_var' => 0,
    'state' => 0,
    'policies' => 0,
    'enabledDisplayMap' => 0,
    'hotelImages' => 0,
    'image' => 0,
    'allRefundRules' => 0,
    'refundRule' => 0,
    'hotelRefundRules' => 0,
    'WK_REFUND_RULE_PAYMENT_TYPE_PERCENTAGE' => 0,
    'defaultCurrency' => 0,
    'defaultCountry' => 0,
    'iso' => 0,
    'ad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6350d5e5e4e159_61026095',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6350d5e5e4e159_61026095')) {function content_6350d5e5e4e159_61026095($_smarty_tpl) {?><div class="panel">
	<div class="panel-heading">
		<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
			<i class='icon-pencil'></i> <?php echo smartyTranslate(array('s'=>'Edit Hotel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

		<?php } else { ?>
			<i class='icon-plus'></i> <?php echo smartyTranslate(array('s'=>'Add New Hotel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

		<?php }?>
	</div>

	<form id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_form" class="defaultForm <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_controller']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 form-horizontal" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['submit_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>&token=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" enctype="multipart/form-data" <?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?>style="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['style']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			<div class="col-lg-12">
				<label class="control-label"><?php echo smartyTranslate(array('s'=>'Choose Language','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
				<input type="hidden" name="choosedLangId" id="choosedLangId" value="<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
">
				<button type="button" id="multi_lang_btn" class="btn btn-default dropdown-toggle wk_language_toggle" data-toggle="dropdown">
					<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['name'];?>

					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu wk_language_menu" style="left:14%;top:32px;">
					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
						<li>
							<a href="javascript:void(0)" onclick="showLangField('<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
', <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);">
								<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

							</a>
						</li>
					<?php } ?>
				</ul>
				<p class="help-block"><?php echo smartyTranslate(array('s'=>'Change language for updating information in multiple language.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
				<hr>
			</div>
		<?php }?>

		<div class="tabs wk-tabs-panel">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#hotel-information" data-toggle="tab">
						<i class="icon-info-sign"></i>
						<?php echo smartyTranslate(array('s'=>'Information','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</a>
				</li>
				<li>
					<a href="#hotel-images" data-toggle="tab">
						<i class="icon-image"></i>
						<?php echo smartyTranslate(array('s'=>'Images','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</a>
				</li>
				<li>
					<a href="#hotel-refund-policies" data-toggle="tab">
						<i class="icon-file"></i>
						<?php echo smartyTranslate(array('s'=>'Refund Policies','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</a>
				</li>
			</ul>
			<div class="tab-content panel collapse in">
				<div class="tab-pane active" id="hotel-information">
					<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
						<input id="id-hotel" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" name="id" />
					<?php }?>
					<div class="form-group">
						<label class="control-label col-lg-3">
							<span>
								<?php echo smartyTranslate(array('s'=>'Enable Hotel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

							</span>
						</label>
						<div class="col-lg-9 ">
							<span class="switch prestashop-switch fixed-width-lg">
								<input type="radio" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&$_smarty_tpl->tpl_vars['hotel_info']->value['active']==1) {?> checked="checked" <?php } else { ?>checked="checked"<?php }?> value="1" id="ENABLE_HOTEL_on" name="ENABLE_HOTEL">
								<label for="ENABLE_HOTEL_on"><?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>
</label>
								<input <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&$_smarty_tpl->tpl_vars['hotel_info']->value['active']==0) {?> checked="checked" <?php }?> type="radio" value="0" id="ENABLE_HOTEL_off" name="ENABLE_HOTEL">
								<label for="ENABLE_HOTEL_off"><?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>
</label>
								<a class="slide-button btn"></a>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label required" for="hotel_name" >
							<?php echo smartyTranslate(array('s'=>'Hotel Name :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

							<?php echo $_smarty_tpl->getSubTemplate ("../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						</label>
						<div class="col-lg-6">
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
								<?php $_smarty_tpl->tpl_vars["hotel_name"] = new Smarty_variable("hotel_name_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
								<input type="text"
								id="hotel_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
								name="hotel_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
								value="<?php if (isset($_POST[$_smarty_tpl->tpl_vars['hotel_name']->value])) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST[$_smarty_tpl->tpl_vars['hotel_name']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php $_tmp1=ob_get_clean();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['hotel_name'][$_tmp1], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>"
								class="form-control wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
								maxlength="128"
								<?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?> />
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">
							<?php echo smartyTranslate(array('s'=>'Short Description :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

							<?php echo $_smarty_tpl->getSubTemplate ("../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						</label>
						<div class="col-lg-6">
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
								<?php $_smarty_tpl->tpl_vars["short_desc_name"] = new Smarty_variable("short_description_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
								<div id="short_desc_div_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?>>
									<textarea
									name="short_description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									id="short_description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									cols="2" rows="3"
									class="wk_tinymce form-control"><?php if (isset($_POST[$_smarty_tpl->tpl_vars['short_desc_name']->value])) {?><?php echo $_POST[$_smarty_tpl->tpl_vars['short_desc_name']->value];?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['short_description'][$_tmp2];?>
<?php }?></textarea>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">
							<?php echo smartyTranslate(array('s'=>'Description :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

							<?php echo $_smarty_tpl->getSubTemplate ("../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						</label>
						<div class="col-lg-6">
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
								<?php $_smarty_tpl->tpl_vars["description"] = new Smarty_variable("description_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
								<div id="description_div_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?>>
									<textarea
									name="description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									id="description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									cols="2" rows="3"
									class="wk_tinymce form-control"><?php if (isset($_POST[$_smarty_tpl->tpl_vars['description']->value])) {?><?php echo $_POST[$_smarty_tpl->tpl_vars['description']->value];?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['description'][$_tmp3];?>
<?php }?></textarea>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label required"><?php echo smartyTranslate(array('s'=>'Phone :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
						<div class="col-sm-6">
							<input type="text" name="phone" id="phone" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['phone'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label required"><?php echo smartyTranslate(array('s'=>'Email :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
						<div class="col-sm-6">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="icon-envelope-o"></i>
								</span>
								<input class="reg_sel_input form-control-static" type="text" name="email" id="hotel_email"  <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['email'];?>
"<?php }?>/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label required"><?php echo smartyTranslate(array('s'=>'Address :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
						<div class="col-sm-6">
							<textarea name="address" rows="4" cols="35" ><?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['address'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 required" for="hotel_country"><?php echo smartyTranslate(array('s'=>'Rating :'),$_smarty_tpl);?>
</label>
						<div class="col-sm-6">
							<div style="width: 195px;">
								<select class="form-control" name="hotel_rating" id="hotel_rating" value="">
									<option value="" selected="selected">No Star</option>
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating']==1) {?>selected<?php }?><?php }?>>*</option>
									<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating']==2) {?>selected<?php }?><?php }?>>**</option>
									<option value="3" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating']==3) {?>selected<?php }?><?php }?>>***</option>
									<option value="4" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating']==4) {?>selected<?php }?><?php }?>>****</option>
									<option value="5" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating']==5) {?>selected<?php }?><?php }?>>*****</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group check_in_div" style="position:relative">
						<label class="col-sm-3 control-label required" for="check_in_time">
							<?php echo smartyTranslate(array('s'=>'Check In :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

						</label>
						<div class="col-sm-2">
							<input autocomplete="off" type="text" class="form-control" id="check_in_time" name="check_in" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['check_in'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> />
						</div>
					</div>
					<div class="form-group check_out_div" style="position:relative">
						<label class="col-sm-3 control-label required" for="check_out_time">
							<?php echo smartyTranslate(array('s'=>'Check Out :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

						</label>
						<div class="col-sm-2">
							<input autocomplete="off" type="text" class="form-control" id="check_out_time" name="check_out" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['check_out'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 required" for="hotel_country"><?php echo smartyTranslate(array('s'=>'Country :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
						<div class="col-sm-9">
							<div style="width: 195px;">
								<select class="form-control" name="hotel_country" id="hotel_country" value="">
									<option value="0" selected="selected"><?php echo smartyTranslate(array('s'=>'Choose your Country','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
 </option>
									<?php if ($_smarty_tpl->tpl_vars['country_var']->value) {?>
										<?php  $_smarty_tpl->tpl_vars['countr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['countr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['country_var']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['countr']->key => $_smarty_tpl->tpl_vars['countr']->value) {
$_smarty_tpl->tpl_vars['countr']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['countr']->value['id_country'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['country_id']==((string)$_smarty_tpl->tpl_vars['countr']->value['id_country'])) {?>selected<?php }?><?php }?>> <?php echo $_smarty_tpl->tpl_vars['countr']->value['name'];?>
</option>
										<?php } ?>
									<?php }?>
								</select>
							</div>
							<div class="help-block"><em>** <?php echo smartyTranslate(array('s'=>'If Hotel\'s country is not present in country list then import that country from','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLocalization'), ENT_QUOTES, 'UTF-8', true);?>
"> <strong><?php echo smartyTranslate(array('s'=>'Localization','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</strong> </a><?php echo smartyTranslate(array('s'=>'tab.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</em></div>
						</div>
					</div>
					<div class="form-group hotel_state_dv" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&!$_smarty_tpl->tpl_vars['state_var']->value) {?>style="display:none;"<?php }?>>
						<label class="control-label col-sm-3 required hotel_state_lbl" for="hotel_state" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&!$_smarty_tpl->tpl_vars['state_var']->value) {?>style="display:none;"<?php }?>><?php echo smartyTranslate(array('s'=>'State :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
						<div class="col-sm-6">
							<div style="width: 195px;">
								<select class="form-control" name="hotel_state" id="hotel_state">
								<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
									<?php if ($_smarty_tpl->tpl_vars['state_var']->value) {?>
										<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['state_var']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['state']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['state_id']==((string)$_smarty_tpl->tpl_vars['state']->value['id'])) {?>selected<?php }?><?php }?>> <?php echo $_smarty_tpl->tpl_vars['state']->value['name'];?>
</option>
										<?php } ?>
									<?php }?>
								<?php } else { ?>
									<option value="0" selected="selected"><?php echo smartyTranslate(array('s'=>'Choose Country First','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
								<?php }?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 required" for="hotel_city"><?php echo smartyTranslate(array('s'=>'City :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
						<div class="col-sm-6">
							<input class="form-control" type="" data-validate="" id="hotel_city" name="hotel_city" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['city'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 required" for="hotel_postal_code"><?php echo smartyTranslate(array('s'=>'Zip Code :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
						<div class="col-sm-6">
							<input class="form-control" type="" data-validate="" id="hotel_postal_code" name="hotel_postal_code" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['zipcode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">
							<?php echo smartyTranslate(array('s'=>'Hotel Policies :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

							<?php echo $_smarty_tpl->getSubTemplate ("../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						</label>
						<div class="col-lg-6">
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
								<?php $_smarty_tpl->tpl_vars["policies"] = new Smarty_variable("policies_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
								<div id="policies_div_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?>>
									<textarea
									name="policies_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									id="policies_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									cols="2" rows="3"
									class="wk_tinymce form-control"><?php if (isset($_POST[$_smarty_tpl->tpl_vars['policies']->value])) {?><?php echo $_POST[$_smarty_tpl->tpl_vars['policies']->value];?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['policies'][$_tmp4];?>
<?php }?></textarea>
								</div>
							<?php } ?>
						</div>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['enabledDisplayMap']->value)&&$_smarty_tpl->tpl_vars['enabledDisplayMap']->value) {?>
						<div class="form-group">
							<label class="col-sm-3 control-label"><?php echo smartyTranslate(array('s'=>'Map :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
							<div class="col-sm-6" id="googleMapContainer">
								<input type="hidden" id="loclatitude" name="loclatitude" value="<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['latitude'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" />
								<input type="hidden" id="loclongitude" name="loclongitude" value="<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['longitude'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" />
								<input type="hidden" id="locformatedAddr" name="locformatedAddr" value="<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['map_formated_address'];?>
<?php }?>" />
								<input type="hidden" id="googleInputField" name="googleInputField" value="<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['map_input_text'];?>
<?php }?>" />
								<input id="pac-input" class="controls" type="text" placeholder="Enter a location">
								<div id="map"></div>
							</div>
						</div>
					<?php }?>
				</div>
				<div class="tab-pane" id="hotel-images">
					<?php if (isset($_smarty_tpl->tpl_vars['hotel_info']->value['id'])&&$_smarty_tpl->tpl_vars['hotel_info']->value['id']) {?>
						<div class="form-group row">
							<label for="hotel_images" class="col-sm-3 control-label padding-top-0">
								<?php echo smartyTranslate(array('s'=>'Upload images','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
&nbsp;:&nbsp;&nbsp;
							</label>
							<div class="col-sm-5">
								<input class="form-control-static" type="file" id="hotel_images" name="hotel_images[]" multiple>
							</div>
						</div>
						<hr>
						
						<h4><i class="icon-image"></i> <span><?php echo smartyTranslate(array('s'=>'Hotel Images','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></h4>
						<div class="row">
							<div class="col-sm-12">
								<div class="table-responsive">
									<table class="table" id="hotel-image-table">
										<thead>
											<tr>
												<th class="text-center"><?php echo smartyTranslate(array('s'=>'Image Id','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
												<th class="text-center"><?php echo smartyTranslate(array('s'=>'Image','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
												<th class="text-center"><?php echo smartyTranslate(array('s'=>'Cover','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
												<th class="text-center"><?php echo smartyTranslate(array('s'=>'Action','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_smarty_tpl->tpl_vars['hotelImages']->value)&&$_smarty_tpl->tpl_vars['hotelImages']->value) {?>
												<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotelImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
													<tr class="<?php if ($_smarty_tpl->tpl_vars['image']->value['cover']==1) {?>cover-image-tr<?php }?>">
														<td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
														<td class="text-center">
															<a class="htl-img-preview" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_link'], ENT_QUOTES, 'UTF-8', true);?>
">
																<img class="img-thumbnail" width="100" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_link'], ENT_QUOTES, 'UTF-8', true);?>
"/>
															</a>
														</td>
														<td class="text-center <?php if ($_smarty_tpl->tpl_vars['image']->value['cover']==1) {?>cover-image-td<?php }?>">
															<a href="#" class="<?php if ($_smarty_tpl->tpl_vars['image']->value['cover']==1) {?>text-success<?php } else { ?>text-danger<?php }?> changer-cover-image" data-id-hotel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-is-cover="<?php if ($_smarty_tpl->tpl_vars['image']->value['cover']==1) {?>1<?php } else { ?>0<?php }?>" data-id-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
																<?php if ($_smarty_tpl->tpl_vars['image']->value['cover']==1) {?>
																	<i class="icon-check"></i>
																<?php } else { ?>
																	<i class="icon-times"></i>
																<?php }?>
															</a>
														</td>
														<td class="text-center">
															<button type="button" class="btn btn-default delete-hotel-image" data-id-hotel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-is-cover="<?php if ($_smarty_tpl->tpl_vars['image']->value['cover']==1) {?>1<?php } else { ?>0<?php }?>" data-id-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-trash"></i></button>
														</td>
													</tr>
												<?php } ?>
											<?php } else { ?>
												<tr class="list-empty-tr">
													<td class="list-empty" colspan="5">
														<div class="list-empty-msg">
															<i class="icon-warning-sign list-empty-icon"></i>
															<?php echo smartyTranslate(array('s'=>'No Image Found','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

														</div>
													</td>
												</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					<?php } else { ?>
						<div class="alert alert-warning">
							<?php echo smartyTranslate(array('s'=>'Please save the hotel information before saving the hotel images.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

						</div>
					<?php }?>
				</div>
				<div class="tab-pane" id="hotel-refund-policies">
					<?php if (isset($_smarty_tpl->tpl_vars['hotel_info']->value['id'])&&$_smarty_tpl->tpl_vars['hotel_info']->value['id']) {?>
						<div class="form-group">
							<label for="active_refund" class="control-label col-sm-5">
								<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title='<?php echo smartyTranslate(array('s'=>'Enable, if you want to enable refund for this hotel.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
'><?php echo smartyTranslate(array('s'=>'Enable refund','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
							</label>
							<div class="col-sm-7">
								<span class="switch prestashop-switch fixed-width-lg">
									<input type="radio" value="1" id="active_refund_on" name="active_refund"
									<?php if (isset($_POST['active_refund'])) {?><?php if ($_POST['active_refund']) {?>checked="checked"<?php }?><?php } elseif (isset($_smarty_tpl->tpl_vars['hotel_info']->value)&&$_smarty_tpl->tpl_vars['hotel_info']->value['active_refund']) {?>checked="checked"<?php }?>>

									<label for="active_refund_on"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>

									<input type="radio" value="0" id="active_refund_off" name="active_refund"
									<?php if (isset($_POST['active_refund'])) {?><?php if (!$_POST['active_refund']) {?>checked="checked"<?php }?><?php } elseif (!isset($_smarty_tpl->tpl_vars['hotel_info']->value)) {?>checked="checked"<?php } elseif (isset($_smarty_tpl->tpl_vars['hotel_info']->value)&&!$_smarty_tpl->tpl_vars['hotel_info']->value['active_refund']) {?>checked="checked"<?php }?>>

									<label for="active_refund_off"><?php echo smartyTranslate(array('s'=>'No','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
						</div>
						<div class="refund_rules_container" <?php if (isset($_POST['active_refund'])) {?><?php if (!$_POST['active_refund']) {?>style="display:none;"<?php }?><?php } elseif (!isset($_smarty_tpl->tpl_vars['hotel_info']->value['active_refund'])||!$_smarty_tpl->tpl_vars['hotel_info']->value['active_refund']) {?>style="display:none;"<?php }?>>
							<?php if (isset($_smarty_tpl->tpl_vars['allRefundRules']->value)&&$_smarty_tpl->tpl_vars['allRefundRules']->value) {?>
								<hr>
								<div class="table-responsive">
									<table class="table wk-htl-datatable">
										<thead>
											<tr>
												<th></th>
												<th></th>
												<th><?php echo smartyTranslate(array('s'=>'Id','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
												<th><?php echo smartyTranslate(array('s'=>'Name','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
												<th><?php echo smartyTranslate(array('s'=>'Full payment charges','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
												<th><?php echo smartyTranslate(array('s'=>'Advance payment charges','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
												<th><?php echo smartyTranslate(array('s'=>'Days before cancelation','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
											</tr>
										</thead>
										<tbody id="slides">
											<?php  $_smarty_tpl->tpl_vars['refundRule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['refundRule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allRefundRules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['refundRule']->key => $_smarty_tpl->tpl_vars['refundRule']->value) {
$_smarty_tpl->tpl_vars['refundRule']->_loop = true;
?>
												<tr id="slides_<?php echo $_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'];?>
">
													<td>
														<i class="icon-arrows "></i>
													</td>
													<td>
														<p class="checkbox">
															<label><input name="htl_refund_rules[]" type="checkbox" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['hotelRefundRules']->value)&&(in_array($_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'],$_smarty_tpl->tpl_vars['hotelRefundRules']->value))) {?>checked<?php }?> /></label>
														</p>
													</td>
													<td>
														<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'], ENT_QUOTES, 'UTF-8', true);?>
 <a target="blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrderRefundRules'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_refund_rule=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'], ENT_QUOTES, 'UTF-8', true);?>
&amp;updatehtl_order_refund_rules"><i class="icon-external-link-sign"></i></a>
													</td>
													<td>
														<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

													</td>
													<td>
														<?php if ($_smarty_tpl->tpl_vars['refundRule']->value['payment_type']==$_smarty_tpl->tpl_vars['WK_REFUND_RULE_PAYMENT_TYPE_PERCENTAGE']->value) {?>
															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['deduction_value_full_pay'], ENT_QUOTES, 'UTF-8', true);?>
 %
														<?php } else { ?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['refundRule']->value['deduction_value_full_pay'],'currency'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>

														<?php }?>
													</td>
													<td>
														<?php if ($_smarty_tpl->tpl_vars['refundRule']->value['payment_type']==$_smarty_tpl->tpl_vars['WK_REFUND_RULE_PAYMENT_TYPE_PERCENTAGE']->value) {?>
															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['deduction_value_adv_pay'], ENT_QUOTES, 'UTF-8', true);?>
 %
														<?php } else { ?>
															<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['refundRule']->value['deduction_value_adv_pay'],'currency'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl);?>

														<?php }?>
													</td>
													<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['days'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo smartyTranslate(array('s'=>'days','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							<?php } else { ?>
								<div class="alert alert-warning">
									<?php echo smartyTranslate(array('s'=>'No refund rules are created yet.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'You can create refund rules by visiting '),$_smarty_tpl);?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrderRefundRules');?>
"><?php echo smartyTranslate(array('s'=>'create refund rules'),$_smarty_tpl);?>
</a>
								</div>
							<?php }?>
						</div>
					<?php } else { ?>
						<div class="alert alert-warning">
							<?php echo smartyTranslate(array('s'=>'Please save the hotel information before saving the hotel images.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

						</div>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddHotel'), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default">
				<i class="process-icon-cancel"></i><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</a>
			<button type="submit" name="submitAddhotel_branch_info" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</button>
			<button type="submit" name="submitAdd<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true);?>
AndStay" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</button>
		</div>
	</form>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('adminHotelCtrlUrl'=>$_smarty_tpl->tpl_vars['link']->value->getAdminlink('AdminAddHotel')),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'imgUploadSuccessMsg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'imgUploadSuccessMsg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Image Successfully Uploaded','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'imgUploadSuccessMsg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'imgUploadErrorMsg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'imgUploadErrorMsg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Something went wrong while uploading images. Please try again later !!','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'imgUploadErrorMsg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'coverImgSuccessMsg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'coverImgSuccessMsg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Cover image changed successfully','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'coverImgSuccessMsg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'coverImgErrorMsg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'coverImgErrorMsg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Error while changing cover image','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'coverImgErrorMsg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'deleteImgSuccessMsg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'deleteImgSuccessMsg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Image deleted successfully','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'deleteImgSuccessMsg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'deleteImgErrorMsg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'deleteImgErrorMsg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Something went wrong while deleteing image. Please try again later !!','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'deleteImgErrorMsg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('enabledDisplayMap'=>$_smarty_tpl->tpl_vars['enabledDisplayMap']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('defaultCountry'=>$_smarty_tpl->tpl_vars['defaultCountry']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('statebycountryurl'=>$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddHotel')),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'htlImgDeleteSuccessMsg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'htlImgDeleteSuccessMsg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Image removed successfully.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'htlImgDeleteSuccessMsg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'htlImgDeleteErrMsg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'htlImgDeleteErrMsg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Some error occurred while deleting hotel image.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'htlImgDeleteErrMsg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<script type="text/javascript">
	// for tiny mce setup
	var iso = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['iso']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var pathCSS = "<?php echo mb_convert_encoding(htmlspecialchars(@constant('_THEME_CSS_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var ad = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ad']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	$(document).ready(function(){
		
			tinySetup({
				editor_selector :"wk_tinymce",
				width : 700
			});
		

	});
</script>
<?php }} ?>

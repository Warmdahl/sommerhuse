<?php /* Smarty version Smarty-3.1.19, created on 2022-10-17 18:26:02
         compiled from "/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/room_type_global_demand/helpers/form/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1671346590634d821a862fb4-08403288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd48d1928d7d08731b29f5bcfd463cad09283049e' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/room_type_global_demand/helpers/form/form.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671346590634d821a862fb4-08403288',
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
    'globalDemands' => 0,
    'languages' => 0,
    'currentLang' => 0,
    'language' => 0,
    'demand_name' => 0,
    'defaultcurrencySign' => 0,
    'taxRuleGroups' => 0,
    'tax_rule' => 0,
    'option_name' => 0,
    'key' => 0,
    'info' => 0,
    'k' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634d821a8c0b38_74022219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634d821a8c0b38_74022219')) {function content_634d821a8c0b38_74022219($_smarty_tpl) {?>

<div class="panel">
	<div class="panel-heading">
		<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
			<i class='icon-pencil'></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Edit Facility','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

		<?php } else { ?>
			<i class='icon-plus'></i>&nbsp;<?php echo smartyTranslate(array('s'=>'Add Facility','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

		<?php }?>
	</div>
	<form id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" class="defaultForm form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?>&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" enctype="multipart/form-data" <?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?>style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
			<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['globalDemands']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" name="id_global_demand" />
		<?php }?>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			<div class="col-sm-12">
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
		<div class="form-group">
			<label class="col-sm-3 control-label required" for="hotel_name" >
				<?php echo smartyTranslate(array('s'=>'Facility Name :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->getSubTemplate ("../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</label>
			<div class="col-sm-6">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["demand_name"] = new Smarty_variable("demand_name_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
					<input type="text"
					id="demand_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
					name="demand_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
					value="<?php if (isset($_POST[$_smarty_tpl->tpl_vars['demand_name']->value])) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST[$_smarty_tpl->tpl_vars['demand_name']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php $_tmp1=ob_get_clean();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['globalDemands']->value['name'][$_tmp1], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>"
					class="form-control wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
					maxlength="128"
					<?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?> />
				<?php } ?>
			</div>
		</div>
		<div class="form-group" <?php if (isset($_POST['active_adv_option'])) {?><?php if ($_POST['active_adv_option']) {?>style="display:none;"<?php }?><?php } elseif (isset($_smarty_tpl->tpl_vars['globalDemands']->value['adv_option'])&&count($_smarty_tpl->tpl_vars['globalDemands']->value['adv_option'])) {?>style="display:none;"<?php }?>>
			<label class="col-sm-3 control-label required" >
				<?php echo smartyTranslate(array('s'=>'Price','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
(<?php echo smartyTranslate(array('s'=>'tax excl.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
)
			</label>
			<div class="col-sm-3">
				<div class="input-group">
					<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['defaultcurrencySign']->value;?>
</span>
					<input type="text" id="price" name="price"
					value="<?php if (isset($_POST['price'])) {?><?php echo $_POST['price'];?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['globalDemands']->value['price'])) {?><?php echo $_smarty_tpl->tpl_vars['globalDemands']->value['price'];?>
<?php }?>"/>
				</div>
			</div>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['taxRuleGroups']->value)) {?>
			<div class="form-group">
				<label class="col-sm-3 control-label required" >
					<?php echo smartyTranslate(array('s'=>'Tax Rule','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</label>
				<div class="col-sm-3">
					<select name="id_tax_rules_group" id="id_tax_rules_group" class="form-control form-control-select" data-action="input_excl">
						<option value="0"><?php echo smartyTranslate(array('s'=>'No tax','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['tax_rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax_rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxRuleGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax_rule']->key => $_smarty_tpl->tpl_vars['tax_rule']->value) {
$_smarty_tpl->tpl_vars['tax_rule']->_loop = true;
?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax_rule']->value['id_tax_rules_group'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_POST['id_tax_rules_group'])&&($_POST['id_tax_rules_group']==$_smarty_tpl->tpl_vars['tax_rule']->value['id_tax_rules_group'])) {?>selected<?php } elseif (isset($_smarty_tpl->tpl_vars['globalDemands']->value['id_tax_rules_group'])&&($_smarty_tpl->tpl_vars['globalDemands']->value['id_tax_rules_group']==$_smarty_tpl->tpl_vars['tax_rule']->value['id_tax_rules_group'])) {?>selected<?php }?>>
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax_rule']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

							</option>
						<?php } ?>
					</select>
				</div>
			</div>
		<?php }?>
		<div class="form-group">
			<label class="col-sm-3 control-label">
				<span class="label-tooltip" data-toggle="tooltip" data-html="true" data-original-title="<?php echo smartyTranslate(array('s'=>'Enable, if you want to add the price of this facility for each day in the booking. Disable, If you want to add price of the facility for entire date range of the booking.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Per day price calculation','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
			</label>
			<div class="col-sm-6">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" value="1" id="price_calc_method_on" name="price_calc_method"
					<?php if (isset($_POST['price_calc_method'])) {?>
						<?php if ($_POST['price_calc_method']) {?>
							checked="checked"
						<?php }?>
					<?php } elseif (isset($_smarty_tpl->tpl_vars['globalDemands']->value['price_calc_method'])&&$_smarty_tpl->tpl_vars['globalDemands']->value['price_calc_method']) {?>
						checked="checked"
					<?php }?>>
					<label for="price_calc_method_on"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
					<input type="radio" value="0" id="price_calc_method_off" name="price_calc_method"
					<?php if (isset($_POST['price_calc_method'])) {?>
						<?php if (!$_POST['price_calc_method']) {?>
							checked="checked"
						<?php }?>
					<?php } elseif (!isset($_smarty_tpl->tpl_vars['globalDemands']->value['price_calc_method'])) {?>
						checked="checked"
					<?php } elseif (isset($_smarty_tpl->tpl_vars['globalDemands']->value['price_calc_method'])&&!$_smarty_tpl->tpl_vars['globalDemands']->value['price_calc_method']) {?>
						checked="checked"
					<?php }?>>
					<label for="price_calc_method_off"><?php echo smartyTranslate(array('s'=>'No','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-9 col-lg-offset-3">
				<div class="alert alert-info">
					<?php echo smartyTranslate(array('s'=>'Enable ("Per day price calculation"), if you want to add the price of this facility for each day in the booking. Disable, If you want to add price of the facility for entire date range of the booking.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">
				<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'Price of the facility will be calculated according to the price of the advance options.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Create advance options','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
			</label>
			<div class="col-sm-6">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" value="1" id="active_adv_option_on" name="active_adv_option"
					<?php if (isset($_POST['active_adv_option'])) {?>
						<?php if ($_POST['active_adv_option']) {?>
							checked="checked"
						<?php }?>
					<?php } elseif (isset($_smarty_tpl->tpl_vars['globalDemands']->value)&&count($_smarty_tpl->tpl_vars['globalDemands']->value['adv_option'])) {?>
						checked="checked"
					<?php }?>>
					<label for="active_adv_option_on"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
					<input type="radio" value="0" id="active_adv_option_off" name="active_adv_option"
					<?php if (isset($_POST['active_adv_option'])) {?>
						<?php if (!$_POST['active_adv_option']) {?>
							checked="checked"
						<?php }?>
					<?php } elseif (!isset($_smarty_tpl->tpl_vars['globalDemands']->value)) {?>
						checked="checked"
					<?php } elseif (isset($_smarty_tpl->tpl_vars['globalDemands']->value)&&!count($_smarty_tpl->tpl_vars['globalDemands']->value['adv_option'])) {?>
						checked="checked"
					<?php }?>>
					<label for="active_adv_option_off"><?php echo smartyTranslate(array('s'=>'No','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>
		<div class="adv_options_dtl form-group" <?php if (isset($_POST['active_adv_option'])) {?><?php if (!$_POST['active_adv_option']) {?>style="display:none;"<?php }?><?php } elseif (!isset($_smarty_tpl->tpl_vars['globalDemands']->value['adv_option'])||!count($_smarty_tpl->tpl_vars['globalDemands']->value['adv_option'])) {?>style="display:none;"<?php }?>>
			<label class="col-sm-3 control-label">
				
			</label>
			<div class="col-sm-9">
				<div class="table-responsive-row clearfix">
					<table class="table table-bordered adv_option_table">
						<tr class="nodrag nodrop">
							<th class="left">
								<span><?php echo smartyTranslate(array('s'=>'Option Name','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
							</th>
							<th class="left">
								<span><?php echo smartyTranslate(array('s'=>'Price','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
							</th>
							<th class="center">
								<span><?php echo smartyTranslate(array('s'=>'action','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
							</th>
						</tr>
						<?php if (isset($_smarty_tpl->tpl_vars['globalDemands']->value['adv_option'])&&$_smarty_tpl->tpl_vars['globalDemands']->value['adv_option']) {?>
							<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['globalDemands']->value['adv_option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
								<tr>
									<td class="center">
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											<div class="input-group">
												<span class="input-group-addon"><?php echo $_smarty_tpl->getSubTemplate ("../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</span>
										<?php }?>
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												<?php $_smarty_tpl->tpl_vars["option_name"] = new Smarty_variable("option_name_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
												<input type="text"
												name="option_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
[]"
												value="<?php if (isset($_POST[$_smarty_tpl->tpl_vars['option_name']->value][$_smarty_tpl->tpl_vars['key']->value])&&$_POST[$_smarty_tpl->tpl_vars['option_name']->value][$_smarty_tpl->tpl_vars['key']->value]) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST[$_smarty_tpl->tpl_vars['option_name']->value][$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['info']->value['name'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php }?>"
												class="form-control wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
												maxlength="128"
												<?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?> />
											<?php } ?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
											</div>
										<?php }?>
									</td>
									<td class="center">
										<div class="input-group">
											<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['defaultcurrencySign']->value;?>
</span>
											<input type="text" name="option_price[]" value="<?php if (isset($_POST['option_price'][$_smarty_tpl->tpl_vars['key']->value])&&$_POST['option_price'][$_smarty_tpl->tpl_vars['key']->value]) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST['option_price'][$_smarty_tpl->tpl_vars['key']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
<?php }?>"/>
										</div>
										<input type="hidden" name="id_option[]" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" />
									</td>
									<td class="center">
										<a href="#" class="remove_adv_option btn btn-default"><i class="icon-trash"></i></a>
									</td>
								</tr>
							<?php } ?>
						<?php } else { ?>
							<?php $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 0, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration == 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration == $_smarty_tpl->tpl_vars['k']->total;?>
								<tr>
									<td class="center">
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
												<div class="input-group">
													<span class="input-group-addon"><?php echo $_smarty_tpl->getSubTemplate ("../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</span>
											<?php }?>
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												<?php $_smarty_tpl->tpl_vars["option_name"] = new Smarty_variable("option_name_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
												<input type="text"
												name="option_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
[]"
												value="<?php if (isset($_POST[$_smarty_tpl->tpl_vars['option_name']->value][$_smarty_tpl->tpl_vars['k']->value])&&$_POST[$_smarty_tpl->tpl_vars['option_name']->value][$_smarty_tpl->tpl_vars['k']->value]) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST[$_smarty_tpl->tpl_vars['option_name']->value][$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>"
												class="form-control wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
												maxlength="128"
												<?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?> />
											<?php } ?>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
												</div>
											<?php }?>
									</td>
									<td class="center">
										<div class="input-group">
											<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['defaultcurrencySign']->value;?>
</span>
											<input type="text" name="option_price[]" value="<?php if (isset($_POST['option_price'][$_smarty_tpl->tpl_vars['k']->value])&&$_POST['option_price'][$_smarty_tpl->tpl_vars['k']->value]) {?><?php echo mb_convert_encoding(htmlspecialchars($_POST['option_price'][$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>"/>
										</div>
										<input type="hidden" name="id_option[]"/>
									</td>
									<td class="center">
										<a href="#" class="remove_adv_option btn btn-default"><i class="icon-trash"></i></a>
									</td>
								</tr>
							<?php }} ?>
						<?php }?>
					</table>
					<div class="form-group">
						<div class="col-sm-12">
							<button id="add_more_options_button" class="btn btn-default" type="button">
								<i class="icon-plus-circle"></i>
								<?php echo smartyTranslate(array('s'=>'Add More Options','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRoomTypeGlobalDemand'), ENT_QUOTES, 'UTF-8', true);?>
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
</div><?php }} ?>

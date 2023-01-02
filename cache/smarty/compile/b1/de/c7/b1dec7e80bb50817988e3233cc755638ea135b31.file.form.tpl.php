<?php /* Smarty version Smarty-3.1.19, created on 2022-10-18 21:51:44
         compiled from "/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/hotel_feature_prices_settings/helpers/form/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:683460892634f03d0b4c8c2-61239250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1dec7e80bb50817988e3233cc755638ea135b31' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/hotel_feature_prices_settings/helpers/form/form.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '683460892634f03d0b4c8c2-61239250',
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
    'objFeaturePrice' => 0,
    'productName' => 0,
    'languages' => 0,
    'language' => 0,
    'feature_price_name' => 0,
    'currentLang' => 0,
    'date_from' => 0,
    'date_to' => 0,
    'special_days' => 0,
    'defaultcurrency_sign' => 0,
    'groups' => 0,
    'group' => 0,
    'feature_price_groups' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634f03d0bb1f35_45467445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634f03d0bb1f35_45467445')) {function content_634f03d0bb1f35_45467445($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/qloapps/www/hotelcommerce/tools/smarty/plugins/modifier.date_format.php';
?>

<div class="panel">
	<div class="panel-heading">
		<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
			<i class='icon-pencil'></i>&nbsp<?php echo smartyTranslate(array('s'=>'Edit Feature Price Rule','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

		<?php } else { ?>
			<i class='icon-plus'></i>&nbsp<?php echo smartyTranslate(array('s'=>'Add New Feature Price Rule','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

		<?php }?>
	</div>
	<form id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" class="defaultForm form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?>&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" enctype="multipart/form-data" <?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {?>style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>
			<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['objFeaturePrice']->value->id, ENT_QUOTES, 'UTF-8', true);?>
" name="id_feature_price" />
		<?php }?>
		<div class="form-group">
			<label class="col-sm-3 control-label required" for="feature_price_name" >
				<?php echo smartyTranslate(array('s'=>'Room Type :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</label>
			<div class="col-sm-3">
				<input autocomplete="off" type="text" id="room_type_name" name="room_type_name" class="form-control" placeholder= "<?php echo smartyTranslate(array('s'=>'Enter Room Type Name','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['productName']->value)) {?><?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
<?php }?>"/>
				<input type="hidden" id="room_type_id" name="room_type_id" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->id_product)) {?><?php echo $_smarty_tpl->tpl_vars['objFeaturePrice']->value->id_product;?>
<?php } else { ?>0<?php }?>"/>
				<div class="dropdown">
	                <ul class="room_type_search_results_ul"></ul>
	            </div>
				<p class="error-block" style="display:none; color: #CD5D5D;"><?php echo smartyTranslate(array('s'=>'No match found for this search. Please try with an existing name.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
			</div>
			<div class="help-block">
				**<?php echo smartyTranslate(array('s'=>'Enter room type name and select the room for which you are going to create this feature price plan.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label required" for="feature_price_name" >
				<?php echo smartyTranslate(array('s'=>'Feature Price Rule Name :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</label>
			<div class="col-lg-3">
				<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars["feature_price_name"] = new Smarty_variable("feature_price_name_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
					<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['feature_price_name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['feature_price_name']->value;?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->feature_price_name[$_smarty_tpl->tpl_vars['language']->value['id_lang']])&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->feature_price_name[$_smarty_tpl->tpl_vars['language']->value['id_lang']]) {?><?php echo $_smarty_tpl->tpl_vars['objFeaturePrice']->value->feature_price_name[$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php } elseif (isset($_POST[$_smarty_tpl->tpl_vars['feature_price_name']->value])) {?><?php echo $_POST[$_smarty_tpl->tpl_vars['feature_price_name']->value];?>
<?php }?>" data-lang-name="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Enter Feature Price Rule Name','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
" class="form-control feature_price_name_all" <?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?>/>
				<?php } ?>
			</div>
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
				<div class="col-lg-2">
					<button type="button" id="feature_price_rule_lang_btn" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['iso_code'];?>

						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
							<li>
								<a href="javascript:void(0)" onclick="showFeaturePriceRuleLangField('<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
', <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			<?php }?>
		</div>

		<div class="form-group">
            <label for="date_selection_type" class="control-label col-lg-3">
              <?php echo smartyTranslate(array('s'=>'Date Selection type :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

            </label>
            <div class="col-lg-3">
				<select class="form-control" name="date_selection_type" id="date_selection_type">
					<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type==1) {?>selected = "selected"<?php }?>>
					  <?php echo smartyTranslate(array('s'=>'Date Range','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</option>
					<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type==2) {?>selected = "selected"<?php }?>>
					  <?php echo smartyTranslate(array('s'=>'Specific Date','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</option>
				</select>
			</div>
		</div>

		<div class="form-group specific_date_type" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&$_smarty_tpl->tpl_vars['edit']->value) {?><?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type!=2) {?>style="display:none;"<?php }?><?php } else { ?>style="display:none;"<?php }?>>
			<label class="col-sm-3 control-label required" for="specific_date" >
				<?php echo smartyTranslate(array('s'=>'Specific Date','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</label>
			<div class="col-sm-3">
				<input type="text" id="specific_date" name="specific_date" class="form-control datepicker-input" value="<?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_from)) {?><?php echo $_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_from;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['date_from']->value;?>
<?php }?>" readonly/>
			</div>
		</div>

		<div class="form-group date_range_type" <?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type==2) {?>style="display:none;"<?php }?>>
			<label class="col-sm-3 control-label required" for="date_form" >
				<?php echo smartyTranslate(array('s'=>'Date From','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</label>
			<div class="col-sm-3">
				<input type="text" id="feature_plan_date_from" name="date_from" class="form-control datepicker-input" value="<?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_from)) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_from,'%d-%m-%Y');?>
<?php } else { ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_from']->value,'%d-%m-%Y');?>
<?php }?>" readonly/>
			</div>
		</div>
		<div class="form-group date_range_type" <?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type==2) {?>style="display:none;"<?php }?>>
			<label class="col-sm-3 control-label required" for="date_to" >
				<?php echo smartyTranslate(array('s'=>'Date To','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</label>
			<div class="col-sm-3">
				<input type="text" id="feature_plan_date_to" name="date_to" class="form-control datepicker-input" value="<?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_to)) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_to,'%d-%m-%Y');?>
<?php } else { ?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_to']->value,'%d-%m-%Y');?>
<?php }?>" readonly/>
			</div>
		</div>
		<div class="form-group special_days_content" <?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->date_selection_type==2) {?>style="display:none;"<?php }?>>
			<label class="control-label col-lg-3">
				<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'If you want to create this Feature price rule only for some special days of the week of selected date range then you can select select days after checking this option. Otherwise rule will be created for whole selected date range.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'For Special Days','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</span>
			</label>
			<div class="col-sm-2">
				<p class="checkbox">
					<label>
						<input class="is_special_days_exists pull-left" type="checkbox" name="is_special_days_exists"
						<?php if ((isset($_POST['is_special_days_exists'])&&$_POST['is_special_days_exists'])||(isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->is_special_days_exists)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->is_special_days_exists)) {?>
							checked="checked"
						<?php }?>/>
						<?php echo smartyTranslate(array('s'=>'Check to select special days','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</label>
				</p>
			</div>
			<div class="col-sm-7 week_days"
			<?php if ((isset($_POST['is_special_days_exists'])&&$_POST['is_special_days_exists'])||(isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->is_special_days_exists)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->is_special_days_exists)) {?>
				style="display:block;"
			<?php }?>>
				<div class="col-sm-1">
					<input type="checkbox" name="special_days[]" value="mon"
					<?php if ((isset($_POST['special_days'])&&in_array('mon',$_POST['special_days']))||(isset($_smarty_tpl->tpl_vars['special_days']->value)&&$_smarty_tpl->tpl_vars['special_days']->value&&in_array('mon',$_smarty_tpl->tpl_vars['special_days']->value))) {?>
						checked="checked"
					<?php }?>/>
					<p><?php echo smartyTranslate(array('s'=>'mon','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
				</div>
				<div class="col-sm-1">
					<input type="checkbox" name="special_days[]" value="tue"
					<?php if ((isset($_POST['special_days'])&&in_array('tue',$_POST['special_days']))||(isset($_smarty_tpl->tpl_vars['special_days']->value)&&$_smarty_tpl->tpl_vars['special_days']->value&&in_array('tue',$_smarty_tpl->tpl_vars['special_days']->value))) {?>
						checked="checked"
					<?php }?>/>
					<p><?php echo smartyTranslate(array('s'=>'tue','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
				</div>
				<div class="col-sm-1">
					<input type="checkbox" name="special_days[]" value="wed"
					<?php if ((isset($_POST['special_days'])&&in_array('wed',$_POST['special_days']))||(isset($_smarty_tpl->tpl_vars['special_days']->value)&&$_smarty_tpl->tpl_vars['special_days']->value&&in_array('wed',$_smarty_tpl->tpl_vars['special_days']->value))) {?>
						checked="checked"
					<?php }?>/>
					<p><?php echo smartyTranslate(array('s'=>'wed','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
				</div>
				<div class="col-sm-1">
					<input type="checkbox" name="special_days[]" value="thu"
					<?php if ((isset($_POST['special_days'])&&in_array('thu',$_POST['special_days']))||(isset($_smarty_tpl->tpl_vars['special_days']->value)&&$_smarty_tpl->tpl_vars['special_days']->value&&in_array('thu',$_smarty_tpl->tpl_vars['special_days']->value))) {?>
						checked="checked"
					<?php }?>/>
					<p><?php echo smartyTranslate(array('s'=>'thu','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
				</div>
				<div class="col-sm-1">
					<input type="checkbox" name="special_days[]" value="fri"
					<?php if ((isset($_POST['special_days'])&&in_array('fri',$_POST['special_days']))||(isset($_smarty_tpl->tpl_vars['special_days']->value)&&$_smarty_tpl->tpl_vars['special_days']->value&&in_array('fri',$_smarty_tpl->tpl_vars['special_days']->value))) {?>
						checked="checked"
					<?php }?>/>
					<p><?php echo smartyTranslate(array('s'=>'fri','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
				</div>
				<div class="col-sm-1">
					<input type="checkbox" name="special_days[]" value="sat"
					<?php if ((isset($_POST['special_days'])&&in_array('sat',$_POST['special_days']))||(isset($_smarty_tpl->tpl_vars['special_days']->value)&&$_smarty_tpl->tpl_vars['special_days']->value&&in_array('sat',$_smarty_tpl->tpl_vars['special_days']->value))) {?>
						checked="checked"
					<?php }?>/>
					<p><?php echo smartyTranslate(array('s'=>'sat','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
				</div>
				<div class="col-sm-1">
					<input type="checkbox" name="special_days[]" value="sun"
					<?php if ((isset($_POST['special_days'])&&in_array('sun',$_POST['special_days']))||(isset($_smarty_tpl->tpl_vars['special_days']->value)&&$_smarty_tpl->tpl_vars['special_days']->value&&in_array('sun',$_smarty_tpl->tpl_vars['special_days']->value))) {?>
						checked="checked"
					<?php }?>/>
					<p><?php echo smartyTranslate(array('s'=>'sun','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
				</div>
			</div>
		</div>

		<div class="form-group">
            <label for="Price Impact Way" class="control-label col-lg-3">
              <?php echo smartyTranslate(array('s'=>'Impact Way :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

            </label>
            <div class="col-lg-3">
				<select class="form-control" name="price_impact_way" id="price_impact_way">
					<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_way)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_way==1) {?>selected = "selected"<?php }?>>
					  <?php echo smartyTranslate(array('s'=>'Decrease Price','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</option>
					<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_way)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_way==2) {?>selected = "selected"<?php }?>>
					  <?php echo smartyTranslate(array('s'=>'Increase Price','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</option>
				</select>
			</div>
		</div>

		<div class="form-group">
            <label for="Price Impact Type" class="control-label col-lg-3">
              <?php echo smartyTranslate(array('s'=>'Impact Type :','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

            </label>
            <div class="col-lg-3">
				<select class="form-control" name="price_impact_type" id="price_impact_type">
					<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_type)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_type==1) {?>selected = "selected"<?php }?>>
					  <?php echo smartyTranslate(array('s'=>'Percentage','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</option>
					<option value="2" <?php if (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_type)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_type==2) {?>selected = "selected"<?php }?>>
					  <?php echo smartyTranslate(array('s'=>'Fixed Price','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label required" for="feature_price_name" >
				<?php echo smartyTranslate(array('s'=>'Impact Value','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
(<?php echo smartyTranslate(array('s'=>'tax excl.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
)
			</label>
			<div class="col-lg-3">
				<div class="input-group">
					<span class="input-group-addon payment_type_icon"><?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_type==2) {?><?php echo $_smarty_tpl->tpl_vars['defaultcurrency_sign']->value;?>
<?php } else { ?>%<?php }?><?php } else { ?>%<?php }?></span>
					<input type="text" id="impact_value" name="impact_value"
					value="<?php if (isset($_POST['impact_value'])&&$_POST['impact_value']) {?><?php echo $_POST['impact_value'];?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_value)) {?><?php echo $_smarty_tpl->tpl_vars['objFeaturePrice']->value->impact_value;?>
<?php }?>"/>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-lg-3">
				<span>
					<?php echo smartyTranslate(array('s'=>'Enable Feature Price Rule','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</span>
			</label>
			<div class="col-lg-9 ">
				<span class="switch prestashop-switch fixed-width-lg">
					<input type="radio" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->active==1) {?> checked="checked" <?php } else { ?>checked="checked"<?php }?> value="1" id="enable_feature_price_on" name="enable_feature_price">
					<label for="enable_feature_price_on"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
					<input <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&$_smarty_tpl->tpl_vars['objFeaturePrice']->value->active==0) {?> checked="checked" <?php }?> type="radio" value="0" id="enable_feature_price_off" name="enable_feature_price">
					<label for="enable_feature_price_off"><?php echo smartyTranslate(array('s'=>'No','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		</div>

		
		<div class="form-group">
			<label class="control-label col-lg-3">
				<span class="label-tooltip" data-toggle="tooltip" data-html="true" data-original-title="<?php echo smartyTranslate(array('s'=>'Select all the groups that you would like to apply to this feature price.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Group access','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
			</label>
			<div class="col-lg-6">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th class="text-center"></th>
								<th class="text-center"><?php echo smartyTranslate(array('s'=>'Group','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</th>
							</tr>
						</thead>
						<tbody>
							<?php if (isset($_smarty_tpl->tpl_vars['groups']->value)&&$_smarty_tpl->tpl_vars['groups']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
									<tr>
										<td class="text-center">
											<input type="checkbox" name="groupBox[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['id_group'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['feature_price_groups']->value)&&$_smarty_tpl->tpl_vars['feature_price_groups']->value&&in_array($_smarty_tpl->tpl_vars['group']->value['id_group'],$_smarty_tpl->tpl_vars['feature_price_groups']->value)) {?>checked<?php }?>/>
										</td>
										<td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
									</tr>
								<?php } ?>
							<?php } else { ?>
								<tr>
									<td class="list-empty" colspan="2">
										<div class="list-empty-msg">
											<i class="icon-warning-sign list-empty-icon"></i>
											<?php echo smartyTranslate(array('s'=>'No Groups Available','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

										</div>
									</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelFeaturePricesSettings'), ENT_QUOTES, 'UTF-8', true);?>
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

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('autocomplete_room_search_url'=>$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelFeaturePricesSettings')),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('defaultcurrency_sign'=>$_smarty_tpl->tpl_vars['defaultcurrency_sign']->value,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('booking_date_from'=>$_smarty_tpl->tpl_vars['date_from']->value,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php }} ?>

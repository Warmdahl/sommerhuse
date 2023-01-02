<?php /* Smarty version Smarty-3.1.19, created on 2022-10-20 07:01:32
         compiled from "/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/hook/roomTypeDemands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7035289996350d62c1cec30-71154752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26132bbb3dfd3f6f8d8fca069d14bc9422a5df37' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/hook/roomTypeDemands.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7035289996350d62c1cec30-71154752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'idProduct' => 0,
    'current' => 0,
    'submit_action' => 0,
    'token' => 0,
    'link' => 0,
    'allDemands' => 0,
    'key' => 0,
    'demand' => 0,
    'roomDemandPrices' => 0,
    'defaultcurrencySign' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6350d62c26f723_12086659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6350d62c26f723_12086659')) {function content_6350d62c26f723_12086659($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['idProduct']->value)&&$_smarty_tpl->tpl_vars['idProduct']->value) {?>
	<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['submit_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>&token=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="defaultForm form-horizontal" enctype="multipart/form-data">
		<div class="panel">
			<div class="panel-heading">
				<i class="icon-user"></i> <?php echo smartyTranslate(array('s'=>'Room Type Additional Facilities','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			</div>
			<div class="alert alert-info">
				<?php echo smartyTranslate(array('s'=>'To create new please visit','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRoomTypeGlobalDemand');?>
"><?php echo smartyTranslate(array('s'=>'Additional facilities','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'page','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
.
			</div>
			<?php if (isset($_smarty_tpl->tpl_vars['allDemands']->value)&&$_smarty_tpl->tpl_vars['allDemands']->value) {?>
				<div id="service_accordian">
					<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allDemands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['demand']->key;
?>
						<div class="accordion">
							<div class="accordion-section">
								<a class="accordion-section-title" href="#accordion_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
">
									<input class="selected_demand" type="checkbox" name="selected_demand[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['id_global_demand'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['roomDemandPrices']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']])) {?>checked<?php }?> /> &nbsp;&nbsp;<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<span class="pull-right"> <i class="icon-angle-left"></i>
								</a>
								<div id="accordion_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="accordion-section-content">
									<div class="form-group">
										<label class="col-sm-3 control-label required" >
											<?php echo smartyTranslate(array('s'=>'Price','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
(<?php echo smartyTranslate(array('s'=>'tax excl.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
)
										</label>
										<div class="col-sm-3">
											<div class="input-group">
												<span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['defaultcurrencySign']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
												<input type="text" name="demand_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['id_global_demand'], ENT_QUOTES, 'UTF-8', true);?>
"
												value="<?php if (isset($_smarty_tpl->tpl_vars['roomDemandPrices']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['price'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomDemandPrices']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['price'], ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['demand']->value['price'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
											</div>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])&&$_smarty_tpl->tpl_vars['demand']->value['adv_option']) {?>
										<div class="adv_options_dtl form-group">
											<label class="col-sm-3 control-label">
												<?php echo smartyTranslate(array('s'=>'Advance options','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

											</label>
											<div class="col-sm-9">
												<div class="table-responsive-row clearfix">
													<table class="table table-bordered adv_option_table">
														<tr>
															<th>
																<span><?php echo smartyTranslate(array('s'=>'Option Name','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
															</th>
															<th>
																<span><?php echo smartyTranslate(array('s'=>'Price','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span>
															</th>
														</tr>
														<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['demand']->value['adv_option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
															<tr>
																<td>
																	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

																</td>
																<td>
																	<div class="input-group">
																		<span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['defaultcurrencySign']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
																		<input type="text" name="option_price_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['roomDemandPrices']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['adv_option'][$_smarty_tpl->tpl_vars['info']->value['id']]['price'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomDemandPrices']->value[$_smarty_tpl->tpl_vars['demand']->value['id_global_demand']]['adv_option'][$_smarty_tpl->tpl_vars['info']->value['id']]['price'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"/>
																	</div>
																</td>
															</tr>
														<?php } ?>
													</table>
												</div>
											</div>
										</div>
									<?php }?>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="panel-footer">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['page'])&&$_REQUEST['page']>1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);?>
<?php }?>" class="btn btn-default">
						<i class="process-icon-cancel"></i>
						<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</a>
					<button type="submit" name="submitAddproduct" class="btn btn-default pull-right checkConfigurationClick" disabled="disabled">
						<i class="process-icon-loading"></i>
						<?php echo smartyTranslate(array('s'=>'Save','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</button>
					<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right checkConfigurationClick"  disabled="disabled">
						<i class="process-icon-loading"></i>
							<?php echo smartyTranslate(array('s'=>'Save and stay','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

					</button>
				</div>
			<?php } else { ?>
				<div class="alert alert-warning">
					<?php echo smartyTranslate(array('s'=>'No additional facilities created yet. To create please visit','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminRoomTypeGlobalDemand');?>
"><?php echo smartyTranslate(array('s'=>'Additional facilities','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'page','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
.
				</div>
			<?php }?>
		</div>
	</form>
<?php } else { ?>
	<div class="product-tab-content">
		<div class="alert alert-warning">
			<button data-dismiss="alert" class="close" type="button">×</button>
			<?php echo smartyTranslate(array('s'=>'There is 1 warning.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

			<ul id="seeMore" style="display:block;">
				<li><?php echo smartyTranslate(array('s'=>'You must save this product before selecting room type addttional facilities.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</li>
			</ul>
		</div>
    </div>
<?php }?><?php }} ?>

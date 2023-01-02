<?php /* Smarty version Smarty-3.1.19, created on 2022-10-17 14:51:42
         compiled from "/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/hotel_features/helpers/view/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1270029912634d4fde2b4974-50735119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532de3977f9f9ba6536319f3399931b481cc1fa6' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/hotel_features/helpers/view/view.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1270029912634d4fde2b4974-50735119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current' => 0,
    'submit_action' => 0,
    'token' => 0,
    'features_list' => 0,
    'value' => 0,
    'link' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634d4fde2ca9c0_30137497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634d4fde2ca9c0_30137497')) {function content_634d4fde2ca9c0_30137497($_smarty_tpl) {?>

<div class="panel">
	<div class="panel-heading">
		<?php echo smartyTranslate(array('s'=>'Hotel Features','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

	</div>
	<div class="row">
		<form method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['submit_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>&token=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="defaultForm form-horizontal features_list_form" enctype="multipart/form-data">
			<?php if ($_smarty_tpl->tpl_vars['features_list']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
					<div class="col-sm-12 feature_div" id="grand_feature_div_<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
						<div class="row row-margin-bottom row-margin-top">
							<div class="col-sm-12">
								<div class="row feature-border-div">
									<div class="col-sm-12 feature-header-div">
										<span><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp1,'mod'=>'hotelreservationsyatem'),$_smarty_tpl);?>
</span>
										<a class="btn btn-primary pull-right edit_feature col-sm-1" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelFeatures');?>
&amp;updatehtl_features&amp;id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><span><i class="icon-pencil"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</span></a>
										<button class="btn btn-primary pull-right dlt-feature col-sm-1" data-feature-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><i class="icon-trash"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row child-features-container">
							<div class="col-sm-12">
								<?php if (isset($_smarty_tpl->tpl_vars['value']->value['children'])&&$_smarty_tpl->tpl_vars['value']->value['children']) {?>
									<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
										<p><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<?php $_tmp2=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp2,'mod'=>'hotelreservationsyatem'),$_smarty_tpl);?>
</p>
									<?php } ?>
								<?php }?>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } else { ?>
				<div class="alert alert-warning">
					<?php echo smartyTranslate(array('s'=>'No hotel features found. Start adding new features for the hotels.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

				</div>
			<?php }?>
		</form>
	</div>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('delete_url'=>$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminHotelFeatures'),'js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'success_delete_msg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'success_delete_msg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Successfully Deleted.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'success_delete_msg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'error_delete_msg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'error_delete_msg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Some error occured while deleting feature.Please try again.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'error_delete_msg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'no_feature_warning_txt')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'no_feature_warning_txt'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No hotel features found. Start adding new features for the hotels.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'no_feature_warning_txt'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'confirm_delete_msg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'confirm_delete_msg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Are you sure?','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'confirm_delete_msg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>

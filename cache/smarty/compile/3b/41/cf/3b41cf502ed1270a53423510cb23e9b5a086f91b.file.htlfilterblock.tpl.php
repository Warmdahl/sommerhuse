<?php /* Smarty version Smarty-3.1.19, created on 2022-10-17 23:56:45
         compiled from "/home/qloapps/www/hotelcommerce/modules/wkhotelfilterblock/views/templates/hook/htlfilterblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:850864050634dcf9db37e52-88177341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b41cf502ed1270a53423510cb23e9b5a086f91b' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/wkhotelfilterblock/views/templates/hook/htlfilterblock.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '850864050634dcf9db37e52-88177341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_comment_installed' => 0,
    'config' => 0,
    'ratting_img' => 0,
    'all_feat' => 0,
    'feat' => 0,
    'currency' => 0,
    'min_price' => 0,
    'max_price' => 0,
    'num_days' => 0,
    'date_from' => 0,
    'date_to' => 0,
    'cat_link' => 0,
    'warning_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634dcf9db4a8e8_77667778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dcf9db4a8e8_77667778')) {function content_634dcf9db4a8e8_77667778($_smarty_tpl) {?>

<div id="filter_results" class="row block">
	<div class="col-sm-12">
		<?php if ($_smarty_tpl->tpl_vars['product_comment_installed']->value&&isset($_smarty_tpl->tpl_vars['config']->value)&&$_smarty_tpl->tpl_vars['config']->value['SHOW_RATTING_FILTER']) {?>
			<div class="row margin-lr-0 layered_filter_cont">
				<div class="col-sm-12 layered_filter_heading">
					<div class="row margin-lr-0">
						<div class="pull-left lf_headingmain_wrapper">
							<span><?php echo smartyTranslate(array('s'=>'Guest Rating','mod'=>'wkhotelfilterblock'),$_smarty_tpl);?>
</span>
							<hr class="theme-text-underline">
						</div>
						<span class="pull-right clear_filter"><?php echo smartyTranslate(array('s'=>'Clear Filter','mod'=>'wkhotelfilterblock'),$_smarty_tpl);?>
</span>
					</div>
				</div>
				<div class="col-sm-12 lf_sub_cont">
					<div class="layered_filt">
						<input type="checkbox" class="filter" data-type="ratting" value="5">
						<label style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);" class="ratting_img_style ratting_5">
						</label>
					</div>
					<div class="layered_filt">
						<input type="checkbox" class="filter" data-type="ratting" value="4">
						<label style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);" class="ratting_img_style ratting_4">
						</label>
					</div>
					<div class="layered_filt">
						<input type="checkbox" class="filter" data-type="ratting" value="3">
						<label style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);" class="ratting_img_style ratting_3">
						</label>
					</div>
					<div class="layered_filt">
						<input type="checkbox" class="filter" data-type="ratting" value="2">
						<label style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);" class="ratting_img_style ratting_2">
						</label>
					</div>
					<div class="layered_filt">
						<input type="checkbox" class="filter" data-type="ratting" value="1">
						<label style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);" class="ratting_img_style ratting_1">
						</label>
					</div>
					<div class="layered_filt">
						<input type="checkbox" class="filter" data-type="ratting" value="0">
						<label style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['ratting_img']->value;?>
);" class="ratting_img_style ratting_0">
						</label>
					</div>
				</div>
			</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['config']->value)&&$_smarty_tpl->tpl_vars['config']->value['SHOW_AMENITIES_FILTER']) {?>
			<div class="row margin-lr-0 layered_filter_cont">
				<div class="col-sm-12 layered_filter_heading">
					<div class="row margin-lr-0">
						<div class="pull-left lf_headingmain_wrapper">
							<span><?php echo smartyTranslate(array('s'=>'Amenities','mod'=>'wkhotelfilterblock'),$_smarty_tpl);?>
</span>
							<hr class="theme-text-underline">
						</div>
						<span class="pull-right clear_filter"><?php echo smartyTranslate(array('s'=>'Clear Filter','mod'=>'wkhotelfilterblock'),$_smarty_tpl);?>
</span>
					</div>
				</div>
				<div class="col-sm-12 lf_sub_cont">
					<?php  $_smarty_tpl->tpl_vars['feat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_feat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feat']->key => $_smarty_tpl->tpl_vars['feat']->value) {
$_smarty_tpl->tpl_vars['feat']->_loop = true;
?>
						<div class="layered_filt">
							<input type="checkbox" class="filter" data-type="amenities" value="<?php echo $_smarty_tpl->tpl_vars['feat']->value['id_feature'];?>
">
							<span class="filters_name"><?php echo $_smarty_tpl->tpl_vars['feat']->value['name'];?>
</span>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['config']->value)&&$_smarty_tpl->tpl_vars['config']->value['SHOW_PRICE_FILTER']) {?>
			<div class="row margin-lr-0 layered_filter_cont">
				<div class="col-sm-12 layered_filter_heading">
					<div class="row margin-lr-0">
						<div class="pull-left lf_headingmain_wrapper">
							<span><?php echo smartyTranslate(array('s'=>'Price','mod'=>'wkhotelfilterblock'),$_smarty_tpl);?>
</span>
							<hr class="theme-text-underline">
						</div>
						<span class="pull-right clear_filter"><?php echo smartyTranslate(array('s'=>'Clear Filter','mod'=>'wkhotelfilterblock'),$_smarty_tpl);?>
</span>
					</div>
				</div>
				<div class="col-sm-12 lf_sub_cont">
					<div class="row margin-lr-0 price_filter_subcont">
						<span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>
 <span id="filter_price_from"><?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
						<span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['currency']->value->prefix;?>
 <span id="filter_price_to"><?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['currency']->value->suffix;?>
</span>
					</div>
					<div id="filter_price_silder"></div>
				</div>
			</div>
		<?php }?>
	</div>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('num_days'=>$_smarty_tpl->tpl_vars['num_days']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('date_from'=>$_smarty_tpl->tpl_vars['date_from']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('date_to'=>$_smarty_tpl->tpl_vars['date_to']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('cat_link'=>$_smarty_tpl->tpl_vars['cat_link']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('min_price'=>$_smarty_tpl->tpl_vars['min_price']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('max_price'=>$_smarty_tpl->tpl_vars['max_price']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('warning_num'=>$_smarty_tpl->tpl_vars['warning_num']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'viewMoreTxt')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'viewMoreTxt'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'View More','js'=>1,'mod'=>'wkhotelfilterblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'viewMoreTxt'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'bookNowTxt')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'bookNowTxt'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Book Now','js'=>1,'mod'=>'wkhotelfilterblock'),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'bookNowTxt'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>

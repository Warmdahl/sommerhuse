<?php /* Smarty version Smarty-3.1.19, created on 2022-10-17 23:56:45
         compiled from "/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1914538508634dcf9dc0b014-50798908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8503301b82d5d5f0653007d9bf8f4a2f55fd3a23' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/category.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1914538508634dcf9dc0b014-50798908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'max_order_date' => 0,
    'link' => 0,
    'feat_img_dir' => 0,
    'ratting_img' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634dcf9dc136c8_30914058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dcf9dc136c8_30914058')) {function content_634dcf9dc136c8_30914058($_smarty_tpl) {?>

<div class="row cat_cont">
    <div class="col-sm-12">
        <div class="row margin-lr-0 catSortBlock">
            <div class="col-sm-2 sortBlockHeading">
                <p><?php echo smartyTranslate(array('s'=>'Sort By:'),$_smarty_tpl);?>
</p>
            </div>
            <div class="col-sm-3">
                <div class="filter_dw_cont">
                    <button class="btn btn-default dropdown-toggle" type="button" id="gst_rating" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="pull-left sort_btn_span" data-sort-by="0" data-sort-value="0" data-sort-for="<?php echo smartyTranslate(array('s'=>'Rating'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Rating'),$_smarty_tpl);?>
</span>
                        <span class="caret pull-right margin-top-7"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="gst_rating">
                        <li><a href="#" class="sort_result" data-sort-by="1" data-value="1"><?php echo smartyTranslate(array('s'=>'Rating Ascending'),$_smarty_tpl);?>
</a></li>
                        <li><a href="#" class="sort_result" data-sort-by="1" data-value="2"><?php echo smartyTranslate(array('s'=>'Rating Descending'),$_smarty_tpl);?>
</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="filter_dw_cont">
                    <button class="btn btn-default dropdown-toggle" type="button" id="price_ftr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="pull-left sort_btn_span" data-sort-by="0" data-sort-value="0" data-sort-for="<?php echo smartyTranslate(array('s'=>'Price'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Price'),$_smarty_tpl);?>
</span>
                        <span class="caret pull-right margin-top-7"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="price_ftr">
                        <li><a href="#" class="sort_result" data-sort-by="2" data-value="1"><?php echo smartyTranslate(array('s'=>'Price : Lowest First'),$_smarty_tpl);?>
</a></li>
                        <li><a href="#" class="sort_result" data-sort-by="2" data-value="2"><?php echo smartyTranslate(array('s'=>'Price : Highest first '),$_smarty_tpl);?>
</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <input type="hidden" id="max_order_date" name="max_order_date" value="<?php echo $_smarty_tpl->tpl_vars['max_order_date']->value;?>
">
        <div class="row margin-lr-0" id="category_data_cont">
            <?php echo $_smarty_tpl->getSubTemplate ("./_partials/room_type_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>

    </div>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('product_controller_url'=>$_smarty_tpl->tpl_vars['link']->value->getPageLink('product')),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('feat_img_dir'=>$_smarty_tpl->tpl_vars['feat_img_dir']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('ratting_img'=>$_smarty_tpl->tpl_vars['ratting_img']->value),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_prefix'=>$_smarty_tpl->tpl_vars['currency']->value->prefix),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('currency_suffix'=>$_smarty_tpl->tpl_vars['currency']->value->suffix),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('max_order_date'=>$_smarty_tpl->tpl_vars['max_order_date']->value),$_smarty_tpl);?>
<?php }} ?>

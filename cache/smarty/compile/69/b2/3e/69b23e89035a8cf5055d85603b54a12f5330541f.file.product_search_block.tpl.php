<?php /* Smarty version Smarty-3.1.19, created on 2022-10-17 15:30:01
         compiled from "/home/qloapps/www/hotelcommerce/modules/wkhotelroom/views/templates/admin/hotel_room/product_search_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299487562634d58d9e4d965-56848248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b23e89035a8cf5055d85603b54a12f5330541f' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/wkhotelroom/views/templates/admin/hotel_room/product_search_block.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299487562634d58d9e4d965-56848248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productName' => 0,
    'idProduct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634d58d9e50205_11855916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634d58d9e50205_11855916')) {function content_634d58d9e50205_11855916($_smarty_tpl) {?>

<div class="input-group col-lg-5">
    <input type="text" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['productName']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="productName" id="productName" class="form-control" autocomplete="off">
    <input type="hidden" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['idProduct']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="id_product" id="id_product" class="form-control">
    <span class="input-group-addon"><i class="icon-search"></i></span>
    <ul class="list-unstyled prod_suggest_ul"></ul>
</div><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2022-10-22 09:03:26
         compiled from "/home/qloapps/www/hotelcommerce/mails/da/hotel-booking-cart-data-text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:487567337635395be16a1c8-39961497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f046c35abb68ed92d91b72bdeb693ece7a0732a9' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/mails/da/hotel-booking-cart-data-text.tpl',
      1 => 1665775612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '487567337635395be16a1c8-39961497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'data_v' => 0,
    'rm_v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635395be178936_80648439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635395be178936_80648439')) {function content_635395be178936_80648439($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/qloapps/www/hotelcommerce/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['list']->value)) {?>
<?php  $_smarty_tpl->tpl_vars['data_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_v']->_loop = false;
 $_smarty_tpl->tpl_vars['data_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_v']->key => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->_loop = true;
 $_smarty_tpl->tpl_vars['data_k']->value = $_smarty_tpl->tpl_vars['data_v']->key;
?>
<?php  $_smarty_tpl->tpl_vars['rm_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rm_v']->_loop = false;
 $_smarty_tpl->tpl_vars['rm_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data_v']->value['date_diff']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rm_v']->key => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->_loop = true;
 $_smarty_tpl->tpl_vars['rm_k']->value = $_smarty_tpl->tpl_vars['rm_v']->key;
?>
<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive" />

<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>


<?php echo $_smarty_tpl->tpl_vars['data_v']->value['hotel_name'];?>


<?php echo $_smarty_tpl->tpl_vars['data_v']->value['adult'];?>
 <?php echo smartyTranslate(array('s'=>'Adults'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['data_v']->value['children'];?>
 <?php echo smartyTranslate(array('s'=>'Children'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['unit_price']),$_smarty_tpl);?>


<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];?>


<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d-%b-%G");?>


<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d-%b-%G");?>


<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['amount'];?>



<?php } ?>
<?php } ?>
<?php }?>

<?php }} ?>

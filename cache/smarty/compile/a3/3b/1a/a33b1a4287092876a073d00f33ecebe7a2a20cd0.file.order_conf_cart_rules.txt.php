<?php /* Smarty version Smarty-3.1.19, created on 2022-10-18 22:00:58
         compiled from "/home/qloapps/www/hotelcommerce/mails/da/order_conf_cart_rules.txt" */ ?>
<?php /*%%SmartyHeaderCode:950596299634f05fa2707c3-23306178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a33b1a4287092876a073d00f33ecebe7a2a20cd0' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/mails/da/order_conf_cart_rules.txt',
      1 => 1665775612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '950596299634f05fa2707c3-23306178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'cart_rule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634f05fa2776c6_81066519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634f05fa2776c6_81066519')) {function content_634f05fa2776c6_81066519($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['cart_rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart_rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart_rule']->key => $_smarty_tpl->tpl_vars['cart_rule']->value) {
$_smarty_tpl->tpl_vars['cart_rule']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['cart_rule']->value['voucher_name'];?>
  <?php echo $_smarty_tpl->tpl_vars['cart_rule']->value['voucher_reduction'];?>

<?php } ?><?php }} ?>

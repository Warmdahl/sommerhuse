<?php /* Smarty version Smarty-3.1.19, created on 2022-10-18 21:48:01
         compiled from "/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1505466791634f02f17f6584-67202090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '665376bd697bfa8e2a86012dd7cbd19fc8ae9d56' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1505466791634f02f17f6584-67202090',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634f02f17fb958_19561084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634f02f17fb958_19561084')) {function content_634f02f17fb958_19561084($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>

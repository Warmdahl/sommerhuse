<?php /* Smarty version Smarty-3.1.19, created on 2022-10-22 09:22:06
         compiled from "/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/order-carrier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75419457563539a1e1777b9-60189505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddb8d76d88f1a656763c3ef118aedb622e0b2a3e' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/themes/hotel-reservation-theme/order-carrier.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75419457563539a1e1777b9-60189505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkedTOS' => 0,
    'link_conditions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63539a1e17e2b6_33969461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63539a1e17e2b6_33969461')) {function content_63539a1e17e2b6_33969461($_smarty_tpl) {?>

<div class="box" id="tc_cont">
    <p class="checkbox">
        <input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
        <label for="cgv" id="tc_txt"><?php echo smartyTranslate(array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl);?>
</label>
        <a id="tc_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow" ><?php echo smartyTranslate(array('s'=>'(Read the Terms of Service)'),$_smarty_tpl);?>
</a>
    </p>
</div><?php }} ?>

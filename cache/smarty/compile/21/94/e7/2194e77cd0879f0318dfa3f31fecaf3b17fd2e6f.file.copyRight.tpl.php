<?php /* Smarty version Smarty-3.1.19, created on 2023-01-02 19:04:35
         compiled from "/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6885426963b31cb36505c6-25809484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2194e77cd0879f0318dfa3f31fecaf3b17fd2e6f' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6885426963b31cb36505c6-25809484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_ESTABLISHMENT_YEAR' => 0,
    'base_dir' => 0,
    'WK_HTL_CHAIN_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63b31cb3652f94_23107593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63b31cb3652f94_23107593')) {function content_63b31cb3652f94_23107593($_smarty_tpl) {?><div class="copyRightWrapper">
	<p class="copyRight">
		&copy; <?php echo $_smarty_tpl->tpl_vars['WK_HTL_ESTABLISHMENT_YEAR']->value;?>
-<?php echo date('Y');?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value;?>
</a>.&nbsp;<?php echo smartyTranslate(array('s'=>' All rights reserved.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

	</p>
</div><?php }} ?>

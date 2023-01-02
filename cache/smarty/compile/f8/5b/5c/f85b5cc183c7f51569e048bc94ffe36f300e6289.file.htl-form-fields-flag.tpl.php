<?php /* Smarty version Smarty-3.1.19, created on 2022-10-20 07:00:21
         compiled from "/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/_partials/htl-form-fields-flag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17327726476350d5e5e644a5-56345446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85b5cc183c7f51569e048bc94ffe36f300e6289' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/hotelreservationsystem/views/templates/admin/_partials/htl-form-fields-flag.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17327726476350d5e5e644a5-56345446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'currentLang' => 0,
    'ps_img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6350d5e5e6d446_35524206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6350d5e5e6d446_35524206')) {function content_6350d5e5e6d446_35524206($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
	<img class="all_lang_icon" data-lang-id="<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ps_img_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
.jpg">
<?php }?><?php }} ?>

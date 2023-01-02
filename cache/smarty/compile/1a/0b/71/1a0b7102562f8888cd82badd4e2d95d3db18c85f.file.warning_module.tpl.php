<?php /* Smarty version Smarty-3.1.19, created on 2022-10-18 21:48:07
         compiled from "/home/qloapps/www/hotelcommerce/adminsommerhus/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:613681678634f02f75f92b9-62087333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a0b7102562f8888cd82badd4e2d95d3db18c85f' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/adminsommerhus/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '613681678634f02f75f92b9-62087333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634f02f75fba09_57961910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634f02f75fba09_57961910')) {function content_634f02f75fba09_57961910($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2022-10-18 22:43:57
         compiled from "/home/qloapps/www/hotelcommerce/modules/paypal//views/templates/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1875156664634f100d5b8756-82900193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23562316c2b72b45d5033ff4bd3ecbc4cc1a9533' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/paypal//views/templates/admin/header.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1875156664634f100d5b8756-82900193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_PPP' => 0,
    'PayPal_PVZ' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634f100d5c12c1_19119227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634f100d5c12c1_19119227')) {function content_634f100d5c12c1_19119227($_smarty_tpl) {?>

<script type="text/javascript">
	var PayPal_WPS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_WPS']->value);?>
';
	var PayPal_HSS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_HSS']->value);?>
';
	var PayPal_ECS = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_ECS']->value);?>
';
	var PayPal_PPP = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_PPP']->value);?>
';
	var PayPal_PVZ = '<?php echo intval($_smarty_tpl->tpl_vars['PayPal_PVZ']->value);?>
';
</script>

<script type="text/javascript" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['PayPal_module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/views/js/back_office.js"></script><?php }} ?>

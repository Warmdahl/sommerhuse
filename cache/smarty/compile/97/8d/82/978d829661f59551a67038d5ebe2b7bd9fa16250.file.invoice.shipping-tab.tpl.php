<?php /* Smarty version Smarty-3.1.19, created on 2022-10-22 09:06:25
         compiled from "/home/qloapps/www/hotelcommerce/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:600111412635396713b5671-14409374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '978d829661f59551a67038d5ebe2b7bd9fa16250' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/pdf/invoice.shipping-tab.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '600111412635396713b5671-14409374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635396713babe0_63741687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635396713babe0_63741687')) {function content_635396713babe0_63741687($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>

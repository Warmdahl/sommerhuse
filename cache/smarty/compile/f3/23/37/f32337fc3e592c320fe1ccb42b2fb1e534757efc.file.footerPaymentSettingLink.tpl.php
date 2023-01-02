<?php /* Smarty version Smarty-3.1.19, created on 2022-10-20 18:14:50
         compiled from "/home/qloapps/www/hotelcommerce/modules/wkfooterpaymentblock/views/templates/hook/footerPaymentSettingLink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3442882635173fa012f25-96377087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f32337fc3e592c320fe1ccb42b2fb1e534757efc' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/wkfooterpaymentblock/views/templates/hook/footerPaymentSettingLink.tpl',
      1 => 1617953773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3442882635173fa012f25-96377087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerPaymentBlockLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_635173fa0150a2_79790685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_635173fa0150a2_79790685')) {function content_635173fa0150a2_79790685($_smarty_tpl) {?>

<div class="btn-group setting-link-div col-sm-3 col-xs-12">
	<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['footerPaymentBlockLink']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
		<span class="col-sm-2 col-xs-2"><i class="icon-money"></i></span>
		<span class="setting-title col-sm-10 col-xs-10"><?php echo smartyTranslate(array('s'=>'Footer Payment Block','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
</span>
	</a>
	<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo smartyTranslate(array('s'=>'Footer Payment Block Setting','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
" data-content="<?php echo smartyTranslate(array('s'=>'Using this setting, you can configure payment block view in the footer of page in front end.','mod'=>'wkfooterpaymentblock'),$_smarty_tpl);?>
" data-placement="bottom">
		<i class="icon-question-circle"></i>
	</a>
</div><?php }} ?>

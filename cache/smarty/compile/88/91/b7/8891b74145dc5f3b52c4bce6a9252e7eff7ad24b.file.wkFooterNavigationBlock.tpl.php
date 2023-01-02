<?php /* Smarty version Smarty-3.1.19, created on 2023-01-02 19:04:35
         compiled from "/home/qloapps/www/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/wkFooterNavigationBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171567710463b31cb3576e47-85608967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8891b74145dc5f3b52c4bce6a9252e7eff7ad24b' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/wkFooterNavigationBlock.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171567710463b31cb3576e47-85608967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation_links' => 0,
    'navigationLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_63b31cb357b648_69924872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63b31cb357b648_69924872')) {function content_63b31cb357b648_69924872($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['navigation_links']->value)&&$_smarty_tpl->tpl_vars['navigation_links']->value) {?>
	<div class="col-sm-3">
		<div class="row">
			<section class="col-xs-12 col-sm-12">
				<div class="row margin-lr-0 footer-section-heading">
					<p><?php echo smartyTranslate(array('s'=>'Explore','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</p>
					<hr/>
				</div>
				<div class="row margin-lr-0">
					<ul class="footer-navigation-section">
					<?php  $_smarty_tpl->tpl_vars['navigationLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navigationLink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navigationLink']->key => $_smarty_tpl->tpl_vars['navigationLink']->value) {
$_smarty_tpl->tpl_vars['navigationLink']->_loop = true;
?>
						<li class="item">
							<a title="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
</a>
						</li>
					<?php } ?>
					</ul>
				</div>
			</section>
		</div>
	</div>
<?php }?>




<?php }} ?>

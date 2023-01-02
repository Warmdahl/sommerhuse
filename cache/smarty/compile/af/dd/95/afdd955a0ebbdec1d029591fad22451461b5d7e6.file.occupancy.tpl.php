<?php /* Smarty version Smarty-3.1.19, created on 2022-10-20 07:01:31
         compiled from "/home/qloapps/www/hotelcommerce/adminsommerhus/themes/default/template/controllers/products/occupancy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17431886606350d62bd4b4c6-19017845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afdd955a0ebbdec1d029591fad22451461b5d7e6' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/adminsommerhus/themes/default/template/controllers/products/occupancy.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17431886606350d62bd4b4c6-19017845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'roomTypeInfo' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6350d62bd61381_30896436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6350d62bd61381_30896436')) {function content_6350d62bd61381_30896436($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['product']->value->id)) {?>
    <input type="hidden" name="occupancy_loaded" value="1">
	<div id="product-occupancy" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Occupancy" />
		<h3 class="tab"> <i class="icon-users"></i> <?php echo smartyTranslate(array('s'=>'Occupancy'),$_smarty_tpl);?>
</h3>

        <div class="alert alert-info">
            <?php echo smartyTranslate(array('s'=>'Set the occupancy of this room type. Enter how much adults and children this room type can accomodate.'),$_smarty_tpl);?>

			<br /><br />
			<b><?php echo smartyTranslate(array('s'=>'Note'),$_smarty_tpl);?>
 : <?php echo smartyTranslate(array('s'=>'These occupancy settings will not affect "ROOM TYPE ADDITIONAL FACILITIES" any way. It will work separately.'),$_smarty_tpl);?>
</b>
        </div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="base_adults">
                <span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>''),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'Adults'),$_smarty_tpl);?>

                </span>
			</label>
			<div class="col-sm-3">
				<input id="base_adults" type="text" name="base_adults" class="form-control" <?php if (isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomTypeInfo']->value['adult'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="base_children">
                <span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>''),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'Children'),$_smarty_tpl);?>

                </span>
			</label>
			<div class="col-sm-3">
				<input id="base_children" type="text" name="base_children" class="form-control" <?php if (isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomTypeInfo']->value['children'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
			</div>
		</div>
        <input id="is_occupancy_submit" type="hidden" name="is_occupancy_submit" class="form-control" value="0">

		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['page'])&&$_REQUEST['page']>1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);?>
<?php }?>" class="btn btn-default">
				<i class="process-icon-cancel"></i>
				<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

			</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right checkOccupancySubmit" disabled="disabled">
				<i class="process-icon-loading"></i>
				<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>

			</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right checkOccupancySubmit"  disabled="disabled">
				<i class="process-icon-loading"></i>
					<?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>

			</button>
		</div>
	</div>
<?php }?>

<script>
    $(document).ready(function() {
        $(".checkOccupancySubmit").on("click", function() {
            $("#is_occupancy_submit").val(1);
            return true;
        });
    });
</script><?php }} ?>

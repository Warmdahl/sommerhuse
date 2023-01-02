<?php /* Smarty version Smarty-3.1.19, created on 2022-10-18 00:10:23
         compiled from "/home/qloapps/www/hotelcommerce/modules/blocknavigationmenu/views/templates/admin/custom_navigation_link_setting/helpers/form/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1041941267634dd2cf9f12b7-96706649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '185ef62beac48d133be48b01701fb27da39656ba' => 
    array (
      0 => '/home/qloapps/www/hotelcommerce/modules/blocknavigationmenu/views/templates/admin/custom_navigation_link_setting/helpers/form/form.tpl',
      1 => 1617953772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1041941267634dd2cf9f12b7-96706649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'table' => 0,
    'link' => 0,
    'navigationLinkInfo' => 0,
    'cmsPages' => 0,
    'cmsPage' => 0,
    'languages' => 0,
    'language' => 0,
    'navigation_link_name' => 0,
    'currentLang' => 0,
    'themePages' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_634dd2cfa3fd27_01160817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_634dd2cfa3fd27_01160817')) {function content_634dd2cfa3fd27_01160817($_smarty_tpl) {?>

<div class="panel">
	<div class="panel-heading">
		<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&$_smarty_tpl->tpl_vars['edit']->value) {?>
			<i class="icon-pencil"></i> <?php echo smartyTranslate(array('s'=>'Edit Navigation Link','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

		<?php } else { ?>
			<i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'Add Navigation Link','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

		<?php }?>
	</div>
	<div class="panel-content">
		<form id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomNavigationLinkSetting');?>
" class="form-horizontal" method="post">
			<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)&&$_smarty_tpl->tpl_vars['edit']->value) {?>
				<input type="hidden" id="id_navigation_link" name="id_navigation_link" value="<?php echo $_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id'];?>
">
			<?php }?>
			<div class="form-group">
				<label class="control-label col-lg-3">
					<span class="label-tooltip" data-toggle="tooltip"
					title="<?php echo smartyTranslate(array('s'=>'Enable, If you want to add a link from a cms page. Disable, if you want to add anavigation link or a page link.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Add link from cms pages','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

					</span>
				</label>
				<div class="col-lg-9">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="is_cms_block_link" id="is_cms_block_link_on" value="1" <?php if (isset($_POST['is_cms_block_link'])) {?><?php if ($_POST['is_cms_block_link']) {?>checked="checked"<?php }?><?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms'])&&$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms']) {?>checked="checked"<?php }?>/>

						<label for="is_cms_block_link_on"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>

						<input type="radio" name="is_cms_block_link" id="is_cms_block_link_off" value="0" <?php if (isset($_POST['is_cms_block_link'])) {?> <?php if (!$_POST['is_cms_block_link']) {?>checked="checked"<?php }?><?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms'])) {?><?php if (!$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms']) {?>checked="checked"<?php }?><?php } else { ?>checked="checked"<?php }?>/>

						<label for="is_cms_block_link_off"><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>
			
			<div id="cms_block_content" class="<?php if (isset($_POST['is_cms_block_link'])) {?><?php if (!$_POST['is_cms_block_link']) {?>hidden<?php }?><?php } elseif (!isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms'])||!$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms']) {?>hidden<?php }?>">
				
				<?php if (isset($_smarty_tpl->tpl_vars['cmsPages']->value)) {?>
					<div class="form-group">
						<label class="control-label col-lg-3">
							<span class="label-tooltip" data-toggle="tooltip"
							title="<?php echo smartyTranslate(array('s'=>'Select the CMS page you want to attach with this navigation link. CMS page link will be used as redirect url and meta title of the CMS page will be considered as the name of footer navigation link.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
">
								<?php echo smartyTranslate(array('s'=>'Select CMS Page','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

							</span>
						</label>
						<div class="col-lg-9">
							<table class="table table-bordered" style="width:40%;">
								<thead>
									<tr>
										<th class="fixed-width-xs">
										</th>
										<th class="fixed-width-xs"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</span></th>
										<th>
											<span class="title_box">
												<?php echo smartyTranslate(array('s'=>'CMS Page Name','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

											</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['cmsPage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmsPage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cmsPages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmsPage']->key => $_smarty_tpl->tpl_vars['cmsPage']->value) {
$_smarty_tpl->tpl_vars['cmsPage']->_loop = true;
?>
										<tr>
											<td><input type="radio" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cmsPage']->value['id_cms'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" name="id_cms" <?php if (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms'])&&$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms']==$_smarty_tpl->tpl_vars['cmsPage']->value['id_cms']) {?>checked="checked"<?php }?>>
											</td>
											<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cmsPage']->value['id_cms'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
											<td><label for="groupBox_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cmsPage']->value['id_cms'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['cmsPage']->value['meta_title'];?>
</label></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				<?php }?>
			</div>
			
			<div id="non_cms_block_content" class="<?php if (isset($_POST['is_cms_block_link'])) {?><?php if ($_POST['is_cms_block_link']) {?>hidden<?php }?><?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms'])&&$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['id_cms']) {?>hidden<?php }?>">
				<div class="form-group">
					<label class="col-sm-3 control-label required" for="navigation_link_name">
						<span class="label-tooltip" data-toggle="tooltip"
						title="<?php echo smartyTranslate(array('s'=>'Enter the name for the link. This name will appear for created link.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
">
							<?php echo smartyTranslate(array('s'=>'Name','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

						</span>
					</label>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-lg-10">
								<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
									<?php $_smarty_tpl->tpl_vars["navigation_link_name"] = new Smarty_variable("navigation_link_name_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']), null, 0);?>
									<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['navigation_link_name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['navigation_link_name']->value;?>
" value="<?php if (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['name'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])&&$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['name'][$_smarty_tpl->tpl_vars['language']->value['id_lang']]) {?><?php echo $_smarty_tpl->tpl_vars['navigationLinkInfo']->value['name'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
<?php } elseif (isset($_POST[$_smarty_tpl->tpl_vars['navigation_link_name']->value])) {?><?php echo $_POST[$_smarty_tpl->tpl_vars['navigation_link_name']->value];?>
<?php }?>" data-lang-name="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Enter exlore link name','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
" class="form-control navigation_link_name_all" <?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang']!=$_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?>/>
								<?php } ?>
							</div>
							<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
								<div class="col-lg-2">
									<button type="button" id="navigation_link_lang_btn" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['iso_code'];?>

										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
											<li>
												<a href="javascript:void(0)" onclick="showNavigationLinkLangField('<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
', <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
											</li>
										<?php } ?>
									</ul>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-3">
						<span class="label-tooltip" data-toggle="tooltip"
						title="<?php echo smartyTranslate(array('s'=>'Enable, If you want to add a manual navigation redirect Url for navigation link. Disable, if you want to select a front end page.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
">
							<?php echo smartyTranslate(array('s'=>'Set manual navigation redirect Url','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

						</span>
					</label>
					<div class="col-lg-9">
						<span class="switch prestashop-switch fixed-width-lg">
							<input type="radio" name="is_custom_redirect_link" id="is_custom_redirect_link_on" value="1" <?php if (isset($_POST['is_custom_redirect_link'])) {?><?php if ($_POST['is_custom_redirect_link']) {?>checked="checked"<?php }?><?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['is_custom_link'])&&$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['is_custom_link']) {?>checked="checked"<?php }?>/>

							<label for="is_custom_redirect_link_on"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>

							<input type="radio" name="is_custom_redirect_link" id="is_custom_redirect_link_off" value="0" <?php if (isset($_POST['is_custom_redirect_link'])) {?> <?php if (!$_POST['is_custom_redirect_link']) {?>checked="checked"<?php }?><?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['is_custom_link'])) {?><?php if (!$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['is_custom_link']) {?>checked="checked"<?php }?><?php } else { ?>checked="checked"<?php }?>/>

							<label for="is_custom_redirect_link_off"><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>
							<a class="slide-button btn"></a>
						</span>
					</div>
				</div>
				<div class="form-group custom_redirect_link_div <?php if (isset($_POST['is_custom_redirect_link'])) {?><?php if ($_POST['is_custom_redirect_link']) {?>hidden<?php }?><?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['is_custom_link'])&&!$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['is_custom_link']) {?>hidden<?php } elseif (!isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['is_custom_link'])) {?>hidden<?php }?>">
					<label class="control-label col-lg-3">
						<span class="label-tooltip" data-toggle="tooltip"
						title="<?php echo smartyTranslate(array('s'=>'enter the url to which you want to redirect your guests for this nevigation link.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
">
							<?php echo smartyTranslate(array('s'=>'Custom redirect url','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

						</span>
					</label>
					<div class="col-lg-5">
						<input type="text" name="link" <?php if (isset($_POST['link'])) {?>value="<?php echo $_POST['link'];?>
"<?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['link'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['navigationLinkInfo']->value['link'];?>
"<?php }?>>
					</div>
				</div>
				<div class="form-group custom_redirect_page_div <?php if (isset($_POST['is_custom_redirect_link'])) {?><?php if ($_POST['is_custom_redirect_link']) {?>hidden<?php }?><?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['is_custom_link'])&&$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['is_custom_link']) {?>hidden<?php }?>">
					<label class="control-label col-lg-3">
						<span class="label-tooltip" data-toggle="tooltip"
						title="<?php echo smartyTranslate(array('s'=>'Select front end page of the theme. Guests will be redirected to this url for this navigation link.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
">
							<?php echo smartyTranslate(array('s'=>'Theme Pages','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

						</span>
					</label>
					<div class="col-sm-2">
						<?php if (isset($_smarty_tpl->tpl_vars['themePages']->value)&&$_smarty_tpl->tpl_vars['themePages']->value) {?>
							<select class="form-control" name="redirect_page">
								<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themePages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <?php if ($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['link']==((string)$_smarty_tpl->tpl_vars['page']->value['page'])) {?>selected<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['page'];?>
</option>
								<?php } ?>
							</select>
						<?php } else { ?>
							<?php echo smartyTranslate(array('s'=>'No pages found','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

						<?php }?>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-lg-3">
					<span class="label-tooltip" data-toggle="tooltip"
					title="<?php echo smartyTranslate(array('s'=>'Enable, If you want to show this link to the navigation menu.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Show at navigation menu','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

					</span>
				</label>
				<div class="col-lg-9">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="show_at_navigation" id="show_at_navigation_on" value="1" checked="checked"/>
						<label for="show_at_navigation_on"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>

						<input type="radio" name="show_at_navigation" id="show_at_navigation_off" value="0" <?php if (isset($_POST['show_at_navigation'])) {?><?php if (!$_POST['show_at_navigation']) {?>checked="checked"<?php }?>
						<?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['show_at_navigation'])&&!$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['show_at_navigation']) {?>checked="checked"<?php }?>/>
						<label for="show_at_navigation_off"><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">
					<span class="label-tooltip" data-toggle="tooltip"
					title="<?php echo smartyTranslate(array('s'=>'Enable, If you want to show this link to the footer block.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Show at footer block','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

					</span>
				</label>
				<div class="col-lg-9">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="show_at_footer" id="show_at_footer_on" value="1" checked="checked"/>
						<label for="show_at_footer_on"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>

						<input type="radio" name="show_at_footer" id="show_at_footer_off" value="0" <?php if (isset($_POST['show_at_footer'])) {?><?php if (!$_POST['show_at_footer']) {?>checked="checked"<?php }?>
						<?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['show_at_footer'])&&!$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['show_at_footer']) {?>checked="checked"<?php }?>/>
						<label for="show_at_footer_off"><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-lg-3">
					<span class="label-tooltip" data-toggle="tooltip"
					title="<?php echo smartyTranslate(array('s'=>'Disabled navigation links will not be displayed anywhere.','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Enable','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

					</span>
				</label>
				<div class="col-lg-9">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="active" id="active_on" value="1" checked="checked"/>
						<label for="active_on"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>

						<input type="radio" name="active" id="active_off" value="0" <?php if (isset($_POST['active'])) {?><?php if (!$_POST['active']) {?>checked="checked"<?php }?>
						<?php } elseif (isset($_smarty_tpl->tpl_vars['navigationLinkInfo']->value['active'])&&!$_smarty_tpl->tpl_vars['navigationLinkInfo']->value['active']) {?>checked="checked"<?php }?>/>
						<label for="active_off"><?php echo smartyTranslate(array('s'=>'No','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>
			<div class="panel-footer">
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomNavigationLinkSetting');?>
" class="btn btn-default">
					<i class="process-icon-cancel"></i><?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

				</a>
				<button type="submit" name="submitAdd<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" class="btn btn-default pull-right">
					<i class="process-icon-save"></i><?php echo smartyTranslate(array('s'=>'Save','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

				</button>
				<button type="submit" name="submitAdd<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
AndStay" class="btn btn-default pull-right">
					<i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>

				</button>
			</div>
		</form>
	</div>
</div><?php }} ?>

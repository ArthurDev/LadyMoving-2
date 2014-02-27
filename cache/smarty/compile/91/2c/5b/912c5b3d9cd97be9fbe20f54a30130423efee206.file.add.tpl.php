<?php /* Smarty version Smarty-3.1.14, created on 2014-02-20 10:30:21
         compiled from "C:\wamp\www\LadyMoving\modules\blocklayered\views\templates\admin\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175105305cb2d67dca5-57687010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912c5b3d9cd97be9fbe20f54a30130423efee206' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\modules\\blocklayered\\views\\templates\\admin\\add.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175105305cb2d67dca5-57687010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'uri' => 0,
    'current_url' => 0,
    'id_layered_filter' => 0,
    'template_name' => 0,
    'categories_tree' => 0,
    'asso_shops' => 0,
    'total_filters' => 0,
    'attribute_groups' => 0,
    'attribute_group' => 0,
    'features' => 0,
    'feature' => 0,
    'filters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5305cb2d8c51b5_38402272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5305cb2d8c51b5_38402272')) {function content_5305cb2d8c51b5_38402272($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['message']->value)){?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php }?>
<fieldset>
	<legend><img src="<?php echo $_smarty_tpl->tpl_vars['uri']->value;?>
/img/cogs.gif" alt="<?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'blocklayered'),$_smarty_tpl);?>
" /> <?php echo smartyTranslate(array('s'=>'New filters template','mod'=>'blocklayered'),$_smarty_tpl);?>
</legend>
	<form action="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
" method="post" class="form-horizontal" onsubmit="return checkForm();">
		<input type="hidden" name="id_layered_filter" id="id_layered_filter" value="<?php echo $_smarty_tpl->tpl_vars['id_layered_filter']->value;?>
" />
		<table class="table-configurations">
			<tbody>
				<tr>
					<td class="label"><?php echo smartyTranslate(array('s'=>'Template name:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
					<td>
						<input type="text" id="layered_tpl_name" name="layered_tpl_name" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" />
						<p class="help-block"><?php echo smartyTranslate(array('s'=>'Only as a reminder','mod'=>'blocklayered'),$_smarty_tpl);?>
</p>	
					</td>
				</tr>
				<tr>
					<td class="label"><?php echo smartyTranslate(array('s'=>'Categories used for this template:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>
</td>
				</tr>
				<?php if (isset($_smarty_tpl->tpl_vars['asso_shops']->value)){?>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Choose shop association:','mod'=>'blocklayered'),$_smarty_tpl);?>
					
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</td>
				</tr>
				<?php }?>
				<tr>
					<td class="label">
						<?php echo smartyTranslate(array('s'=>'Filters:','mod'=>'blocklayered'),$_smarty_tpl);?>

						<p class="help-block"><?php echo smartyTranslate(array('s'=>'You can drag and drop filters to adjust position','mod'=>'blocklayered'),$_smarty_tpl);?>
</p>
					</td>
					<td>
						<section class="filter_panel">
							<header>
								<?php echo smartyTranslate(array('s'=>sprintf('Total filters: %s',$_smarty_tpl->tpl_vars['total_filters']->value),'mod'=>'blocklayered'),$_smarty_tpl);?>
 - <?php echo smartyTranslate(array('s'=>sprintf('Selected filters: <span id=\'selected_filters\'>%s</span>',0),'mod'=>'blocklayered'),$_smarty_tpl);?>

							</header>
							<section class="filter_list">
								<ul class="list-unstyled sortable">
									<li class="filter_list_item" draggable="true">								
										<table>
											<tbody>
												<tr>
													<td><input name="layered_selection_subcategories" id="layered_selection_subcategories" type="checkbox" /></td>
													<td class="filter-title"><?php echo smartyTranslate(array('s'=>'Sub-categories filter','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_subcategories_filter_show_limit">
															<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="10">10</option>
															<option value="20">20</option>
														</select>
													</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_subcategories_filter_type">
															<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>
									</li>
									<li class="filter_list_item" draggable="true">
										<table>
											<tbody>
												<tr>
													<td><input name="layered_selection_stock" id="layered_selection_stock" type="checkbox" /></td>
													<td class="filter-title"><?php echo smartyTranslate(array('s'=>'Product stock filter','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_stock_filter_show_limit">
															<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="10">10</option>
															<option value="20">20</option>
														</select>
													</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_stock_filter_type">
															<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>
									</li>
									<li class="filter_list_item" draggable="true">
										<table>
											<tbody>
												<tr>
													<td><input name="layered_selection_condition" id="layered_selection_condition" type="checkbox" /></td>
													<td class="filter-title"><?php echo smartyTranslate(array('s'=>'Product condition filter','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_condition_filter_show_limit">
															<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="10">10</option>
															<option value="20">20</option>
														</select>
													</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_condition_filter_type">
															<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>
									</li>
									<li class="filter_list_item" draggable="true">
										<table>
											<tbody>
												<tr>
													<td><input name="layered_selection_manufacturer" id="layered_selection_manufacturer" type="checkbox" /></td>
													<td class="filter-title"><?php echo smartyTranslate(array('s'=>'Product manufacturer filter','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_manufacturer_filter_show_limit">
															<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="10">10</option>
															<option value="20">20</option>
														</select>
													</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_manufacturer_filter_type">
															<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>
									</li>
									<li class="filter_list_item" draggable="true">
										<table>
											<tbody>
												<tr>
													<td><input name="layered_selection_weight_slider" id="layered_selection_weight_slider" type="checkbox" /></td>
													<td class="filter-title"><?php echo smartyTranslate(array('s'=>'Product weight filter (slider)','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_weight_slider_filter_show_limit">
															<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="10">10</option>
															<option value="20">20</option>
														</select>
													</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_weight_slider_filter_type">
															<option value="0"><?php echo smartyTranslate(array('s'=>'Slider','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="1"><?php echo smartyTranslate(array('s'=>'Inputs area','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="2"><?php echo smartyTranslate(array('s'=>'List of values','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>
									</li>
									<li class="filter_list_item" draggable="true">
										<table>
											<tbody>
												<tr>
													<td><input name="layered_selection_price_slider" id="layered_selection_price_slider" type="checkbox" /></td>
													<td class="filter-title"><?php echo smartyTranslate(array('s'=>'Product price filter (slider)','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_price_slider_filter_show_limit">
															<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="10">10</option>
															<option value="20">20</option>
														</select>
													</td>
													<td><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
													<td>
														<select name="layered_selection_price_slider_filter_type">
															<option value="0"><?php echo smartyTranslate(array('s'=>'Slider','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="1"><?php echo smartyTranslate(array('s'=>'Inputs area','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															<option value="2"><?php echo smartyTranslate(array('s'=>'List of values','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>
									</li>
									<?php if (count($_smarty_tpl->tpl_vars['attribute_groups']->value)>0){?>
										<?php  $_smarty_tpl->tpl_vars['attribute_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attribute_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute_group']->key => $_smarty_tpl->tpl_vars['attribute_group']->value){
$_smarty_tpl->tpl_vars['attribute_group']->_loop = true;
?>
										<li class="filter_list_item" draggable="true">
											<table>
												<tbody>
													<tr>
														<td><input name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" id="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" type="checkbox" /></td>
														<td class="filter-title">
															<?php if ($_smarty_tpl->tpl_vars['attribute_group']->value['n']>1){?>
																<?php echo smartyTranslate(array('s'=>sprintf('Attribute group: %1$s (%2$d attributes)',$_smarty_tpl->tpl_vars['attribute_group']->value['name'],$_smarty_tpl->tpl_vars['attribute_group']->value['n']),'mod'=>'blocklayered'),$_smarty_tpl);?>

															<?php }else{ ?>
																<?php echo smartyTranslate(array('s'=>sprintf('Attribute group: %1$s (%2$d attribute)',$_smarty_tpl->tpl_vars['attribute_group']->value['name'],$_smarty_tpl->tpl_vars['attribute_group']->value['n']),'mod'=>'blocklayered'),$_smarty_tpl);?>

															<?php }?>
															<?php if ($_smarty_tpl->tpl_vars['attribute_group']->value['is_color_group']){?>
																<img src="../img/admin/color_swatch.png" alt="" title="<?php echo smartyTranslate(array('s'=>'This group will allow user to select a color','mod'=>'blocklayered'),$_smarty_tpl);?>
" />
															<?php }?>
														</td>
														<td><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
														<td>
															<select name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
_filter_show_limit">
																<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="10">10</option>
																<option value="20">20</option>
															</select>
														</td>
														<td><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
														<td>
															<select name="layered_selection_ag_<?php echo (int)$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
_filter_type">
																<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
																<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
																<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															</select>
														</td>
													</tr>
												</tbody>
											</table>
										</li>
										<?php } ?>
									<?php }?>

									<?php if (count($_smarty_tpl->tpl_vars['features']->value)>0){?>
										<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
										<li class="filter_list_item" draggable="true">
											<table>
												<tbody>
													<tr>
														<td><input name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
" id="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
" type="checkbox" /></td>
														<td class="filter-title">
															<?php if ($_smarty_tpl->tpl_vars['feature']->value['n']>1){?><?php echo smartyTranslate(array('s'=>sprintf('Feature: %1$s (%2$d values)',$_smarty_tpl->tpl_vars['feature']->value['name'],$_smarty_tpl->tpl_vars['feature']->value['n']),'mod'=>'blocklayered'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>sprintf('Feature: %1$s (%2$d value)',$_smarty_tpl->tpl_vars['feature']->value['name'],$_smarty_tpl->tpl_vars['feature']->value['n']),'mod'=>'blocklayered'),$_smarty_tpl);?>
<?php }?>
														</td>
														<td><?php echo smartyTranslate(array('s'=>'Filter result limit:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
														<td>
															<select name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
_filter_show_limit">
																<option value="0"><?php echo smartyTranslate(array('s'=>'No limit','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="10">10</option>
																<option value="20">20</option>
															</select>
														</td>
														<td><?php echo smartyTranslate(array('s'=>'Filter style:','mod'=>'blocklayered'),$_smarty_tpl);?>
</td>
														<td>
															<select name="layered_selection_feat_<?php echo (int)$_smarty_tpl->tpl_vars['feature']->value['id_feature'];?>
_filter_type">
																<option value="0"><?php echo smartyTranslate(array('s'=>'Checkbox','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
																<option value="1"><?php echo smartyTranslate(array('s'=>'Radio button','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
																<option value="2"><?php echo smartyTranslate(array('s'=>'Drop-down list','mod'=>'blocklayered'),$_smarty_tpl);?>
</option>
															</select>
														</td>
													</tr>
												</tbody>
											</table>
										</li>
										<?php } ?>
									<?php }?>
								</ul>
							</section>
						</section>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<button class="btn btn-default pull-right" id="submit-filter" name="SubmitFilter" type="submit"><i class="process-icon-save"></i> <span><?php echo smartyTranslate(array('s'=>'Save','mod'=>'blocklayered'),$_smarty_tpl);?>
</span></button>
						<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
">
							<i class="process-icon-cancel "></i> <span>Cancel</span>
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</fieldset>

<script type="text/javascript">
	var translations = new Array();
	<?php if (isset($_smarty_tpl->tpl_vars['filters']->value)){?>var filters = '<?php echo $_smarty_tpl->tpl_vars['filters']->value;?>
';<?php }?>
	translations['no_selected_categories'] = '<?php echo smartyTranslate(array('s'=>addslashes('You must select at least a category'),'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['no_selected_filters'] = '<?php echo smartyTranslate(array('s'=>addslashes('You must select at least a filter'),'mod'=>'blocklayered'),$_smarty_tpl);?>
';
	translations['selected_filters'] = '<?php echo smartyTranslate(array('s'=>addslashes('Selected filters: %s'),'mod'=>'blocklayered'),$_smarty_tpl);?>
';
</script><?php }} ?>
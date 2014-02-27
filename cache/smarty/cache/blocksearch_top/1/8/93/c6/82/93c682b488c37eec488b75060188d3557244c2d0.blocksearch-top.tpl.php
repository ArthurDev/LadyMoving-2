<?php /*%%SmartyHeaderCode:549725815530f4ad896ebd4-51137254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93c682b488c37eec488b75060188d3557244c2d0' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/themes/leoclot/modules/blocksearch/blocksearch-top.tpl',
      1 => 1392888048,
      2 => 'file',
    ),
    '1c243cc4075c5660d72cdaca42b7e6d3ce08ce26' => 
    array (
      0 => '/Applications/MAMP/htdocs/LadyMoving-2/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '549725815530f4ad896ebd4-51137254',
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f4ad8cbc055_32026990',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f4ad8cbc055_32026990')) {function content_530f4ad8cbc055_32026990($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<form method="get" action="http://127.0.0.1/LadyMoving-2/recherche" id="searchbox" class="row">
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />	
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" value="" placeholder="Rechercher" />
		<input type="submit" name="submit_search" value="Rechercher" class="button" />
	</form>
</div>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://127.0.0.1/LadyMoving-2/recherche', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>
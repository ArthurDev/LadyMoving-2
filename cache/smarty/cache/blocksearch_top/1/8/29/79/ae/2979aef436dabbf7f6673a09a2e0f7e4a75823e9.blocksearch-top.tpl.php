<?php /*%%SmartyHeaderCode:26556530f5f9d9d0f35-74527711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2979aef436dabbf7f6673a09a2e0f7e4a75823e9' => 
    array (
      0 => 'C:\\wamp\\www\\Github\\LadyMoving-2\\themes\\leoclot\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1393509248,
      2 => 'file',
    ),
    'cad0594f91a4fa5bc6b727fa819e81f6dcbab5bc' => 
    array (
      0 => 'C:\\wamp\\www\\Github\\LadyMoving-2\\modules\\blocksearch\\blocksearch-instantsearch.tpl',
      1 => 1393509246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26556530f5f9d9d0f35-74527711',
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f5f9dad3c28_62479303',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f5f9dad3c28_62479303')) {function content_530f5f9dad3c28_62479303($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<form method="get" action="http://192.168.1.10/Github/LadyMoving-2/recherche" id="searchbox" class="row">
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
					'http://192.168.1.10/Github/LadyMoving-2/recherche', {
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
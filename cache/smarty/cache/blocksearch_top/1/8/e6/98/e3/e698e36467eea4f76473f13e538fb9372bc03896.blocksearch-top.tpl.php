<?php /*%%SmartyHeaderCode:195115305c965d88628-09810049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e698e36467eea4f76473f13e538fb9372bc03896' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\themes\\leoclot\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1392888047,
      2 => 'file',
    ),
    '2b5091b447e12e4e2c787b5c38011c3bdc8c84d6' => 
    array (
      0 => 'C:\\wamp\\www\\LadyMoving\\modules\\blocksearch\\blocksearch-instantsearch.tpl',
      1 => 1390208060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195115305c965d88628-09810049',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530dfd4e7b9fe5_69511495',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530dfd4e7b9fe5_69511495')) {function content_530dfd4e7b9fe5_69511495($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<form method="get" action="http://192.168.1.10/LadyMoving/recherche" id="searchbox" class="row">
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
					'http://192.168.1.10/LadyMoving/recherche', {
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
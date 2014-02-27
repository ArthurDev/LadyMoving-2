<div  class="lof-cmssticker-default block" style="width:{$moduleWidth}; height:{$moduleHeight}">
{if $show_title}
    <div class="lof-mod-title">
        <span>{$module_title}</span>
	</div>
{/if}
<div id="lof-cmssticker{$posName}{$blockid}" class="leocmssticker_common_cms">
<ul>
{foreach from=$cmssticker_products key=key item=item}
	<li>{$item.content}</li>
{/foreach}
</ul>
</div>
{if $show_controls}
<div class="control_buttons">
	<ul class="ticker-controls">
		<li class="lofsticker_play controls play"  id="lofsticker_play{$posName}{$blockid}"><a href="javascript:;">Play</a></li>
		<li class="lofsticker_prev controls"  id="lofsticker_prev{$posName}{$blockid}"><a href="javascript:;">Prev</a></li>
		<li class="lofsticker_next controls"  id="lofsticker_next{$posName}{$blockid}"><a href="javascript:;">Next</a></li>
	</ul>
</div>
{/if}
</div>
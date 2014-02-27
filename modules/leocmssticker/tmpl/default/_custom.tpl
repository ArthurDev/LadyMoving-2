<div id="cms_sticker" class="block" style="width:{$module_width}; height:{$module_height}">
    {if $show_title}
		<h3 class="title_block"> 
			<span>{l s='Customer review' mod='leocmssticker'}</span>
		</h3>
    {/if}
   
    <div class="carousel-inner">
    {foreach from=$cmssticker_products name="mypLoop" key=key item=item}
        <div class="item {if $smarty.foreach.mypLoop.index == $startSlide}active{/if}">{$item.content}</div>
    {/foreach}   
    </div>
    {if $show_controls AND count($cmssticker_products)>1}
	<div class="control_buttons">
		<a class="carousel-control left" href="#cms_sticker" data-slide="prev"><i class="icon-arrow-left"></i></a>
		<a class="carousel-control right" href="#cms_sticker" data-slide="next"><i class="icon-arrow-right"></i></a>
	</div>
    {/if}
</div>
<script type="text/javascript">
{literal}

$(document).ready(function() {
    $('#cms_sticker').each(function(){
        $(this).carousel({
            pause: true,
            interval: {/literal}{$interval}{literal}
        });
    });
	 
});

{/literal}
</script>

<div class="lofcontent_defaulttheme">
    <h2>{if !$category->id}{l s='Articles' mod='lofblogs'}{else}{$category->name}{/if}</h2>
    {if $config.showCatImage && $category->image}   
        <img src="{$imgPrimaryUri}{$category.image}" alt="{$category->name}" />
    {/if}
    {if $lofblock_top}<div class="defaulttheme_topblock">{$lofblock_top}</div>{/if}
    {if $LOFSYSTEM_LIST}
    <div class="defaulttheme_list_articles">
        {$LOFSYSTEM_LIST}
    </div>
    {if $LOFSYSTEM_PAGINATION}{$LOFSYSTEM_PAGINATION}{/if}
    {/if}
    <a target="_blank" class="lofblogs-rss" href="{$category->rssFeedLink}" title="{$category->name} - Rss feed"><img src="{$themeImage}rss.png" /></a>
    {if $lofblock_bottom}<div class="defaulttheme_bottomblock">{$lofblock_bottom}</div>{/if}
</div>
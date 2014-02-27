{foreach from=$LBObject item=article}
    <div class="lofcontent_category_item">   
        {if $article.image}
        <div class="lof_item_thumb">
            <img src="{$thumbUri}{$article.image}" alt="{$article.title}" />
        </div>
        {/if}
        <div class="lof_item_desc">
            <p class="lof_link_title" >
                <a href="{$article.link}" title="{$article.title}" >{$article.title}</a>
            </p>
        {if $config.showInfoList}<p class="article_infor">{l s='written by ' mod='lofblogs'}<span class="lofcontent_authorname">{$article.authorname}</span>{l s=' at ' mod='lofblogs'}{$article.displayDate}</p>{/if}
    {if $config.showRatingList}{$article.ratingPage}{/if}
    <p class="lof_description">{$article.introtext}</p>
</div>
</div>
{/foreach}

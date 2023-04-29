{extends file='page.tpl'}
{block name="content"}
<ul>
    <li>{l s='NUmber of products' mod='multipurpose'}&nbsp;{$nb_products}</li>
    <li>
        Categories :
        <ul>
            {foreach from=$categories item=$cat}
                <li>{$cat['name']}</li>
            {{/foreach}}
        </ul>
    </li>
    <li>SHOP_NAME : {$shop_name}</li>
    <li>{$manufacturer['name']}</li>
</ul>
{/block}
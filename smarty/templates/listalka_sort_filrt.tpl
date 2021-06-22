<table border="1">
    <tr>
        <td>№</td>
        <td>Назва</td>
        <td>Фото</td>
        <td><a href="listalka_sort_filtr.php?sort={if isset($sort)}{$sort}{/if}{if isset($id_cat)}&id_cat={$id_cat}{/if}{if isset($active_page)}&page={$active_page}{/if}">Ціна</td>
    </tr>
    {section loop=$list name=i}
        <tr>
            <td>{$num++}</td>
            <td>{$list[i].name}</td>
            <td><img src="images/{$list[i].photo}" width="100px"></td>
            <td>{$list[i].price}</td>
        </tr>
        {/section}
</table>
<table>
    <tr>
    {if $active_page==1}
        <td> << </td>
        {else}
        <td><a href="listalka_sort_filtr.php?page={$active_page-1}{if isset($id_cat)}&id_cat={$id_cat}{/if}"> << </a></td>
        {/if}
        {section loop=$pages name =i}
            {if $active_page==$pages[i].p}
                <td>{$pages[i].p}</td>
                {else}
                <td><a href="listalka_sort_filtr.php?page={$pages[i].p}{if isset($id_cat)}&id_cat={$id_cat}{/if}">{$pages[i].p}</a></td>
            {/if}
            {/section}
        {if $active_page==$count_pages}
            <td> >> </td>
            {else}
            <td><a href="listalka_sort_filtr.php?page={$active_page+1}{if isset($id_cat)}&id_cat={$id_cat}{/if}"> >> </a></td>
            {/if}
    </tr>
</table>
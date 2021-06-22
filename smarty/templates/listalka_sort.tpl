<table border="1">
    <tr>
        <td>№</td>
        <td>Назва</td>
        <td>Фото</td>
        <td><a href="listalka_sort.php?&page={$active_page}&sort={if isset($sort)}{$sort}{/if}">Ціна</td>
    </tr>
    {section loop=$listalka_sort name=i}
        <tr>
            <td>{$num++}</td>
            <td>{$listalka_sort[i].name}</td>
            <td><img src="images/{$listalka_sort[i].photo}" width="100px"></td>
            <td>{$listalka_sort[i].price}</td>
        </tr>
    {/section}
</table>
<table>
    <tr>
    {if $active_page==1}
        <td> << </td>
        {else}
        <td><a href="listalka_sort.php?page={$active_page-1}{if isset($id_cat)}&id_cat={$id_cat}{/if}{if isset($sort1)}&sort={$sort1}{/if}"> << </a></td>
        {/if}
        {section loop=$pages name=i}
            {if $active_page==$pages[i].p}
                <td>{$pages[i].p}</td>
                {else}
                <td><a href="listalka_sort.php?page={$pages[i].p}{if isset($ia_cat)}&id_cat={$id_cat}{/if}{if isset($sort1)}&sort={$sort1}{/if}">{$pages[i].p}</a></td>
            {/if}
            {/section}
        {if $active_page==$count_page}
            <td> >> </td>
            {else}
            <td><a href="listalka_sort.php?page={$active_page+1}{if isset($id_cat)}&id_cat={$id_cat}{/if}{if isset($sort1)}&sort={$sort1}{/if}"> >> </a></td>
            {/if}
    </tr>
</table>
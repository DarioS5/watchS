<table border="1">
    <tr>
        <td>№</td>
        <td>Фото</td>
        <td>Назва</td>
        <td>Ціна</td>
    </tr>
    {section loop=$listalka_filtr name=i}
        <tr>
            <th>{$num++}</th>
            <th><img src="images/{$listalka_filtr[i].photo}" width="100px"></th>
            <th>{$listalka_filtr[i].name}</th>
            <th>{$listalka_filtr[i].price}</th>
        </tr>
        {/section}
</table>
<table>
    <tr>
        {if $active_page==1}
            <td><<</td>
            {else}
            <td><a href="listalka_filtr.php?page={$active_page-1}{if isset($id_cat)}&id_cat={$id_cat}{/if}"> << </a></td>
            {/if}
        {section loop=$pages name=i}
            {if $active_page==$pages[i].p}
                <td>{$pages[i].p}</td>
                {else}
                <td><a href="listalka_filtr.php?page={$pages[i].p}{if isset($id_cat)}&id_cat={$id_cat}{/if}">{$pages[i].p}</a></td>
                {/if}
            {/section}
        {if $active_page==$count_pages}
            <td> >> </td>
            {else}
            <td><a href="listalka_filtr.php?page={$active_page+1}{if isset($id_cat)}&id_cat={$id_cat}{/if}"> >> </a></td>
            {/if}
    </tr>
</table>
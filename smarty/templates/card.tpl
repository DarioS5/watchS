<table border="1">
        <tr>
            <td>№</td>
            <td>Фото</td>
            <td>Назва</td>
            <td>К-сть</td>
            <td>Купить</td>
            <td>Ціна</td>

        </tr>
        {section loop=$card name=i}
            <tr>
                <th>{$num++}</th>
                <th><img src="images/{$card[i].photo}" width="100px"></th>
                <th>{$card[i].name}</th>
                <th>{$card[i].kolvo}</th>
                <th><a href="basket.php?id={$card[i]['id']}&mode=add&page={$active_page}">купить</a></th>
                <th>{$card[i].price}</th>
            </tr>
        {/section}
    </table>
<table>
    <tr>
        {if $active_page==1}
            <td> << </td>
            {else}
            <td><a href="card.php?page={$active_page-1}"> << </a></td>
            {/if}
        {section loop=$pages name=i}
            {if $active_page==$pages[i].p}
            <td>{$pages[i].p}</td>
            {else}
            <td><a href="card.php?page={$pages[i].p}">{$pages[i].p}</a></td>
            {/if}
        {/section}
        {if $active_page==$count_page}
            <td> >> </td>
            {else}
            <td><a href="card.php?page={$active_page+1}"> >> </a></td>
            {/if}

    </tr>
</table>

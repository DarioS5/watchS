<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th>Ціна</th>
    </tr>
    {section loop=$listalka name=i}
        <tr>
            <td>{$num++}</td>
            <td><img src="images/{$listalka[i].photo}" width="100px"</td>
            <td>{$listalka[i].name}</td>
            <td>{$listalka[i].price}</td>
        </tr>
    {/section}
</table>
<table>
    <tr>
        {if $active_page==1}
            <td><<</td>
        {else}
            <td><a href="listalka.php?page={$active_page-1}"> << </a></td>
        {/if}
        {section loop=$pages name=i}
            {if $active_page==$pages[i].p}
                <td>{$pages[i].p}</td>
                {else}
                <td><a href="listalka.php?page={$pages[i].p}">{$pages[i].p}</a></td>
            {/if}

        {/section}
        {if $active_page==$count_pages}
            <td>>></td>
            {else}
            <td><a href="listalka.php?page={$active_page+1}"> >> </a></td>
            {/if}


    </tr>
</table>
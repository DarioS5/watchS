<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th><a href="sort.php?sort1={if isset($sort1)}{$sort1}{/if}">Ціна</a></th>
    </tr>
    {section loop=$sort name=i}
        <tr>
            <td>{$num++}</td>
            <td><img src="images/{$sort[i].photo}" width="100px"></td>
            <td>{$sort[i].name}</td>
            <td>{$sort[i].price}</td>
        </tr>
    {/section}
</table>


<table border="1">
    <tr>
        <th>№</th>
        <th>фото</th>
        <th>назва</th>
        <th>ціна</th>
        <th colspan="2">Детальніше</th>
    </tr>
    {section loop=$watch name=i}
        <tr>
            <td>{$num++}</td>
            <td><img src="images/{$watch[i].photo}" width="100px"></td>
            <td>{$watch[i].name}</td>
            <td>{$watch[i].price}</td>
            <td><a href="info_id.php?id={$watch[i].id}">Детальніше</a></td>
        </tr>
        {/section}
</table>
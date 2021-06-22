<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>назва</th>
        <th>ціна</th>
    </tr>
    {section loop=$watch name=i}
<tr>
    <td>{$num++}</td>
    <td><img src="images/{$watch[i].photo}" width="100px"></td>
    <td>{$watch[i].name}</td>
    <td>{$watch[i].price}</td>
</tr>
{/section}
</table>
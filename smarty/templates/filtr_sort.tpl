<table border="1">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th><a href="filtr_sort.php?sort={if isset($sort)}{$sort}{/if}{if isset($id_cat)}&id_cat={$id_cat}{/if}">Ціна</a></th>
    </tr>
    {section loop=$filtrSort name=i}
        <tr>
            <td>{$num++}</td>
            <td><img src="images/{$filtrSort[i].photo}" width="100px"></td>
            <td>{$filtrSort[i].name}</td>
            <td>{$filtrSort[i].price}</td>
        </tr>
    {/section}
</table>